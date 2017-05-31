<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    protected $fillable = [
      'user_id',
      'skil',
      'level',
      'category'
    ];
    public function user(){
      return $this->belongsTo(User::class);
    }
}
