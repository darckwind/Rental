<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $fillable = [
        'patente','marca','modelo','color','nro_motor', 'nro_chasis','RVM','permiso','venc_per'
    ];
    protected $primaryKey = 'patente';

    public $incrementing = false;
    public function seguro(){
        return $this->hasOne('App\Seguro');
    }
    public function revisiones(){
        return $this->hasOne('App\Revisiones','patente');
    }

}
