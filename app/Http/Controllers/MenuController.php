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
        
        $id_usuario = $_SESSION['user'];

        $sql="SELECT * FROM usuario u INNER JOIN usuariorol ur
        INNER JOIN rol r ON u.id =ur.usuario_id AND ur.rol_id=r.id
        INNER JOIN permiso p INNER JOIN rolpermiso rp ON p.id = rp.permiso_id
        AND rp.rol_id = r.id WHERE u.id=$id_usuario";

        $query=DB::raw($sql);exit;
        //$repositorios= DB::select(DB::raw($sql),$parameters);
    
}










/*    $sql= "SELECT u.id, ur.usuario_id, r.id as rolXid, ur.rol_id, p.id as permisoXid, rp.permiso_id, rp.rol_id as rpXrolXid, r.id as rXid FROM usuario u INNER JOIN usuariorol ur
        INNER JOIN rol r ON u.id =ur.usuario_id AND ur.rol_id=r.id
        INNER JOIN permiso p INNER JOIN rolpermiso rp ON p.id = rp.permiso_id 
        AND rp.rol_id = r.id 
        WHERE upper(trim(u.nombre)) like upper (trim(:usuario)) and ur.usuario_id
        upper(trim(p.descripcion)) like upper(trim(:permiso)) and rp.permiso_id
        AND upper(trim(r.descripcion)) like upper(trim(:rol)) and ur.rol_id";*/
       
        
       
        /*AND u.id=ur.usuario_id AND ur.rol_id=r
        p.id = rp.permiso_id AND rp.rol_id = r.id;*/
    
     