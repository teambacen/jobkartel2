<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Affiliate;
use App\AffiliateInfo;
use Validator;
use Auth;
use App\Click;
use App\AffiliateStat;
use App\Payment;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;
use Response;
use Image;
use App\Avatar;
class AffiliateController extends Controller
{
    public function __construct(){
      $this->middleware('auth', ['except' => 'referral']);
    }
    public function index(){
      if (empty(Auth::user()->affiliate)) {
        return redirect('/affiliates/profile');
      }
      $affiliat = Affiliate::where('user_id', Auth::user()->id)->first();
      $affiliate = AffiliateStat::where('affiliate_id', $affiliat->id)->sum('paid');
      $clicks =  Click::orderBy('click', 'desc')->limit(10)->get();
      return view('affiliate.index', compact('affiliate', 'clicks'));

    }
    public function register(){
      return view('affiliate.register');
    }
    public function create(Request $request){
      $validator = Validator::make($request->all(),[
          'username' => 'required|unique:affiliates',
      ]);
      if ($validator->fails()) {
        return redirect('affiliates/profile')
                  ->withErrors($validator)
                  ->withInput();
      }
      //register for affiliate
      $affiliate = new Affiliate;
      $affiliate->username = $request->username;
      $affiliate->user()->associate($request->user());
      $affiliate->save();

      //affiliate info
      $affiliateInfo = new AffiliateInfo;
      $affiliateInfo->first_name = $request->first_name;
      $affiliateInfo->last_name = "takada";
      $affiliateInfo->phone = $request->phone;
      $affiliateInfo->address_1 = $request->address_1;
      $affiliateInfo->address_2 = $request->address_2;
      $affiliateInfo->city = $request->city;
      $affiliateInfo->postcode = $request->postcode;
      $affiliateInfo->country = $request->country;
      $affiliateInfo->state = $request->state;
      $affiliateInfo->bankname = $request->bankname;
      $affiliateInfo->account_name = $request->account_name;
      $affiliateInfo->account_number = $request->account_number;
      $affiliateInfo->user()->associate($request->user());
      $affiliateInfo->save();

      flash('Terima Kasih Untuk Pendaftaran Affiliate', 'success');
      return redirect('affiliates');
    }
    public function update(Request $request, $id){
      $affiliateInfo = AffiliateInfo::find($id);
      $affiliateInfo->update($request->all());

      return redirect('/affiliates/profile');
    }
    public function referral(Request $request, $username){
      $affiliate = Affiliate::where('username', $username)->first();

      if (empty($request->cookie('refferal'))) {
        $cookie = cookie('refferal',$username,262800);


        if (count($affiliate->click) == 0) {
          $clicks = new Click;
          $clicks->create([
              'affiliate_id' => $affiliate->id,
              'click' => 1,
          ]);
        }else {
          $clicks = Click::where('affiliate_id', $affiliate->id)->first();
          $clicks->update([
              'click' => $clicks->click+1
          ]);
        }
        return redirect('/offer')->cookie($cookie);
      }

      return redirect('/offer');
    }
    public function jualan(){
      if (empty(Auth::user()->affiliate)) {
        return redirect('/affiliates/profile');
      }
      $user = Payment::all();
      return view('affiliate.jualan', compact('user'));
    }
    public function komisyen(){
      if (empty(Auth::user()->affiliate)) {
        return redirect('/affiliates/profile');
      }
      return view('affiliate.komisyen');
    }
    public function mail(){
      if (empty(Auth::user()->affiliate)) {
        return redirect('/affiliates/profile');
      }
      return Mail::to('ridwanramly04@gmail.com')->send(new VerifyEmail());
    }
    public function tool(){
      if (empty(Auth::user()->affiliate)) {
        return redirect('/affiliates/profile');
      }
      return view('affiliate.tool');
    }
    public function download_tool($file){
      $headers = [
          'Content-Type: application/force-download'
      ];
      switch ($file) {
        case '1':
            return Response::download(public_path().'/image/tool/blog/1.docx', '#1 Kenali Punca Masalah.docx', $headers);
          break;
        case '2':
            return Response::download(public_path().'/image/tool/blog/2.docx', '#2 Dokumen Yang Lengkap.docx', $headers);
          break;
        case '3':
            return Response::download(public_path().'/image/tool/blog/3.docx', '#3 Pembuatan Winning Resume.docx', $headers);
          break;
        case '4':
            return Response::download(public_path().'/image/tool/blog/4.docx', '#4 Cara Membuat Cover Letter.docx', $headers);
          break;
        case '5':
            return Response::download(public_path().'/image/tool/blog/5.docx', '#5 Soalan Lazim Temuduga.docx', $headers);
          break;
        case '6':
            return Response::download(public_path().'/image/tool/blog/6.docx', '#6 Kepentingan Membina Keyakinan Diri.docx', $headers);
          break;
        case '7':
            return Response::download(public_path().'/image/tool/blog/7.docx', '#7 Pengalaman Temuduga Yang Sangat Memalukan!.docx', $headers);
          break;
        case 'review_1':
            return Response::download(public_path().'/image/tool/Review/1.docx', '#1 Amirah Hizadin.docx', $headers);
          break;
        case 'review_2':
            return Response::download(public_path().'/image/tool/Review/2.docx', '#2 Shameerul Aktif.docx', $headers);
          break;
        case 'killer':
            return Response::download(public_path().'/image/tool/Ebook/killer.pdf', 'ebook.pdf', $headers);
          break;
        case 'interview':
            return Response::download(public_path().'/image/tool/Ebook/interview.pdf', 'ebook.pdf', $headers);
          break;
        case 'hr':
            return Response::download(public_path().'/image/tool/Ebook/interview.pdf', 'ebook.pdf', $headers);
          break;
        case 'cw1':
            return Response::download(public_path().'/image/tool/fbads/cw1.txt', 'cw1.txt', $headers);
          break;
        case 'cw2':
            return Response::download(public_path().'/image/tool/fbads/cw2.txt', 'cw2.txt', $headers);
          break;
        case 'cw3':
            return Response::download(public_path().'/image/tool/fbads/cw3.txt', 'cw3.txt', $headers);
          break;
        case 'cw4':
            return Response::download(public_path().'/image/tool/fbads/cw4.txt', 'cw4.txt', $headers);
          break;
        case 'cw5':
            return Response::download(public_path().'/image/tool/fbads/cw5.txt', 'cw5.txt', $headers);
          break;
        case 'cw6':
            return Response::download(public_path().'/image/tool/fbads/cw6.txt', 'cw6.txt', $headers);
          break;
        case 'email1':
            return Response::download(public_path().'/image/tool/email/1.txt', '#1 72H Before Launching.txt', $headers);
          break;
        case 'email2':
            return Response::download(public_path().'/image/tool/email/2.txt', '#2 42H Before Launching.txt', $headers);
          break;
        case 'email3':
            return Response::download(public_path().'/image/tool/email/3.txt', '#3 24H Before Launching.txt', $headers);
          break;
        case 'email4':
            return Response::download(public_path().'/image/tool/email/4.txt', '#4 Emel Launching.txt', $headers);
          break;
        case 'email5':
            return Response::download(public_path().'/image/tool/email/5.txt', '#5 Reminding Emel.txt', $headers);
          break;
        case 'email6':
            return Response::download(public_path().'/image/tool/email/6.txt', '#6 Testimoni Emel.txt', $headers);
          break;
        case 'email7':
            return Response::download(public_path().'/image/tool/email/7.txt', '#7 Follow Up Emel.txt', $headers);
          break;

      }
      return public_path();
    }
    public function upload_gambar(Request $request){
        $avatar = new Avatar;
        if ($request->hasFile('gambar')) {
          $file = $request->file('gambar');
          $filename = rand().'.'.$file->getClientOriginalExtension();
          $path = public_path('media/affiliates/'.$filename);
          Image::make($file->getRealPath())->resize(150,180)->save($path);
          if (count(Auth::user()->avatar) === 0) {
            $avatar->gambar =  $filename;
            $avatar->user()->associate($request->user());
            $avatar->save();
          }else{
            $update = Avatar::where('user_id', Auth::user()->id);
            $update->update([
                'gambar' => $filename
            ]);
          }

        }
        return redirect(action('AffiliateController@index'));
    }
}
