<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;
use App\Models\Repositorio;
use App\Models\Repotema;
use App\Models\Detallerepo;
use Illuminate\Support\Facades\DB;

use App\Models\Tipomaterial;

class ListaCoordinacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipomateriales = Tipomaterial::all();
        $coordinaciones = Rol::all();
        return view ('View.listacoordinaciones', 
        compact('tipomateriales','coordinaciones'));
       
        
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
    public function store(Request $request)
    {
     
       $tipo = $request->tipo==-1?"":$request->tipo;
       $tipo = "%$tipo%";
       $coordinacion = $request->coordinacion==-1?"":$request->coordinacion;
       $coordinacion = "%$coordinacion%";
       
       $sql ="SELECT r.id, r.fecha, r.documento FROM repositorio r INNER JOIN (repotema rt 
       INNER JOIN tema t ON rt.tema_id=t.id) 
       ON rt.repositorio_id = r.id 
       INNER JOIN detallerepo dr ON dr.repositorio_id=r.id 
       INNER JOIN (usuario u  INNER JOIN usuariorol ur ON ur.usuario_id=u.id)
       ON u.id=r.usuario_id 
       WHERE 
        dr.material_id like :tipo  and
    
        ur.rol_id like :coordinacion";


        $parameters= [
            'tipo'=> $tipo ,
          'coordinacion'=> $coordinacion 
        ];
        //subir archivos

     
        $query=DB::raw($sql);
        $repositorios= DB::select(DB::raw($sql),$parameters);
        // ($repositorios); exit;
       // dd($repositorios); exit; 

       return view ('repositorio.show', compact('repositorios'));
        
    
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
        DB::beginTransaction();
        try{ 
        Repotema::where('repositorio_id', '=', $id)->delete();
        Detallerepo::where('repositorio_id', '=', $id)->delete();
        Repositorio::whereId($id)->delete();
        DB::commit(); 
        } catch(Exception $ex){
            DB::rollBack();
            echo $ex->getMessage();exit;
        }
        return redirect('busqueda');
        //
    }
    public function download (Repositorio $archivo){
          

        // $documento=Repositorio:: where ('id', $id)->firstFail();
          //   $pathToFile = public_path ('images'.$image->documento);
           //  retun response()->download($pathToFile); 
     
                // $repositorio = Repositorio::$id();
               // dd ($archivo);
               return response()->download(public_path(('images/'.$archivo->documento)), $archivo->title);
     
                 
             }
}
