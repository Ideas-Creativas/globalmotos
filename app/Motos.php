<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motos extends Model
{
    protected $fillable = ['id','umage_url','marca_id','description','user_id'];
}
