<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';
    protected $fillable = [
      'user_id',
      'institute',
      'qualification',
      'graduate_year',
      'grade',
      'graduate_month',
      'start_year',
      'start_month',
      'city',
      'state',
      'description',
    ];
    public function user(){
      return $this->belongsTo(User::class);
    }
}
