<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sel extends Model
{
    public $primaryKey='client_id';
    protected $table='client';
    public $timestamps=false;
 
    //白名单  表设计中不允许为空的
    // protected $fillable = ['brand_name','brand_url'];
    //黑名单   表设计中允许为空的
    protected $guarded = [];
}
