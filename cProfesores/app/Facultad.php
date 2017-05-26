<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $table = "facultades";
    protected $fillable = ['nombre', 'universidad_id'];
    public function carreras(){
    	return $this->hasMany('App\Carrera');
    }
    public function universidad(){
    	return $this->belongsTo('App\Universidad');
    }
}
