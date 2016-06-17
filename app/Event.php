<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = 'events';
	protected $guarded = ['id'];
	protected $fillable = ['nombre','descripcion','fecha','hora'];   
}