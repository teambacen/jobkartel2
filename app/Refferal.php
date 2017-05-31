<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refferal extends Model
{
    protected $table = 'refferals';
    protected $fillable = [
        'user_id',
        'affiliate_id',
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }
    public function affiliate(){
      return $this->belongsTo(Affiliate::class);
    }
}
