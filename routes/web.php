<?php


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdministradorController;
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

//Route::group(['prefix'=>'administrador','middleware' => 'auth'], function(){

        //////////////// Administrador //////////////

        Route::resource('admins', AdministradorController::class)->names('adminprincipal');
        //Route::get('/', [App\Http\Controllers\AdministradorController::class, 'index'])->name('adminprincipal');

        Route::get('adminpaciente', [App\Http\Controllers\PacienteController::class, 'adminpaciente'])->name('adminpaciente');

        Route::get('admincitas', [App\Http\Controllers\AdministradorController::class, 'admincitas'])->name('admincitas');

        Route::get('adminmedicos', [App\Http\Controllers\AdministradorController::class, 'adminmedicos'])->name('adminmedicos');

        Route::resource('adminespecialidades', 'App\Http\Controllers\EspecialidadController');

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

    Route::get('/', [App\Http\Controllers\ClienteController::class, 'index'])->name('clienteprincipal');

    Route::get('/citas', [App\Http\Controllers\ClienteController::class, 'citas'])->name('citas');
    
    Route::get('/regpaciente', [App\Http\Controllers\ClienteController::class, 'regpaciente'])->name('regpaciente');
    
    Route::get('/historial', [App\Http\Controllers\ClienteController::class, 'historial'])->name('historial');
    
    Route::get('/pedidosmed', [App\Http\Controllers\ClienteController::class, 'pedidosmed'])->name('pedidosmed');

});



/////////////////// Rutas iniciales sin Middelware //////////////////////////////////////

// Rutas que no necesitan ninguna autentificación

Route::get('inicio', [App\Http\Controllers\PagesController::class, 'inicio'])->name('inicio');

Route::get('servicios', [App\Http\Controllers\PagesController::class, 'servicios'])->name('servicios');

Route::get('contacto', [App\Http\Controllers\PagesController::class, 'contacto'])->name('contacto');

Route::get('acceder', [App\Http\Controllers\PagesController::class, 'acceder'])->name('acceder');

Route::get('registro', [App\Http\Controllers\PagesController::class, 'registro'])->name('registro');

Route::get('prueba', [App\Http\Controllers\PagesController::class, 'prueba'])->name('prueba');

