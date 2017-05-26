<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = "profesores";
    protected $fillable = ['nombre', 'correo', 'imagen', 'celular', 'informacion'];
    public function materias(){
    	return $this->belongsToMany('App\Materia');
    }
    public function comentarios(){
    	return $this->hasMany('App\Comentario');
    }
}
