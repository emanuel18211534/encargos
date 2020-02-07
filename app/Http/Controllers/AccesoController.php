<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Session;
use Redirect;
use Cache;
use Cookie;

class AccesoController extends Controller
{
    public function validar(Request $request){
    	// return 'hola';

    	$email=$request->email;
    	$password=$request->password;


    	$resp = Usuario::where('email','=',$email)
    	->where('password','=',$password)
    	->get();

    	// return $resp;

    	$user=$resp[0]->usuario;

    	if (count($resp)> 0){
            // return $resp;
    		Session::put('usuario',$user);
    		Session::put('rol',$resp[0]->rol->rol);
            // Session::put('foto',$resp[0]->foto);

    		if ($resp[0]->rol->rol=="administradores") {
    			return	Redirect::to('admin');
    		}elseif ($resp[0]->rol->rol=="Supervisor") {
    			return 'Bienvenido Supervisor: '.$user;
    		}elseif ($resp[0]->rol->rol=="Vendedor") {
    			return 'Bienvenido Vendedor: '.$user;
    		}
    	}//Viene vacio
    	else{
	    	return "usuario o contraseña incorrecta";
	    }
	   




    }

    public function salir(){
        Session::flush();
        Session::reflash();
        Cache::flush();
        Cookie::forget('laravel_session');
        unset($_COOKIE);
        unset($_SESSION);
        return Redirect::to('/');
    }
}
