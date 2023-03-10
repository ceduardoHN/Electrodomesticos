<?php

namespace App\Http\Controllers;

use App\Models\tipoElectrodomestico;
use Illuminate\Http\Request;

class TipoElectrodomesticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipoE=tipoElectrodomestico::all();
        return view("tipoElectrodomesticos",compact("tipoE"));
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
        //
        $tipoE=new tipoElectrodomestico();
        $tipoE->codigo=$request->post("codigoTipo");
        $tipoE->descripcion=$request->post("descripcion");
        $tipoE->porcentajeISV=$request->post("isv");
        $tipoE->save();
        
        return redirect()->route("tipo.mant");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipoElectrodomestico  $tipoElectrodomestico
     * @return \Illuminate\Http\Response
     */
    public function show(tipoElectrodomestico $tipoElectrodomestico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipoElectrodomestico  $tipoElectrodomestico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tipoE=tipoElectrodomestico::find($id);
        return view("editarTipo",compact("tipoE"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipoElectrodomestico  $tipoElectrodomestico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $tipoE=tipoElectrodomestico::find($id);
        $tipoE->codigo=$request->post("codigoTipo");
        $tipoE->descripcion=$request->post("descripcion");
        $tipoE->porcentajeISV=$request->post("isv");
        $tipoE->save();
        
        return redirect()->route("tipo.mant");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipoElectrodomestico  $tipoElectrodomestico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tipoE=tipoElectrodomestico::find($id);
        $tipoE->delete();

        return redirect()->route("tipo.mant");
    }
}
