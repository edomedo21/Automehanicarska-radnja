<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Dijelovi;
use Illuminate\Http\Request;

class DijeloviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dijelovi = DB::table('dijelovi')->get();

        $jefDio = DB::table('dijelovi')
        ->select('dijelovi.*')
        ->whereBetween('dijelovi.cijena',[0,50])
        ->get();

        return view('dijelovi.index', ['dijelovi' => $dijelovi, 'jefDio' => $jefDio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dijelovi.add');
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
            'naziv' =>'required|string|max:255',
        ]);
        DB::table('dijelovi')->insert([
            'naziv' => $request->naziv,
            'id_auto' => $request->id_auto,
            'sifra' => $request->sifra,
            'cijena' => $request->cijena
            
        ]);
        return redirect()->route('dijelovi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dijelovi  $dijelovi
     * @return \Illuminate\Http\Response
     */
    public function show(Dijelovi $dijelovi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dijelovi  $dijelovi
     * @return \Illuminate\Http\Response
     */
    public function edit(Dijelovi $dijelovi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dijelovi  $dijelovi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dijelovi $dijelovi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dijelovi  $dijelovi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dijelovi $dijelovi)
    {
        //
    }
}
