<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FiltroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('View.filtrado');
     
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

    $titulo = $request->titulo??"";
    $titulo = "%$titulo%";


    $sql ="SELECT * FROM repositorio r INNER JOIN detallerepo dr 
    ON dr.repositorio_id = r.id  
    INNER JOIN tipomaterial tp ON tp.id = dr.material_id
    -- INNER JOIN (usuario u  INNER JOIN usuariorol ur ON ur.usuario_id=u.id)
    -- ON u.id=r.usuario_id 
    WHERE 
     upper(trim(r.documento)) like upper(trim(:titulo)) and 
     tp.id = 5
    

    ";

       $parameters= [
        'titulo'=> $titulo,
       ];

        $query=DB::raw($sql);
        $repositorios = DB::select(DB::raw($sql),$parameters);
           //  ($repositorios); exit;

        return view ('repositorio.showinicio', compact('repositorios'));
        //return view ('repositorio.show', compact('repositorios'));
        
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
