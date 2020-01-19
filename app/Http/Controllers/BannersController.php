<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Banners;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;
use Input;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banners::all();
        return view('admin.banners.index', ["banners" => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banner = new Banners;
        return view('admin.banners.create',["banner"=>$banner]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image_url');
        $nombre = '';
        if( !is_null($file) ){
            if( $file->isValid() ){
                $archivo = $file;
                $imagen = Image::make($archivo);
                $random = Str::random(10);
                $nombre = $random.'-'.$archivo->getClientOriginalName();
                $anchoOriginal = $imagen->width();
                $altoOriginal = $imagen->height();
                $anchoNuevo = 1920;
                $altoNuevo = ($altoOriginal * $anchoNuevo)/$anchoOriginal;// Resimensionar en Altura
                $path = '/images/banners/';
                $imagen->resize($anchoNuevo, $altoNuevo);
                $imagen->save( public_path($path.$nombre), 100 );
            }
        }
        $banner = new Banners;
        $banner->link = $request->link;
        $banner->name = $request->name;
        $banner->image_url = $nombre; //$request->image_url;
        $banner->start = $request->start;
        $banner->end = $request->end;
        $banner->user_id = Auth::user()->id;

        if( $banner->save() ){
            return redirect("/admin/banners");
        }else{
            return redirect("/admin/banners/create",['banner'=>$banner]);
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banners::find($id);
        return view('admin.banners.show',["banner"=>$banner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banners::find($id);
        return view('admin.banners.edit',["banner"=>$banner]);
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
        $banner = Banners::find($id);
        $file = $request->file('image_url');
        $nombre = $banner->image_url;
        
        if( !is_null($file) ){
            if( $file->isValid() ){
                $archivo = $request->file('image_url');
                $imagen = Image::make($archivo);
                $random = Str::random(10);
                $nombre = $random.'-'.$archivo->getClientOriginalName();
                $anchoOriginal = $imagen->width();
                $altoOriginal = $imagen->height();
                $anchoNuevo = 1920;
                $altoNuevo = ($altoOriginal * $anchoNuevo)/$anchoOriginal;// Resimensionar en Altura
                $path = '/images/banners/';
                $imagen->resize($anchoNuevo, $altoNuevo);
                $imagen->save( public_path($path.$nombre), 100 );

                    if( file_exists(public_path($path.$banner->image_url) ) ){
                        unlink( public_path($path.$banner->image_url) );
                    }   
            }
        }

            $banner->link = $request->link;
            $banner->name = $request->name;
            $banner->image_url = $nombre; //$request->image_url;
            $banner->start = $request->start;
            $banner->end = $request->end;
            $banner->user_id = Auth::user()->id;

            if( $banner->save() ){
                return redirect("/admin/banners");
            }else{
                return redirect("/admin/banners/".$id."/edit");
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banners::find($id);
        if (@getimagesize(public_path().'/images/banners/'.$banner->image_url)) 
        {
            unlink(public_path().'/images/banners/'.$banner->image_url);
        }
        Banners::destroy($id);
        return redirect('/admin/banners');

    }
}
