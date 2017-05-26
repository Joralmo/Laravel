<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
    public function index(){
    	$users = User::orderBy('id', 'ASC')->paginate(5);
    	return view('admin.users.index')->with('users', $users);
    }
    public function create(){
    	return view('admin.users.create');
    }
    public function store(Request $request){
    	$user = new User($request->all());
    	$user->password= bcrypt($request->password);
    	$user->save();
        Flash::success('Usuario '. $user->name.' registrado');
    	return redirect()->route('users.index');
    }
    public function show($id){

    }
    public function edit($id){
        $user=User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }
    public function update(Request $request, $id){
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->type=$request->type;
        $user->save();
        Flash::warning('El usuario '.$user->name.' ha sido actualizado');
        return redirect()->route('users.index');
    }
    public function destroy($id){
        $user=User::find($id);
        $user->delete();
        Flash::error('El usuario '.$user->name.' se ha eliminado');
        return redirect()->route('users.index');
    }
}
