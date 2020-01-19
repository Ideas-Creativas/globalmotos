<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Motos;
use Illuminate\Http\Request;

class MotosController extends Controller
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
        return response()->json(['data'=> $marca], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Motos  $motos
     * @return \Illuminate\Http\Response
     */
    public function show(Motos $motos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Motos  $motos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motos $motos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Motos  $motos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motos $motos)
    {
        $motos->delete();
        return response(null, 204);
    }
}
