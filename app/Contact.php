<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable  = [
      'user_id',
      'phone',
      'email',
      'web',
      'address'
    ];
    public function user(){
      return $this->belongsTo(User::class);
    }
}
