<?php

namespace App\Http\Controllers;

use App\Manteniento;
use Illuminate\Http\Request;

class MantenientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('mantenimiento.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manteniento  $manteniento
     * @return \Illuminate\Http\Response
     */
    public function show(Manteniento $manteniento)
    {
        return view('mantenimiento.show',compact('manteniento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manteniento  $manteniento
     * @return \Illuminate\Http\Response
     */
    public function edit(Manteniento $manteniento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manteniento  $manteniento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manteniento $manteniento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manteniento  $manteniento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manteniento $manteniento)
    {
        //
    }

    public  function customCreate(Request $request){
        return $request;
    }
}
