<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = ['*'];

    protected $fillable = [
    	'name',
    	'email',
    	'site',
    	'text'
    ];

}
