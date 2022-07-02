<?php

namespace App\Http\Controllers;

use App\Models\Repositorio;
use Illuminate\Http\Request;
use App\Models\Tipomaterial;

//use App\Http\Controllers\ZipArchive;
use League\Flysystem\Filesystem;
use League\Flysystem\ZipArchive\ZipArchiveAdapter as Adapter;
use ZipArchive;
//use App\Http\Controllers\Countable;
use App\Models\Repotema;
use App\Models\Detallerepo;
use Illuminate\Cache\Repository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FiltradoController extends Controller
{
    public function formularioBusqueda($id)
    {
        $tipos = Repositorio::all();
        $id_usuario = session("usuario_id");
        //$id_usuario = $_SESSION['user'];
         
        $sql2="SELECT r.id,r.descripcion FROM rol r INNER JOIN usuariorol ur
        ON r.id=ur.rol_id 
        WHERE ur.usuario_id =:usuario";
        
        $query=DB::raw($sql2);
        //dd($query);
        $consulta= DB::select(DB::raw($sql2),['usuario'=>$id_usuario]);
        return view('View.filtrado', compact('id', 'tipos'))->with('esAdministrador',$this->isAdmin2($consulta));
    }
    public function filtradoRespuesta(Request $request)
    {

        $sql = DB::table('repositorio as r')
            ->join('detallerepo as dr', 'dr.repositorio_id', '=', 'r.id')
            ->join('tipomaterial as tp', 'tp.id', '=', 'dr.material_id')
            ->select('r.id', 'r.fecha', 'r.documento', 'r.file','r.url')
            ->where('dr.material_id', '=',  $request->id)
            ->where('r.documento', 'like', '%' . $request->titulo . '%')
            ->get();

            $id_usuario = session("usuario_id");
            //$id_usuario = $_SESSION['user'];
             
            $sql2="SELECT r.id,r.descripcion FROM rol r INNER JOIN usuariorol ur
            ON r.id=ur.rol_id 
            WHERE ur.usuario_id =:usuario";
            
            $query=DB::raw($sql2);
            //dd($query);
            $consulta= DB::select(DB::raw($sql2),['usuario'=>$id_usuario]);
        return view('repositorio.showinicio', compact('sql','consulta'))->with('esAdministrador',$this->isAdmin($consulta));
        //return view ('repositorio.show', compact('repositorios'));

    }
    private function isAdmin($filas){
        foreach ($filas as $fila){
            if (in_array( $fila->id, [5,6] )){
                return true;
            }
            
        }
        return false;
    }
    private function isAdmin2($filas){
        foreach ($filas as $fila){
            if (in_array( $fila->id, [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25] )){
                return true;
            }
            
        }
        return false;
    }
    public function delete($id)
    {
        DB::beginTransaction();
        try {
            Repotema::where('repositorio_id', '=', $id)->delete();
            Detallerepo::where('repositorio_id', '=', $id)->delete();
            Repositorio::whereId($id)->delete();
            DB::commit();
        } catch (Exception $ex) {
            DB::rollBack();
            echo $ex->getMessage();
            exit;
        }
        return redirect('busqueda');
    }

   // class ZipArchive implements Countable { }

    public function descarga($file){
       // return response()->download(public_path(('images/'.$file)));
    }
    public function download ($id)
    {
        $zip = new ZipArchive();
        $documento = Repositorio::find($id);
        $files = explode('|', $documento->file);
        $fileName = 'file_tmp.zip';
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE) {
            foreach ($files as $file) {
            $archivo = public_path(('images/'.$file));
          // $doc = File::get($archivo);
          $storage= Storage::path($archivo);
         // dd ($archivo); exit();
         //$zip->addFile($storage,$file);    
            }
            $zip->close();
        } 
        return response()->download(public_path($fileName));
      
    }   
}

//class Zipper extends ZipArchive { 

    
//}