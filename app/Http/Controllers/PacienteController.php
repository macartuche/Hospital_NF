<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Especialidades;

class PacienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('administrador',['only'=>['index']]);
    }

    public function index()
    {
        $paciente = Paciente::all();
        return view('administrador.paciente', compact('paciente'));
    }


    public function adminpaciente(){
        $pacientes = Paciente::all();
        $especialidades = Especialidades::all();
        return view('paciente.paciente', compact('pacientes', 'especialidades'));
    }

///////////////////// Crear Paciente /////////////////////////////

        public function crearpaciente(Request $request)
        {
            // para verificar que los datos del formulario lleguen 
            //return $request->all();
    
            $nuevoPaciente = new Paciente;
    
            $nuevoPaciente->name = $request->name;
            $nuevoPaciente->apellido = $request->apellido;
            $nuevoPaciente->cedula = $request->cedula;
            $nuevoPaciente->email = $request->email;
            $nuevoPaciente->telefono = $request->telefono;
            $nuevoPaciente->direccion = $request->direccion;
            $nuevoPaciente->fechaNacimiento = $request->fechaNacimiento;
            $nuevoPaciente->ciudad_id = $request->ciudad_id;
            $nuevoPaciente->genero_id = $request->genero_id;
        
            $nuevoPaciente->save();
        
            return back();
    
        }
///////////////////// Eliminar Paciente /////////////////////////////
        public function eliminarpaciente($id)
        {
            Paciente::destroy($id);
            return back();
        }

///////////////////// Editar Paciente /////////////////////////////

        public function editarpaciente(Request $request, $id)
        {
            $editMedico = Paciente::findOrFail($id);
    
            $editMedico->email = $request->email;
            $editMedico->telefono = $request->telefono;
            $editMedico->direccion = $request->direccion;
            $editMedico->ciudad_id = $request->ciudad_id;
    
            $editMedico->save();
    
            return back()->with('success');
        }


}
