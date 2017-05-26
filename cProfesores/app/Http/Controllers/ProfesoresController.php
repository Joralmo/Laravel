<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;
use App\Materia;
use App\Facultad;
use App\Carrera;

class ProfesoresController extends Controller
{
	// public function index(){
	// 	$profesores = Profesor::all();
	// 	dd($profesores);
 //    	//$users = User::orderBy('id', 'ASC')->paginate(5);
 //    	//return view('admin.profesores.index')->with('profesores', $profesores);
	// }
	// public function create(){
	// 	echo "string";
	// }
	// public function store(Request $request){
	// 	$profesor = new Profesor($request->all());
	// 	Flash::success('Profesor '. $profesor->nombre.' registrado');
 //    	//return redirect()->route('users.index');*/
	// }
	// public function show($id){
	// 	$profesor = Profesor::where('id', $id)->get();
	// 	dd($profesor);
	// }
	// public function edit($id){
	// 	$profesor = Profesor::find($id);
 //        //return view('admin.profesor.edit')->with('profesor', $profesor);
	// }
	// public function update(Request $request, $id){
	// 	$profesor = Profesor::find($id);
	// 	$profesor->nombre=$request->nombre;
	// 	$profesor->correo=$request->correo;
	// 	$profesor->celular=$request->celular;
	// 	$profesor->informacion=$request->informacion;
	// 	$profesor->save();
	// 	Flash::warning('El profesor '.$profesor->name.' ha sido actualizado');
	// 	/*return redirect()->route('users.index');*/
	// }
	// public function destroy($id){
	// 	$profesor=Profesor::find($id);
	// 	$profesor->delete();
	// 	Flash::error('El profesor '.$profesor->name.' se ha eliminado');
 //        /*$user=User::find($id);
 //        $user->delete();
 //        return redirect()->route('users.index');*/
 //    }
 //    public function materia($string){
 //    	$profesores = Materia::where('nombre', $string)->get();
 //    	$profesores[0]->profesor();
 //    	dd($profesores[0]->profesor);
 //    }
 //    public function facultad($string){
 //    	$profesores = Facultad::where('nombre', $string)->get();
 //    	$profesores;
 //    }
}
