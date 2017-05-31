<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "payments";
    protected $fillable = [
      'id',
      'user_id',
      'bill_id',
      'status',
      'amount'
    ];
    public function user(){
      return $this->belongsTo(User::class);
    }
    public function affiliateStat(){
      return $this->hasOne(AffiliateStat::class);
    }
}
