<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = "comentarios";
    protected $fillable = ['contenido', 'profesor_id'];
    public function profesor(){
    	return $this->belongsTo('App\Profesor');
    }
}
