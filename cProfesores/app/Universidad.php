<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    protected $table = "universidades";
    protected $fillable = ['pais', 'ciudad', 'direccion', 'nombre'];
    public function facultades(){
    	return $this->hasMany('App\Facultad');
    }
}
