<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    protected $table = 'affiliates';
    protected $fillable = [
        'id',
        'user_id',
        'username'
    ];
    public function user(){
      return $this->belongsTo(User::class);
    }
    public function click(){
      return $this->hasOne(Click::class);
    }
    public function refferal(){
      return $this->hasMany(Refferal::class);
    }
    public function affiliateStat(){
      return $this->hasMany(AffiliateStat::class);
    }
}
