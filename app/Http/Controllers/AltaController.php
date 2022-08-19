<?php

namespace App\Http\Controllers;
use App\Models\Repositorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AltaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(  )
    {

        $id_usuario = session("usuario_id");
        //$id_usuario = $_SESSION['user'];
         
        $sql2="SELECT r.id,r.descripcion FROM rol r INNER JOIN usuariorol ur
        ON r.id=ur.rol_id 
        WHERE ur.usuario_id =:usuario";
        $query=DB::raw($sql2);
        $consulta= DB::select(DB::raw($sql2),['usuario'=>$id_usuario]);
        
        return view('View.filtrado')->with('esAdministrador',$this->isAdmin2($consulta));
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
    public function store(Request $request, $id)
    {

        $sql = DB::table('repositorio as r')
        ->join('detallerepo as dr', 'dr.repositorio_id', '=', 'r.id')
        ->join('tipomaterial as tp', 'tp.id', '=', 'dr.material_id')
        ->select('r.id', 'r.fecha', 'r.documento', 'r.file','r.url')
        ->where('dr.material_id', '=',  $request->id)
        //->where('r.documento', 'like', '%' . $request->titulo . '%')
        ->get();
        
        $id_usuario = session("usuario_id");
        //$id_usuario = $_SESSION['user'];
         
        $sql2="SELECT r.id,r.descripcion FROM rol r INNER JOIN usuariorol ur
        ON r.id=ur.rol_id 
        WHERE ur.usuario_id =:usuario";

        $query=DB::raw($sql2);
        //dd($query);
        $consulta= DB::select(DB::raw($sql2),['usuario'=>$id_usuario]);

        return view('View.allarchivos', compact('sql', 'id'))->with('esAdministrador',$this->isAdmin2($consulta));
      //return view ('View.edit');
        //
    }
    private function isAdmin2($filas){
        foreach ($filas as $fila){
            if (in_array( $fila->id, [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25] )){
                return true;
            }
            
        }
        return false;
    }

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