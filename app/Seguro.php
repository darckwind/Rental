<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    protected $fillable = [
        'patente'
    ];
    protected $primaryKey = 'patente';
    public $incrementing = false;

	public function moto(){
		return $this->hasOne('App\Moto');
	}
}
