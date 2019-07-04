<?php

namespace App\Http\Controllers;

use App\Moto;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getRVM(Moto $moto)
    {   
        return (response()->download(public_path('/RVM/'.$moto->patente.'.jpg')));
    }
    public function getSeguro(Moto $moto)
    {   
        return (response()->download(public_path('/seguro/'.$moto->patente.'.jpg')));
    }
    public function getRev(Moto $moto)
    {   
        return (response()->download(public_path('/rev-tec/'.$moto->patente.'.jpg')));
    }
    public function getPer(Moto $moto)
    {   
        return (response()->download(public_path('/per_circulacion/'.$moto->patente.'.jpg')));
    }
}
