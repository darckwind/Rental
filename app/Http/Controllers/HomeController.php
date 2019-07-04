<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Calendar;
use App\Rent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
	$events = [];

       $data = Rent::all();

       if($data->count()){

          foreach ($data as $key => $value) {

            $events[] = Calendar::event(

                $value->title,

                true,

                new \DateTime($value->rent_in),

                new \DateTime($value->rent_out.' +1 day')

            );

          }

       }
	$calendar = Calendar::addEvents($events);
	$moto = DB::table('motos')
            ->select('motos.*')
            ->get();
	$bikecount = $moto->count();
	$rent = DB::table('rents')->select('rents.*')->orderBy('rents.rent_in')->get();
        return view('home',compact('bikecount','rent','calendar'));
    }
}
