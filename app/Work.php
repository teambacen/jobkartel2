<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'works';
    protected $fillable = [
      'user_id',
      'position',
      'company',
      'start_year',
      'end_year',
      'city',
      'state',
      'work_description',
      'industry',
      'end_month',
      'start_month'
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }
}
