<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = ['patente','title','rent_in','rent_out','location','status'];
}
