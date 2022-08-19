<?php

namespace App\Http\Controllers;


use App\Models\Rol;
use App\Models\Usuario;
use App\Models\Usuariorol;
use App\Models\Permiso;
use Illuminate\Http\Request;
use App\Models\Rolpermiso;
use Illuminate\Support\Facades\DB;

class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuariorol = Usuariorol::all();
        $rolpermisos = Rolpermiso::all();
        return view ('', compact('rolpermisos','usuariorol'));
     //usuariorol->usuario y roles , rolpermiso->permisos y roles 
     
    }
    public function store(Request $request){
        
      /* Consultar roles y permisos
        $id_usuario = session("id_usuario");
        $id_usuario = $_SESSION['user'];
        
       $sql="SELECT * FROM usuario u INNER JOIN usuariorol ur
       INNER JOIN rol r ON u.id =ur.usuario_id AND ur.rol_id=r.id
       INNER JOIN permiso p INNER JOIN rolpermiso rp ON p.id = rp.permiso_id
       AND rp.rol_id = r.id WHERE u.id=:usuario";
       
       $query=DB::raw($sql);
       $consulta= DB::select(DB::raw($sql),['usuario'=>$id_usuario]);
      // dd($consulta);
       
       return view ('repositorio.show', compact('repositorios'))->with('esAdministrador',true);
        /*
        //$repositorios= DB::select(DB::raw($sql),$parameters);
    
}
    }*/
  }
}
    


