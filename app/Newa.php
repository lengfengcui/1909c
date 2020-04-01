<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newa extends Model
{
     //指定表名
    protected $table ='new';
    protected $primaryKey ='n_id';
    public $timestamps = false;
    
    //黑名单
    protected $guarded=[];
}
