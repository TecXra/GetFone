<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [


           'number',
           'name'
    ];


public function User()
    {
        return $this->belongsTo('App\User');
    }






}
