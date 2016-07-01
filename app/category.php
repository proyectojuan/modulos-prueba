<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    protected $guarded = ['id'];
    protected $fillable = ['nombre','descripcion'];
}
