<?php


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PagesController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Auth::routes();


//========================Rutas que no necesitan ninguna autentificación
Route::get('inicio', [App\Http\Controllers\PagesController::class, 'inicio'])->name('inicio');
Route::get('servicios', [App\Http\Controllers\PagesController::class, 'servicios'])->name('servicios');
Route::get('contacto', [App\Http\Controllers\PagesController::class, 'contacto'])->name('contacto');
Route::get('prueba', [App\Http\Controllers\PagesController::class, 'prueba'])->name('prueba');

//post de login y registro
Route::get('acceder', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('acceder');
Route::post('acceder', [App\Http\Controllers\Auth\LoginController::class, 'redirectTo'])->name('login.custom');
Route::get('registro', [App\Http\Controllers\Auth\LoginController::class, 'registro'])->name('registro-usuario');
Route::post('registro', [App\Http\Controllers\Auth\LoginController::class, 'create'])->name('registro-create');

///falta el post de registro

Route::group(['middleware' => 'auth'], function(){
    //xyz....
    //======================== Administrador
        //el resource se usa para rutas por defecto
        //new update store y asi.... sino se usan no se de be usar un Route::resource
        //Route::resource('admins', AdministradorController::class)->names('adminprincipal');
    Route::get('admins', [AdministradorController::class, 'index'] )->name('admin.home');
    Route::get('adminpaciente', [App\Http\Controllers\PacienteController::class, 'adminpaciente'])->name('admin.paciente');
    Route::get('admincitas', [App\Http\Controllers\AdministradorController::class, 'admincitas'])->name('admin.citas');
    Route::get('adminmedicos', [App\Http\Controllers\AdministradorController::class, 'adminmedicos'])->name('admin.medicos');
    Route::resource('adminespecialidades', 'App\Http\Controllers\EspecialidadController'); //admin.especialidades {index, create, edit, destroy
    //para ajax de obtener medicos por especialidad
    Route::get('medicosPorEspecialidad', [App\Http\Controllers\PacienteController::class, 'medicosPorEspecialidad'])->name('ajax.medicosEspecialidad');

    //=========================CLIENTES
    Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.home');
    Route::get('/citas', [App\Http\Controllers\ClienteController::class, 'citas'])->name('cliente.citas');
    Route::get('/historial', [App\Http\Controllers\ClienteController::class, 'historial'])->name('cliente.historial');
    Route::get('/pedidosmed', [App\Http\Controllers\ClienteController::class, 'pedidosmed'])->name('cliente.pedidosmed');
    Route::get('/regpaciente', [App\Http\Controllers\ClienteController::class, 'regpaciente'])->name('cliente.regpaciente');

});


        /////////////////// RUTAS Especialidades  //////////////////////////////

        Route::post('crearesp', [App\Http\Controllers\EspecialidadController::class, 'crearesp'])->name('crearesp');
        Route::put('editaresp/{id}', [App\Http\Controllers\EspecialidadController::class, 'editaresp'])->name('editaresp');
        Route::delete('eliminaresp/{id}', [App\Http\Controllers\EspecialidadController::class, 'eliminaresp'])->name('eliminaresp');
        ////////////////// RUTAS Gestion Médicos  //////////////////////////////
        Route::post('crearmed', [App\Http\Controllers\AdministradorController::class, 'crearmed'])->name('crearmed');
        Route::put('editarmed/{id}', [App\Http\Controllers\AdministradorController::class, 'editarmed'])->name('editarmed');
        Route::delete('eliminarmed/{id}', [App\Http\Controllers\AdministradorController::class, 'eliminarmed'])->name('eliminarmed');
        Route::put('ciudad', [App\Http\Controllers\AdministradorController::class, 'ciudad'])->name('ciudad');
        Route::post('asignarespe/{id}', [App\Http\Controllers\AdministradorController::class, 'asignarespe'])->name('asignarespe');
        Route::post('removerespe/{id}', [App\Http\Controllers\AdministradorController::class, 'removerespe'])->name('removerespe');

        ////////////////// RUTAS Gestion Citas  //////////////////////////////
        Route::post('crearcita{id}', [App\Http\Controllers\AdministradorController::class, 'crearcita'])->name('crearcita');
        Route::put('editarcita/{id}', [App\Http\Controllers\AdministradorController::class, 'editarcita'])->name('editarcita');
        Route::delete('eliminarcita/{id}', [App\Http\Controllers\AdministradorController::class, 'eliminarcita'])->name('eliminarcita');
        Route::get('buscapaciente', [App\Http\Controllers\AdministradorController::class, 'buscarpaciente'])->name('buscarpaciente');




/////////////////// RUTAS Gestion Paciente  //////////////////////////////

Route::post('crearpaciente', [App\Http\Controllers\PacienteController::class, 'crearpaciente'])->name('crearpaciente');

Route::put('editarpaciente/{id}', [App\Http\Controllers\PacienteController::class, 'editarpaciente'])->name('editarpaciente');

Route::delete('eliminarpaciente/{id}', [App\Http\Controllers\PacienteController::class, 'eliminarpaciente'])->name('eliminarpaciente');

Route::put('ciudad', [App\Http\Controllers\PacienteController::class, 'ciudad'])->name('ciudad');

Route::get('/infopaciente', [App\Http\Controllers\PacienteController::class, 'crearpaciente'])->name('infopaciente');

//Route::get('/buscarpaciente', [App\Http\Controllers\PacienteController::class, 'crearpaciente'])->name('infopaciente');




//////////////// Medico //////////////
Route::resource('medicos', MedicoController::class)->names('medicoprincipal');
Route::get('/control', [App\Http\Controllers\MedicoController::class, 'control'])->name('control');


//////////////// Cliente //////////////

Route::group(['prefix'=>'clientes','middleware' => 'auth'], function(){
    //Route::resource('/clientes', ClienteController::class)->names('clienteprincipal');
});



