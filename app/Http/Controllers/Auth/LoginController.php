<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function username()
    {
        return 'correo';
    }

    public function login(Request $request){
        $credenciales = $request->validate([
            'correo' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['correo' => $request->correo, 'password' => $request->password])) {
            $request->session()->regenerate();

            if (Auth::user()->tipo == 'Admin'){
                return redirect()->route('Admin.index');
            }
            
            if (Auth::user()->tipo == 'conductor'){
                return redirect()->route('conductor.index');
            }

            if (Auth::user()->tipo == 'pasajero'){
                return redirect()->route('pasajero.index');
            }

            return redirect()->route('login');

        }
    }
}
