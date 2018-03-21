<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
    protected $fillable=['name','id'];
    protected $hidden =[
        'create_at','update_at'
    ];
    public function sinhvien(){
        return $this->hasMany('App\Sinhvien');

    }

}
