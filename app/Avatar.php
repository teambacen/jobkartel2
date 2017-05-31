<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $table  = 'avatars';
    protected $fillable = [
      'user_id',
      'gambar'
    ];
    public function user(){
      return $this->belongsTo(User::class);
    }
}
