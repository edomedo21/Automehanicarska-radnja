<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Korisnici;
use Illuminate\Http\Request;

class KorisniciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $korisnici = DB::table('korisnici')->get();
        return view('korisnici.index', ['korisnici' => $korisnici]);
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
     * @param  \App\Models\Korisnici  $korisnici
     * @return \Illuminate\Http\Response
     */
    public function show(Korisnici $korisnici)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Korisnici  $korisnici
     * @return \Illuminate\Http\Response
     */
    public function edit(Korisnici $korisnici)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Korisnici  $korisnici
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Korisnici $korisnici)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Korisnici  $korisnici
     * @return \Illuminate\Http\Response
     */
    public function destroy(Korisnici $korisnici)
    {
        //
    }
}
