<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidades;
use App;

class EspecialidadController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('administrador',['only'=>['index']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidades = Especialidades::all();
        return view('administrador.adminespecialidades', compact('especialidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crearesp(Request $request)
    {
        // para verificar que los datos del formulario lleguen 
        //return $request->all();
        $nuevaEspecialidad = new Especialidades;
        //$nuevaEspecialidad->codigo_esp = $request->codigo_esp;
        $nuevaEspecialidad->especialidad = $request->especialidad;
        $nuevaEspecialidad->descripcion = $request->descripcion;

        $nuevaEspecialidad->save();
        return back()->with('success', 'Especialidad Creada');;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editaresp(Request $request, $id)
    {
        $nuevaEspecialidad = Especialidades::findOrFail($id);

        //$nuevaEspecialidad->codigo_esp  = $request->codigo_esp;
        $nuevaEspecialidad->especialidad = $request->especialidad;
        $nuevaEspecialidad->descripcion = $request->descripcion;

        $nuevaEspecialidad->save();

        return back()->with('success', 'Especialidad Actualizada');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminaresp($id)
    {
        Especialidades::destroy($id);
        return back()->with('success', 'Especialidad Eliminada');;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
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
}
