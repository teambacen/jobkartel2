<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Detail;
use App\Refferal;
use App\Affiliate;
use App\User;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendVerify(){
       $rand = rand();
       $user = User::find(Auth::user()->id);
       $user->update([
          'verification_code' => $rand
       ]);
       Mail::to($user->email)->send(new VerifyEmail($user));
       return redirect('/resume');
    }
    public function index(Request $request)
    {
        if(!empty($request->cookie('refferal'))){
          if (Auth::user()->refferal_id == null) {
            $affiliate = Affiliate::where('username', $request->cookie('refferal'))->first();
            $user = User::find(Auth::user()->id);
            $user->update([
                'refferal_id' => $affiliate->id
            ]);
          }
        }
        if (Auth::user()->role == 'affiliate') {
          return redirect(action('AffiliateController@index'));
        }
        $detail =  Detail::where('user_id',Auth::user()->id)->get();
        return view('dashboard', compact('detail'));
    }
    public function dashboard(){
      $detail = Detail::where('user_id',Auth::user()->id)->get();
      return view('dashboard', compact('detail'));
    }
}
