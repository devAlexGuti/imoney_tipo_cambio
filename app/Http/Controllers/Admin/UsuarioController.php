<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function _construct()
    {
    	$this->middleware('auth');
    }

    public function index(Request $request)
    {   
		$usuarios = Usuario::all();
          
    	return view('admin.usuarios.index' , ['usuarios' => $usuarios]);
    }

    public function registro(Request $request)
    {
    	$newUsuario = new Usuario();
    	$newUsuario->nombre = $request->nombre;
    	$newUsuario->save();

    	return redirect()->back();
    	//dd($request->all());
    }

    public function actualizar(Request $request, $usuarioId)
    {
    	$usuario = Usuario::find($usuarioId);
    	$usuario->nombre = $request->nombre;
    	$usuario->save();

    	return redirect()->back();
    	//dd($request->all());
    }

    public function eliminar(Request $request, $usuarioId)
    {
    	$usuario = Usuario::find($usuarioId);
    	$usuario->delete();

    	return redirect()->back();
    	//dd($request->all());
    }
}
