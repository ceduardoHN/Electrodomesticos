<?php

namespace App\Http\Controllers;

use App\Models\Electrodomestico;
use App\Models\tipoElectrodomestico;
use Illuminate\Http\Request;

class ElectrodomesticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $e=Electrodomestico::all();
        return view("electrodomesticos",compact("e"));
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
        $tE=new tipoElectrodomestico();
        $e=new Electrodomestico();
        $e->codigo=$request->post("codigo");
        $e->descripcion=$request->post("descripcion");
        $e->tipoElectrodomestico=$request->post("tipoEle");
        $e->precio=$request->post("precio");
        $e->ISV=$request->post("precio")*$tE->ISV;
        $e->total=$request->post("precio")+$e->precio*$tE->ISV;
        $e->save();
        
        return redirect()->route("e.mant");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Electrodomestico  $electrodomestico
     * @return \Illuminate\Http\Response
     */
    public function show(Electrodomestico $electrodomestico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Electrodomestico  $electrodomestico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tipoE=tipoElectrodomestico::all();
        $e=Electrodomestico::find($id);

        return view("editarElectrodomestico",compact("e","tipoE"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Electrodomestico  $electrodomestico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $e=Electrodomestico::find($id);
        $e->codigo=$request->post("codigo");
        $e->descripcion=$request->post("descripcion");
        $e->tipoElectrodomestico=$request->post("tipoEle");
        $e->precio=$request->post("precio");
        $e->save();
        
        return redirect()->route("e.mant");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Electrodomestico  $electrodomestico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $e=Electrodomestico::find($id);
        $e->delete();

        return redirect()->route("e.mant");
    }
}
