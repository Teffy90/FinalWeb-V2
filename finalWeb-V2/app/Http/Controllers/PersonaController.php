<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\TipoPersona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//Muestra la tabla con toda la info de la BD
    {
        return view('Admin.tabla_gestion_personas') -> with('personas', Persona::all());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//vista para ver el formulario
    {
        $tipo_personas = TipoPersona::all();
        return view('Admin.crear_persona', compact('tipo_personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//guarda en la BD
    {
        $persona = new Persona();
        $persona ->nombre = $request-> nombre;
        $persona ->apellidos = $request-> apellidos;
        $persona ->telefono = $request-> telefono;
        $persona ->id_tipo_persona = $request-> id_tipo_persona;
        $persona->save();

        return redirect()->route('admin.index');
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
    public function edit($id)//edita al usuario
    {
        $persona = Persona::find($id);
        $tipo_personas = TipoPersona::all();
        return view ('Admin.editar_persona', compact('tipo_personas'))->with ('personas',$persona);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//consulta para modificar los elementos de la BD
    {
        $persona = Persona::find($id);
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request-> apellidos;
        $persona->telefono = $request-> telefono;
        $persona->id_tipo_persona = $request-> id_tipo_persona;
        $persona->save();
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//elimina los elementos de la BD
    {
        $persona = Persona::find($id);
        $persona -> delete();
        return redirect()->route('admin.index');
    }
}
