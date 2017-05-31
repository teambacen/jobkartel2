<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliateInfo extends Model
{
    protected $table = 'affiliate_info';
    protected $fillable = [
      'first_name',
      'last_name',
      'phone',
      'address_1',
      'address_2',
      'city',
      'postcode',
      'country',
      'state',
      'bankname',
      'account_name',
      'account_number',
    ];
    public function user(){
      return $this->belongsTo(User::class);
    }
}
