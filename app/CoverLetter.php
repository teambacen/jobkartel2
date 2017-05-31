<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoverLetter extends Model
{
    protected $table = 'cover_letters';
    protected $fillable = [
      'user_id',
      'from_before',
      'from_first',
      'from_last',
      'from_phone',
      'from_email',
      'from_street',
      'from_city',
      'from_postal',
      'from_state',
      'to_before',
      'to_first',
      'to_last',
      'to_company',
      'to_department',
      'to_street',
      'to_city',
      'to_postal',
      'to_state',
      'content_subject',
      'content_date',
      'content_body'
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }
}
