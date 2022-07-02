<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Rol;
use Illuminate\Http\Request;
use App\Models\Usuariorol;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class MostrarController extends Controller
{
    public function index(){    
    $users = User::all(); 
    $id_usuario = session("usuario_id");
    //$id_usuario = $_SESSION['user'];
     
    $sql2="SELECT r.id,r.descripcion FROM rol r INNER JOIN usuariorol ur
    ON r.id=ur.rol_id 
    WHERE ur.usuario_id =:usuario";
    
    $query=DB::raw($sql2);
    //dd($query);
    $consulta= DB::select(DB::raw($sql2),['usuario'=>$id_usuario]);
        
        return view ('usuarios.show',
    compact($users))->with('esAdministrador',$this->isAdmin2($consulta));  
        //$users = User::find($id);   
        //return view ('usuarios.show');
    }
    private function isAdmin2($filas){
        foreach ($filas as $fila){
            if (in_array( $fila->id, [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25] )){
                return true;
            }
            
        }
        return false;
    }
    /*public function show($id_usuario){
        $id_usuario = session("usuario_id");
        //$user = User::find($id_usuario);
        //dd($user);
        return view ('usuarios.show', compact('user'));

    }*/
    public function show (){
        //
    }

   public function store(Request $request){
    //$users = User::find($id);   
    //return view ('usuarios.show',compact($users));
       
    // $usuarios = User::all();
    //return view('usuarios.show', compact('usuarios'));
     }
    
   public function edit($id){
        $users = User::find($id);
        return view ('usuarios.edit', compact('users'));
    }

    public function update(Request $request, $id_usuario){
        $campos=[
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request['password']),
            
        ];
        
        User::whereId($id_usuario = session("usuario_id"))->update($campos);
        return redirect('mostrar')->with('success', 'Actualizado correctamente...');
    }
        





    } 
       
       
        
       
       
    
