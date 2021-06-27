<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Cita;
use App\Models\Especialidades;
use App\Models\EspecialidadMedico;
use App\Models\Paciente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class AdministradorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin',['only'=>['index']]);
    }

    public function index()
    {
        return view('administrador.gesadmin');
    }

    public function crearcita(Request $request, $id)
    {
        // para verificar que los datos del formulario lleguen 
        //return $request->all();

        $nuevaCita = new Cita;

        $nuevaCita->especialidad_id = $request->especialidad_id;
        $nuevaCita->medico_id = $request->medico_id;
        $nuevaCita->paciente_id = $id;
        $nuevaCita->fecha_cita = $request->fecha_cita;


        $nuevaCita->save();
        return back();

    }

    public function admincitas()
    {
        $citas = Cita::all();

        return view('administrador.admincitas', compact('citas'));
    }

    public function eliminarcita($id)
    {
        User::destroy($id);
        return back();
    }

    public function adminmedicos()
    {

        $medicos = User::all();
        $especialidadMedico = EspecialidadMedico::all();
        $especialidades = Especialidades::all();

        //$espe = User::has('especialidades')->with(['especialidades:id'])->get();
        //$especialidad = Especialidades::has('medicos')->with(['medicos'])->get();

        //var_dump($especialidad->get()->toArray());

        // $espe = DB::table('users')    No se uso este tipo de conuslta puesto que me devolvía un string y no un array y se dificultó sacar lo parametros de manera individual
        //             ->Join('especialidad_medicos','especialidad_medicos.medico_id','=','users.id')
        //             ->Join('especialidades','especialidades.id','=','especialidad_medicos.especialidad_id')
        //             ->select('especialidades.especialidad AS ""')
        //             ->get();

        // $espe = json_encode($$espe, JSON_UNESCAPED_UNICODE);/// se usa para forzar la respuesta en utf8
        // $espe = preg_replace('([^A-Za-z0-9-í])', '',$espe);

        return view('administrador.adminmedicos', compact('medicos', 'especialidadMedico', 'especialidades'));

        //return $especialidadMedico;


    }

    public function crearmed(Request $request)
    {
        // para verificar que los datos del formulario lleguen 
        //return $request->all();

        $nuevoMedico = new User;

        $nuevoMedico->name = $request->name;
        $nuevoMedico->apellido = $request->apellido;
        $nuevoMedico->cedula = $request->cedula;
        $nuevoMedico->email = $request->email;
        $nuevoMedico->telefono = $request->telefono;
        $nuevoMedico->direccion = $request->direccion;
        $nuevoMedico->fechaNacimiento = $request->fechaNacimiento;
        $nuevoMedico->password = Hash::make($request->password);
        $nuevoMedico->ciudad_id = $request->ciudad_id;
        $nuevoMedico->genero_id = $request->genero_id;
        $nuevoMedico->rol_id = 3;

        $nuevoMedico->save();

        return back();
    }

    public function editarmed(Request $request, $id)
    {
        $editMedico = User::findOrFail($id);

        $editMedico->email = $request->email;
        $editMedico->telefono = $request->telefono;
        $editMedico->direccion = $request->direccion;
        $editMedico->password = Hash::make($request->password);
        $editMedico->ciudad_id = $request->ciudad_id;

        $editMedico->save();

        return back()->with('success');
    }

    public function eliminarmed($id)
    {
        User::destroy($id);
        return back();
    }

    public function asignarespe(Request $request, $id)
    {
        $medicoEsp = User::find($id);

        $medicoEsp -> especialidades()->syncWithoutDetaching($request->especialidad_id);

        return back();

    }

    public function removerespe(Request $request, $id)
    {
        $medicoEsp = User::find($id);

        $medicoEsp -> especialidades()->detach($request->especialidad_id);

        return back();

        //return $espeAsignada;
    }

    /////////////////////////// Metodos que se pueden usar luego //////////////////////////////////////

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function distroy($id)
    {
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
