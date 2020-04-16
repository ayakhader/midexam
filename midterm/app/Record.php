<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class record extends Model
{   
    protected $fillable=['first_name','last_name','email','phone','record_date'];

}
