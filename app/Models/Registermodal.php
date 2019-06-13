<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registermodal extends Model
{
	protected $table = 'register';

    protected $fillable = ['firstname','lastname','password','username','gender','email','dob','conf_password','mobile'];

    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';

    

}
