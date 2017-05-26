<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = "carreras";
    protected $fillable = ['nombre', 'facultad_id'];
    public function materias(){
    	return $this->hasMany('App\Materia');
    }
    public function facultad(){
    	return $this->belongsTo('App\Facultad');
    }
}
