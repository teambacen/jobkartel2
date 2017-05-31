<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscriptions';
    protected $fillable = [
      'user_id',
      'start',
      'expire'
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }
}
