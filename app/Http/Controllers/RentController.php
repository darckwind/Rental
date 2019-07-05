<?php

namespace App\Http\Controllers;

use App\Rent;
use App\Moto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rent= Rent::all();
        return view('rent.index',compact('rent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rent = DB::table('motos')
                    ->select('motos.patente')
                    ->get();
        return view('rent.create',compact('rent'));
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
            'rent_out' => 'required',
	    'location'=>'required',
            'rent_in' => 'required'
        ]);
        $rent = new Rent();
        $rent->patente = $request->input('patente');
        $rent->rent_in = $request->input('rent_in');
        $rent->rent_out = date('Y-m-j' ,strtotime ( '+3 day' ,strtotime($request->input('rent_out'))));
  	    $rent->rent_to = $request->input('rent_to');
        $rent->location = $request->input('location');
        $rent->status = $request->input('arriendo');
        $rent->title = $request->input('patente');
        if($request->hotel){
               $hotel = 1;
            }else{
               $hotel =0;
            }
        $rent->hotel = $hotel;
            $rent->save();
            return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        //return view('rent.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {
        return $rent;
        //return view('rent.edit',compact('rent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rent $rent)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        $rent->delete();
        return redirect()->route('rent.index')
                        ->with('success','arriendo eliminada');
    }
}
