<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    protected $fillable = [
        'patente','poliza','img_seg'
    ];
    protected $primaryKey = 'patente';
    public $incrementing = false;

	public function moto(){
		return $this->hasOne('App\Moto', 'patente');
	}
}
