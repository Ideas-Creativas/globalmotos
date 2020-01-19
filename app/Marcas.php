<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    protected $fillable = ['id','marca','image_url','user_id'];
}
