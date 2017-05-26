<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = "materias";
    protected $fillable = ['nombre', 'carrera_id', 'profesor_id'];
    public function grupos(){
    	return $this->hasMany('App\Grupo');
    }
    public function carrera(){
    	return $this->belongsTo('App\Carrera');
    }
    public function profesor(){
    	return $this->belongsTo('App\Profesor');
    }
}