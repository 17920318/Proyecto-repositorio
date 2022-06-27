<?php
namespace App\Http\Controllers;
use app\Http\Controllers\ZipController;
use App\Models\Repositorio;
use Illuminate\Http\Request;
use App\Models\Tipomaterial;
use File;
//use App\Http\Controllers\ZipArchive;

use ZipArchive;
use App\Models\Repotema;
use App\Models\Detallerepo;
use Illuminate\Cache\Repository;
use Illuminate\Support\Facades\DB;



class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $id_usuario = session("usuario_id");
        //$id_usuario = $_SESSION['user'];
         
        $sql2="SELECT r.id,r.descripcion FROM rol r INNER JOIN usuariorol ur
        ON r.id=ur.rol_id 
        WHERE ur.usuario_id =:usuario";
        
        $query=DB::raw($sql2);
        //dd($query);
        $consulta= DB::select(DB::raw($sql2),['usuario'=>$id_usuario]);
    return view('filtrado', compact('consulta'))->with('esAdministrador',$this->isAdmin($consulta));
        
    }
    private function isAdmin($filas){
        foreach ($filas as $fila){
            if (in_array( $fila->id, [5,6] )){
                return true;
            }
            
        }
        return false;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}