<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    protected $fillable = ['name', 'age', 'lop_id'];
    public function lop(){
        return $this -> belongsTo('App\Lop', 'lop_id');
    }
}
