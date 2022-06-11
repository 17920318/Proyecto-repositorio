<?php

namespace App\Http\Controllers;


use App\Models\Rol;
use Illuminate\Http\Request;
use App\Models\Tipomaterial;
use App\Models\Repositorio;
use App\Models\Repotema;
use App\Models\Detallerepo;
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
        
        $tipomateriales = Tipomaterial::all();
        $coordinaciones = Rol::all();
        return view ('repositorio.find',
        compact('tipomateriales','coordinaciones'));
      
     
    }
    public function welcome(){
        $tipomateriales = Tipomaterial::all();
        $coordinaciones = Rol::all();
        return view ('welcome',
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
        
       $tema= $request->tema??"";
       $tema = "%$tema%";
       $titulo = $request->titulo??"";
       $titulo = "%$titulo%";
       $anio = $request->anio==-1?"":$request->anio;
       $anio = "%$anio%";
       $mes = $request->mes==-1?"":$request->mes;
       $mes = "%$mes%";
       $tipo = $request->tipo==-1?"":$request->tipo;
       $tipo = "%$tipo%";
       $coordinacion = $request->coordinacion==-1?"":$request->coordinacion;
       $coordinacion = "%$coordinacion%";
       
       $sql ="SELECT r.id, r.fecha, r.documento, r.file FROM repositorio r INNER JOIN (repotema rt 
       INNER JOIN tema t ON rt.tema_id=t.id) 
       ON rt.repositorio_id = r.id 
       INNER JOIN detallerepo dr ON dr.repositorio_id=r.id 
       INNER JOIN (usuario u  INNER JOIN usuariorol ur ON ur.usuario_id=u.id)
       ON u.id=r.usuario_id 
       WHERE upper(trim(t.descripcion)) like upper(trim(:tema)) and
        dr.material_id like :tipo or
        upper(trim(r.documento)) like upper(trim(:titulo)) and
        month(r.fecha) like :mes AND
        year(r.fecha) like :anio AND
        ur.rol_id like :coordinacion";

        $parameters= ['tema'=> $tema,
            'tipo'=> $tipo ,
            'titulo'=> $titulo,
            'mes'=> $mes ,
            'anio'=> $anio ,
          'coordinacion'=> $coordinacion 
        ];
        //subir archivos
        //dd($_SESSION);
        $query=DB::raw($sql);
        $repositorios= DB::select(DB::raw($sql),$parameters);
       
        //Consultar roles y permisos
        $id_usuario = session("id_usuario");
       //$id_usuario = $_SESSION['user'];
        
       $sql="SELECT * FROM usuario u INNER JOIN usuariorol ur
       INNER JOIN rol r ON u.id =ur.usuario_id AND ur.rol_id=r.id
       INNER JOIN permiso p INNER JOIN rolpermiso rp ON p.id = rp.permiso_id
       AND rp.rol_id = r.id WHERE u.id=:usuario";
       
       $query=DB::raw($sql);
       $consulta= DB::select(DB::raw($sql),['usuario'=>$id_usuario]);
       dd($consulta);
       
       return view ('repositorio.show', compact('repositorios'))->with('esAdministrador',true);
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repositorios = Repositorio::find($id);
        return view ('repositorio.edit', compact('repositorios'));
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
            $this->validateData($request);
       
            $archivo = "";
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $archivo = $file->getClientOriginalName();
            }
            $currentValue = Repositorio::find($id);
        
        if (empty($archivo)) $archivo = $currentValue->file;
             
        $campos=[
                 'file'          => $archivo,
                 'documento'     => $request->documento,
                 'url'           => $request->url,
                 'descripcion'   => $request->descripcion,
                 
             ];
             if ($request->hasFile('file')) $file->move(public_path('images'), $archivo);
             
             Repositorio::whereId($id)->update($campos);
             return redirect('busqueda')->with('success', 'Actualizado correctamente...');
         }
         function validateData(Request $request)
         {
             $request->validate([
                 'documento' => 'required|max:200',
                 'descripcion' => 'required'
             ]);
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
        
    }

        //
    
}
