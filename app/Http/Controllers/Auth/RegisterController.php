<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;
use Auth;
use App\Refferal;
use App\Affiliate;
use Illuminate\Http\Request;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $mailchimp;
    protected $listId = 'f594005047';        // Id of newsletter list

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(\Mailchimp $mailchimp)
    {
        $this->middleware('guest');
        $this->mailchimp = $mailchimp;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid cd registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data, $role)
    {
        $rand = rand();
        $this->mailchimp->lists->subscribe($this->listId, ['email' => $data['email']]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'provider' => 'Job Kartel',
            'role' => $role,
            'verification_code' => $rand
        ]);
        Mail::to($data['email'])->send(new VerifyEmail($user));
        flash('Pendaftaran Berjaya, Sila Semak Email Anda Bagi Pengesahan','info');
        return Auth::login($user, true);
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function handleProviderCallback($provider)
     {
         $user = Socialite::driver($provider)->user();

         $authUser = $this->findOrCreateUser($user, $provider);
         Auth::login($authUser, true);
         return redirect($this->redirectTo);
     }

     /**
      * If a user has registered before using social auth, return the user
      * else, create a new user object.
      * @param  $user Socialite user object
      * @param $provider Social auth provider
      * @return  User
      */
     public function findOrCreateUser($user, $provider)
     {
         $authUser = User::where('provider_id', $user->id)->first();
         if ($authUser) {
             return $authUser;
         }
         return User::create([
             'name'     => $user->name,
             'email'    => $user->email,
             'provider' => $provider,
             'provider_id' => $user->id,
             'role' => 'users',
             'verification_code' => '1'
         ]);
     }
     public function verifyAccount($code){
       $user = User::where('verification_code', $code);
       $user->update([
         'status' => 1
       ]);

       if (empty($user)) {
        flash('Pengesahan Gagal Dibuat, Sila Cuba Sekali Lagi !', 'danger');
       }else{
         flash('Pengesahan Anda Berjaya, Sila Log Masuk', 'success');
         $user->update([
            'status' => true
         ]);
       }
       return redirect('/login');
     }

}
