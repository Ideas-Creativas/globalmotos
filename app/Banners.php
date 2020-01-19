<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $fillable = ['id','image_url','link','start','end','user_id'];

    public function bannersList(){
        return $this->hasMany('App\Banners');
    }

    public function author()
    {
        return $this->belongsTo('App\User','user_id');
    }
}