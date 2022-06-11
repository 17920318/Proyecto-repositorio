<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\where;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
     $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
           
        ]);

        $credentials = [

            'email' => $request['email'],
            'password' => $request ['password'],
            
        ];

        $cifrado  = Hash::make($request['password']);
        $email = $request['email'];

        $sql ="SELECT * FROM users 
          u.email=:email ";

        $query=DB::raw($sql);
        //$usuario= DB::select(DB::raw($sql),["email"=>$email]);
        $usuario = DB::table('users')
        ->select('id', 'email','password')
        ->where('email','=',$email)
        ->first();

        if ($usuario && Hash::check($request['password'],$usuario->password)){
            $_SESSION['user']=$usuario->id;
           //dd($_SESSION['user']);
           session(['id_usuario' => $usuario->id]);
        }
        
// ($repositorios); exit;
// dd($repositorios); exit; 

//return view ('busqueda', compact('repositorios'));

        //return ();
        if (Auth::attempt($credentials )) {
            // Authentication was successful...
            $request->session()->regenerate();
           // dd($credentials);
           return redirect()->intended('busqueda');
        }
            //return back()->withErrors([$this->username()=>'Datos incorrectos']);
            return redirect("login")->withErrors(['msgError'=>'Credenciales no validas']);
    
        
    }

   public function logout(Request $request){
    
    session::flush();
    Auth::logout();

    return redirect('login');
   }
  
}
