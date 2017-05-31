<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $table = 'awards';
    protected $fillable = [
      'user_id',
      'name',
      'month',
      'year',
      'description'
    ];
    public function user(){
      return $this->belongsTo(User::class);
    }
}
