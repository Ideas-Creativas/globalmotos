<?php

namespace App\Http\Controllers\Api\V1;

use App\Banners;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannersController extends Controller
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
        $banner = Banners::create($request->all());
        return response()->json(['data'=> $banner], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function show(Banners $banners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banners $banners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banners $banners)
    {
        //
    }
}
