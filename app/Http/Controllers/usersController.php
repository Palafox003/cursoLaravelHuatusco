<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios=User::all();

        return view('users.usuarios',['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.nuevoUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
        'nombre' => 'required|max:255',
        'paterno' => 'required|max:255',
        'materno' => 'required|max:255',
        'email' => 'required|max:255|email',
        'password'=>'required',
        'telefono' => 'required',
        ]);



        User::create([
            'nombre'=>$request['nombre'],
            'paterno'=>$request['paterno'],
            'materno'=>$request['materno'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['password']),
            'telefono'=>$request['telefono']
        ]);

        return view('users.nuevoUsuario');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario=User::find($id);

        return view('users.editarUsuario',['usuario'=>$usuario]);
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
        $actual=User::find($id);

        $actual->nombre=$request->nombre;

        $actual->save();

        $usuarios=User::all();

        return view('users.usuarios',['usuarios'=>$usuarios]);
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

        User::destroy($id);
        $usuarios=User::all();

        return view('users.usuarios',['usuarios'=>$usuarios]);
    }
}
