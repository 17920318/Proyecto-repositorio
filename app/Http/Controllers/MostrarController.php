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
    return view ('usuarios.show',compact($users)); 
        //$users = User::find($id);   
        //return view ('usuarios.show');
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
       
       
        //$users = User::find($id_usuario);
        /*$user = Auth::user($id_usuario);
            $user->name = $request->input("name","");
            $user->email = $request->input("email","");
            $user->save();*/

        /*$campos=['name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($data['password']),
                ];
        User::whereId($id_usuario)->update($campos);
        return redirect('usuarios.show')->with('success', 'Actualizado correctamente...');
            }*/

        /* DB::transaction(function() use ($request){
            $user = Auth::user();
            $user->name = $request->input("name","");
            $user->email = $request->input("email","");
            $user->save();
        });*/

        // $user->update([
        //     "name" => $request->name,
        //     "email" => $request->email,
        // ]);
       /* return ["message" => "Updated the user info sucessfully!"];
       */
       
       
    
