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
        
    $id_usuario = session("usuario_id");
    //$id_usuario = $_SESSION['user'];
     
    $sql2="SELECT r.id,r.descripcion FROM rol r INNER JOIN usuariorol ur
    ON r.id=ur.rol_id 
    WHERE ur.usuario_id =:usuario";
    
    $query=DB::raw($sql2);
    //dd($query);
    $consulta= DB::select(DB::raw($sql2),['usuario'=>$id_usuario]);
        
        $tipomateriales = Tipomaterial::all();
        $coordinaciones = Rol::all();
        return view ('repositorio.find',
        compact('tipomateriales','coordinaciones'))->with('esAdministrador',$this->isAdmin2($consulta));
      
     
    }
    private function isAdmin2($filas){
        foreach ($filas as $fila){
            if (in_array( $fila->id, [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25] )){
                return true;
            }
            
        }
        return false;
    }
    public function welcome(){
        $tipomateriales = Tipomaterial::all();
        $coordinaciones = Rol::all();
        return view ('welcome',
        compact('tipomateriales','coordinaciones'));
        
    }
    /*public function getData(){

      $employees = Repositorio::paginate(8);
      return view('repositorio.show', compact('employees'));
    }*/
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
    
       $file = "";
       $anio = $request->anio==-1?"":$request->anio;
        $anio = "%$anio%";
        $mes = $request->mes==-1?"":$request->mes;
        $mes = "%$mes%";
        $tipo = $request->tipo==-1?"":$request->tipo;
        $tipo = "%$tipo%";
        $coordinacion = $request->coordinacion==-1?"":$request->coordinacion;
       $coordinacion = "%$coordinacion%";
       
       $id_usuario = session("usuario_id");
      //$id_usuario = $_SESSION['user'];
       
      $sql="SELECT r.id,r.descripcion FROM rol r INNER JOIN usuariorol ur
      ON r.id=ur.rol_id 
      WHERE ur.usuario_id =:usuario";
       
      
 
        $query=DB::raw($sql);
        //dd($query);
        $consulta= DB::select(DB::raw($sql),['usuario'=>$id_usuario]);
        $repositorios = DB::table('repositorio as r')
        ->join('detallerepo as dr', 'dr.repositorio_id', '=', 'r.id')
        ->join('tipomaterial as tp', 'tp.id', '=', 'dr.material_id')
        ->join('rol as ur','ur.id', '=', 'r.usuario_id' )
        ->select('r.id', 'r.fecha', 'r.documento', 'r.file','r.url')
        ->Where('documento', 'LIKE', "%{$titulo}%")
        ->Where('fecha', 'LIKE', "%{$mes}%")
        ->Where('fecha', 'LIKE', "%{$anio}%") 
        ->where ('ur.id', 'LIKE', "%{$coordinacion}%")
        ->where('dr.material_id',  'LIKE',"%{$tipo}%" )
        ->paginate(10);

        return view ('repositorio.show', compact('repositorios','consulta'))->with('esAdministrador',$this->isAdmin($consulta));

    } 

   private function isAdmin($filas){
       foreach ($filas as $fila){
           if (in_array( $fila->id, [1,2] )){
               return true;
           }
           
       }
       return false;
   }
       public function url ($url=""){
        $documento = Repositorio::find($url);
        
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
            $fileNames="";
            if ($request->file('file'))
            foreach($request->file('file') as $file)
            {
                $name=$file->getClientOriginalName();
                $file->move(public_path('images'), $name);
                $fileNames = $fileNames.$name."|";  
                        }
                $fileNames=substr($fileNames,0,strlen($fileNames)-1);        
                $currentValue = Repositorio::find($id);
        
        if (empty($fileNames)) $fileNames = $currentValue->file;
             $campos=[
                'file'           => $fileNames,
                 'documento'     => $request->documento,
                 'descripcion'   => $request->descripcion,
                 'url'           => $request->url
                 
             ];
             
             
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
        return redirect('busqueda')->with('success', 'Eliminado correctamente...');;
        
    }

        //
    
}