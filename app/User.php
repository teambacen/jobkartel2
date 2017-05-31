<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id', 'refferal_id','role','verification_code','status','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function detail(){
      return $this->hasOne(Detail::class);
    }
    public function contact(){
      return $this->hasOne(Contact::class);
    }
    public function education(){
      return $this->hasMany(Education::class);
    }
    public function skill(){
      return $this->hasMany(Skill::class);
    }
    public function work(){
      return $this->hasMany(Work::class);
    }
    public function subscription(){
      return $this->hasMany(Subscription::class);
    }
    public function payment(){
      return $this->hasMany(Payment::class);
    }
    public function affiliate(){
      return $this->hasOne(Affiliate::class);
    }
    public function affiliateInfo(){
      return $this->hasOne(AffiliateInfo::class);
    }
    public function refferal(){
      return $this->hasMany(Refferal::class);
    }
    public function avatars(){
      return $this->hasOne(Avatar::class);
    }
    public function language(){
      return $this->hasMany(Language::class);
    }
    public function award(){
      return $this->hasMany(Award::class);
    }
    public function cover(){
      return $this->hasOne(CoverLetter::class);
    }
}
