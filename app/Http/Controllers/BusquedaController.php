<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipomaterial;
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
        return view ('repositorio.find', compact('tipomateriales'));
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
       $tema ="%".$tema."%";
       $titulo = $request->titulo??"";
       $titulo = "%".$titulo."%";
       $anio = $request->anio==-1?"":$request->anio;
       $anio = "%".$anio."%";
       $mes = $request->mes==-1?"":$request->mes;
       $mes = "%".$mes."%";
       $tipo = $request->tipo==-1?"":$request->tipo;
       $tipo = "%".$tipo."%";
       $coordinacion = $request->coordinacion==-1?"":$request->coordinacion;
       $coordinacion = "%".$coordinacion."%";


       $sql ="SELECT *  FROM repositorio r INNER JOIN repotema rt 
       ON rt.repositorio_id = r.id 
       INNER JOIN detallerepo dr ON dr.repositorio_id=r.id 
       INNER JOIN (usuario u  INNER JOIN usuariorol ur ON ur.usuario_id=u.id)
       ON u.id=r.usuario_id 
       WHERE rt.tema_id like :tema OR 
        dr.material_id like :tipo OR
        r.documento like :titulo OR
        month(r.fecha) like :mes AND
        year(r.fecha) like :anio OR 
        ur.rol_id like :coordinacion";

        $parameters= ['tema'=> $tema,
            'tipo'=> $tipo ,
            'titulo'=> $titulo,
            'mes'=> $mes ,
            'anio'=> $anio ,
          'coordinacion'=> $coordinacion 
        ];
        $repositorios= DB::select(DB::raw($sql),$parameters);
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
        //
    }
}
