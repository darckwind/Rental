<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revicion extends Model
{
    protected $fillable = [
        'patente','venc_rev','img_rev'
    ];
    protected $primaryKey = 'patente';
    public $incrementing = false;

    public function moto(){
        return $this->hasOne('App\Moto', 'patente');
    }
}
