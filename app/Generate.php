<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generate extends Model
{
    protected $table = "generates";
    protected $fillable = [
      'generate',
      'tenplate'
    ];
}
