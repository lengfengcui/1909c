<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
     protected $table = 'admin';
    protected $primaryKey = 'admin_id';
    protected $guarded=[];
    public $timestamps = false;
}
