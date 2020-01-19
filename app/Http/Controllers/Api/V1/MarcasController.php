<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Marcas;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $marca = Marcas::create($request->all());
        return response()->json(['data'=> $marca], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function show(Marcas $marcas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marcas $marcas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marcas $marcas)
    {
        //
    }
}
