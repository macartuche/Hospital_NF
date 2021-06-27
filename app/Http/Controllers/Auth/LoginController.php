<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    public function index()
    {
        return view('login');
    }  

    public function registro(){
        return view('registro');
    }

    public function redirectTo(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $rol = Auth::user()->rol_id;
            $view = '';
            switch ($rol) {
                case 1:
                    $view = 'admins';
                    break;
                case 2:
                    $view = 'clientes';
                    break;
                default:
                    $view = 'medicos';
                    break;
            }
           
            return redirect()->intended($view)
                        ->withSuccess('Signed in');
        }
  
        return redirect("acceder")->withSuccess('Credenciales incorrectas');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }


    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect('inicio');
    }
}
