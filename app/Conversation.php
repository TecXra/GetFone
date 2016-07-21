<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
	protected $fillable = [


          'phone_number',
          'message',
           'check'
    ];
    
    public function User()
    {
        return $this->belongsTo('App\User');
    }

}
