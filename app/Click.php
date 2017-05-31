<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    protected $table = 'clicks';
    protected $fillable = [
      'affiliate_id',
      'click'
    ];

    public function affiliate(){
      return $this->belongsTo(Affiliate::class);
    }
}
