<?php

namespace App\Http\Controllers;

use App\Mantencion;
use Illuminate\Http\Request;

class MantencionController extends Controller
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
	return view('mantenimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mantencion  $mantencion
     * @return \Illuminate\Http\Response
     */
    public function show(Mantencion $mantencion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mantencion  $mantencion
     * @return \Illuminate\Http\Response
     */
    public function edit(Mantencion $mantencion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mantencion  $mantencion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mantencion $mantencion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mantencion  $mantencion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mantencion $mantencion)
    {
        //
    }
}
