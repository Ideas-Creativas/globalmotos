<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use Image;

class ImageUpload extends Controller
{
    public function upload($file, $path)
    {
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
            return $nombre;
        }
    }

    public function uploadRezised($file, $path, $anchoNuevo, $altoNuevo)
    {
        if( $file->isValid() ){
            $archivo = $file;
            $imagen = Image::make($archivo);
            $random = Str::random(10);
            $nombre = $random.'-'.$archivo->getClientOriginalName();
            $anchoOriginal = $imagen->width();
            $altoOriginal = $imagen->height();
            if($anchoNuevo >= $altoNuevo){
                $altoNuevo = ($altoOriginal * $anchoNuevo)/$anchoOriginal;// Resimensionar en Altura   
            }else{
                $altoNuevo = ($anchoOriginal * $altoNuevo)/$altoOriginal;// Resimensionar en Anchura   
            }
            //$path = '/images/banners/';
            $imagen->resize($anchoNuevo, $altoNuevo);
            $imagen->save( public_path($path.$nombre), 100 );
            return $nombre;
        }
    }
}