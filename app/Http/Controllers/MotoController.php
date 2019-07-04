<?php

namespace App\Http\Controllers;

use App\Moto;
use App\Seguro;
use App\Revicion;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;


class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//add auth function
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
	$moto = DB::table('motos')
            ->join('seguros', 'motos.patente', '=', 'seguros.patente')
	    ->join('revicions', 'motos.patente', '=', 'revicions.patente')
            ->select('motos.*', 'seguros.poliza','seguros.venc_seg','revicions.venc_rev')
            ->get();
	$currentdate =date('Y-m-d');
        //$moto = Moto::latest()->paginate(5);
        return view('moto.index',compact('moto','currentdate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'patente' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'color' => 'required',
            'nro_motor' => 'required',
            'nro_chasis' => 'required',
            'poliza' => 'required',
        ]);
	
	if($request->hasFile('img_per')){
            $file = $request->file('img_per');
            $per = $request->input('patente').'.jpg';
            $file->move(public_path().'/per_circulacion',$per);
        }
        if($request->hasFile('RVM')){
            $file = $request->file('RVM');
            $rvm = $request->input('patente').'.jpg';
            $file->move(public_path().'/RVM',$rvm);
        }
        if($request->hasFile('img_seg')){
            $file = $request->file('img_seg');
            $img_seg = $request->input('patente').'.jpg';
            $file->move(public_path().'/seguro',$img_seg);
        }
        if($request->hasFile('img_rev')){
            $file = $request->file('img_rev');
            $img_rev = $request->input('patente').'.jpg';
            $file->move(public_path().'/rev-tec',$img_rev);
        }
	
	
	$moto = new Moto();
        $moto->patente = $request->input('patente');
        $moto->marca = $request->input('marca');
        $moto->modelo = $request->input('modelo');
        $moto->color = $request->input('color');
        $moto->nro_motor = $request->input('nro_motor');
        $moto->nro_chasis = $request->input('nro_chasis');
        $moto->RVM = $rvm;
        $moto->venc_per = $request->input('venc_per');
        $moto->img_per = $per;
        $moto->save();

	//save data seguro
	$seguro = new Seguro();
        $seguro->patente = $request->input('patente');
        $seguro->poliza = $request->input('poliza');
        $seguro->venc_seg = $request->input('venc_seg');
        $seguro->img_seg = $img_seg;
        $seguro->save();
	//save data revicion
	$revision = new Revicion();
        $revision->patente = $request->input('patente');
        $revision->venc_rev = $request->input('venc_rev');
        $revision->img_rev = $img_rev;
        $revision->save();

	return redirect()->route('moto.index')
                        ->with('success','Moto agregada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Moto  $moto
     * @return \Illuminate\Http\Response
     */
    public function show(Moto $moto)
    {
	$rev = Revicion::find($moto->patente);
	$seguro = Seguro::find($moto->patente);
       	return view('moto.show',compact('moto','seguro','rev'));
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  \App\Moto  $moto
     * @return \Illuminate\Http\Response
     */
    public function edit(Moto $moto)
    {
        return view('moto.edit',compact('moto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Moto  $moto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moto $moto)
    {
        $request->validate([
            'patente' => 'required',
            'nro_motor' => 'required',
            'nro_chasis' => 'required'
        ]);
  
        $moto->update($request->all());
  
        return redirect()->route('moto.index')
                        ->with('success','Moto actuaizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Moto  $moto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moto $moto)
    {
	Storage::delete('/var/www/rent/'.public_path().'/RVM/'.$moto->patente.'.jpg');
        $moto->delete();
        
        return redirect()->route('moto.index')
                        ->with('success','Moto eliminada');
    }
}
