<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Direccion;

class direccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    public function showDirecciones($id)
    {
        $usuario=User::find($id);
        $direcciones=User::find($id)->direcciones;

        return view('direcciones.direcciones',['usuario'=>$usuario,'direcciones'=>$direcciones]);
    }

    public function direccionesForm($id)
    {
        $usuario=User::find($id);

        return view('direcciones.nuevaDireccion',['usuario'=>$usuario]);
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
        Direccion::create([
            'colonia'=>$request['colonia'],
            'calle'=>$request['calle'],
            'estado'=>$request['estado'],
            'ciudad'=>$request['ciudad'],
            'numero'=>$request['numero'],
            'cp'=>$request['cp'],
            'user_id'=>$request['id']
        ]);

        return $request;
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
