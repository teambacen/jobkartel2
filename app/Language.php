<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';
    protected $fillable = [
      'lang',
      'user_id',
      'level'
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }
}
