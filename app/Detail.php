<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';

    protected $fillable = [
      'user_id',
      'first',
      'last',
      'position',
      'description',
      'default',
      'dob',
      'nationality',
      'email',
      'phone',
      'address',
      'city',
      'postal',
      'country',
      'color'
    ];
    public function user(){
      return $this->belongsTo(User::class);
    }
}
