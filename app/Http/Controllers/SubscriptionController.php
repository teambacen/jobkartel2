<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kidino\Billplz\Billplz;
use App\Payment;
use Auth;
use App\Subscription;
use Carbon\Carbon;
use App\AffiliateStat;

class SubscriptionController extends Controller
{

    public function index(){
      return view('setting.subscription.index');
    }
    public function subscription($coupon){
        switch ($coupon) {
          case 'JK280':
              $harga = '10000';
            break;

          default:
              $harga = '28000';
            break;
        }
        $bill = new Billplz;
        $bill->set_data(array(
          'collection_id' => 'spoxufzy',
          'email' => Auth::user()->email,
          'name' => Auth::user()->name,
          'description' => 'Jobkartel',
          'amount' => $harga,
          'callback_url' => "http://sample-env.qx63w65kpd.us-west-2.elasticbeanstalk.com/payment/callback",
          'redirect_url' => "http://sample-env.qx63w65kpd.us-west-2.elasticbeanstalk.com/payment/callback"
        ));
        $result = $bill->create_bill();
        $bill_result = json_decode($result);
        $payment = new Payment;
        $payment->bill_id = $bill_result->id;
        $payment->status = $bill_result->paid;
        $payment->amount = $bill_result->paid_amount;
        $payment->user()->associate(Auth::user());
        $payment->save();
        return redirect($bill_result->url);
    }
    public function callback(Request $request){
      $id = $request->input('billplz.id');
      $payment = Payment::where('bill_id', $id);
      $bill = new Billplz;
      $result = $bill->get_bill($id);
      $bill_result = json_decode($result);
      $payment->update([
          'status' => $bill_result->paid,
          'amount' => $bill_result->paid_amount,
      ]);
      $dt = Carbon::now('Asia/Tokyo');
      if ($bill_result->paid == 1) {
        $subscription = new Subscription;
        $subscription->start = $dt->startOfDay();
        $subscription->expire = $dt->addMonth();
        $subscription->user()->associate(Auth::user());
        $subscription->save();
        //affiliate
        if (Auth::user()->refferal_id != null) {
          $pay = Payment::where('bill_id', $request->input('billplz.id'))->first();
          $affiliate = new AffiliateStat;
          $affiliate->create([
              'status' => 'unpaid',
              'paid' => $bill_result->paid_amount / 2,
              'affiliate_id' => Auth::user()->refferal_id,
              'payment_id' => $pay->id,
          ]);
        }
      }

      return redirect(action('SettingController@index'));
    }
}
