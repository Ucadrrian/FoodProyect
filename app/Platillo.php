<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','precio','foto'];

}
