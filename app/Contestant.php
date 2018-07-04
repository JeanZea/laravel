<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    protected $fillable = [
    	'name', 'email', 'phone', 'address',
    ];

    /*protected $hidden = [
        
    ];*/

}
