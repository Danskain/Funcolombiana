<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class CotizacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cotizaciones.cotizacion',['cotizaciones'=>Producto::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Cotizacione  $cotizacione
     * @return \Illuminate\Http\Response
     */
    public function show(Cotizacione $cotizacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cotizacione  $cotizacione
     * @return \Illuminate\Http\Response
     */
    public function edit(Cotizacione $cotizacione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cotizacione  $cotizacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cotizacione $cotizacione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cotizacione  $cotizacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cotizacione $cotizacione)
    {
        //
    }
}
