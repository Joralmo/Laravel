<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = "grupos";
    protected $fillable = ['numero', 'materia_id'];
    public function materia(){
    	return $this->belongsTo('App\Materia');
    }
}
