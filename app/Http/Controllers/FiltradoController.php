<?php

namespace App\Http\Controllers;

use App\Models\Repositorio;
use Illuminate\Http\Request;
use App\Models\Tipomaterial;

use App\Models\Repotema;
use App\Models\Detallerepo;
use Illuminate\Support\Facades\DB;

class FiltradoController extends Controller
{
    public function formularioBusqueda($id)
    {
        $tipos= Repositorio::all();
        return view('View.filtrado', compact('id', 'tipos'));
     
    }
    public function filtradoRespuesta(Request $request)
    {
        
            $sql= DB::table('repositorio as r')
            ->join('detallerepo as dr' , 'dr.repositorio_id', '=', 'r.id')
            ->join('tipomaterial as tp', 'tp.id', '=', 'dr.material_id')
            ->select('r.id', 'r.fecha', 'r.documento')
            ->where('dr.material_id', '=',  $request->id )
            ->where('r.documento' , 'like', '%'.$request->titulo.'%')
            ->get();
         

        return view ('repositorio.showinicio', compact('sql'))->with('warning','no se encontro ninguna resultado.');
        //return view ('repositorio.show', compact('repositorios'));
        
    }
    public function delete($id)
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
    public function download (Repositorio $archivo){
          
     return response()->download(public_path(('images/'.$archivo->documento)), $archivo->title);
     
                 
             }

}
