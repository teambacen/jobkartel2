<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliateStat extends Model
{
    protected $table = 'affiliates_stats';
    protected $fillable = [
      'status',
      'paid',
      'affiliate_id',
      'payment_id'
    ];

    public function affiliate(){
      return $this->belongsTo(Affiliate::class);
    }
    public function payment(){
      return $this->belongsTo(Payment::class);
    }
}
