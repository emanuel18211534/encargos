<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class ApiUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $usuario = new Usuario;

        $usuario->email=$request->get('email');
        $usuario->password=$request->get('password2');
        $usuario->nombre=$request->get('nombre');
        $usuario->id_rol=$request->get('id_rol');

        // //capturas el archivo enviado en la variable foto
        // $foto=$request->file('foto');

        // $nombre_foto=$request->get('nick');

        //  $foto->move(public_path().'/img/usuarios/',$nombre_foto.'.jpg');
         
        //  $usuario->foto=$nombre_foto.'.jpg';


        $usuario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return $usuario=Usuario::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
