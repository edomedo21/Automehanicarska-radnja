<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Auta;
use Illuminate\Http\Request;

class AutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auta = DB::table('auta')->get();
        $autodijelovi = DB::table('auta')
    ->select('auta.*')
    ->join('dijelovi','auta.id_dijelovi','=','dijelovi.id_auto')
    ->get();

    $autalema = DB::table('auta')
    ->select('auta.*')
    ->where('auta.id_korisnik',2)
    ->get();

        return view('auta.index', ['auta' => $auta, 'autodijelovi' => $autodijelovi, 'autalema' => $autalema]);      
    } 

    public function upiti()
    {
        $autalema = DB::table('auta')
    ->select('auta.*')
    ->where('auta.id_korisnik',2)
    ->get();

    $edoauta = DB::table('auta')
    ->select('auta.*')
    ->where('auta.id_korisnik',1)
    ->get();

    $amelauta = DB::table('auta')
    ->select('auta.*')
    ->where('auta.id_korisnik',3)
    ->get();
    //sva auta kojima su potrebni dijelovi motor
    $motor = DB::table('auta')
    ->select('auta.*')
    ->join('dijelovi','auta.id_dijelovi','=','dijelovi.id_dijelovi')
    ->where('dijelovi.id_dijelovi',1)
    ->get();

    //ispis svih auta koji su mlađi od 5 godina a potreban je motor
    $od = '2017-01-01 00:00:00';
    $do = '2022-01-01 23:59:59';
    $mladost = DB::table('auta')
    ->select('auta.*')
    ->join('dijelovi','auta.id_dijelovi','=','dijelovi.id_dijelovi')
    ->where('dijelovi.id_dijelovi',1)
    ->whereBetween('auta.dat_proiz',[$od,$do])
    ->get();
    
    //ispis svih dijelova na auta koje hitno treba postaviti
    $hitno = DB::table('dijelovi')
    ->select('dijelovi.*')
    ->distinct()
    ->join('auta','auta.id_dijelovi','=','dijelovi.id_dijelovi')
    ->get();
    
    return view ('upiti.index',['autalema' => $autalema,'edoauta' => $edoauta, 'amelauta' => $amelauta,'motor' => $motor,
    'mladost' => $mladost,'hitno' => $hitno]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $korisnik = DB::table('korisnici')->get();
        $dio = DB::table('dijelovi')->get();
        return view('auta.add',['dijelovi' => $dio], ['korisnici' => $korisnik]);

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
            'ime' =>'required|string|max:255',
        ]);
        DB::table('auta')->insert([
            'ime' => $request->ime,
            'dat_proiz' => $request->dat_proiz,
            'sifra' => $request->sifra,
            'id_dijelovi' => $request->id_dijelovi,
            'id_korisnik' => $request->id_korisnik
        ]);
        return redirect()->route('auta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auta  $auta
     * @return \Illuminate\Http\Response
     */
    public function show(Auta $auta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auta  $auta
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $aut = DB::table('auta')->where('id',$id)->get();
        $dio = DB::table('dijelovi')->get();
        $korisnik = DB::table('korisnici')->get();

        return view('auta.edit', ['auta' => $aut, 'dijelovi' => $dio, 'korisnici' => $korisnik]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auta  $auta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'ime' =>'required|string|max:255',
        ]);
        $update_query = DB::table('auta')
        ->where('id', $id)
        ->update([
            'ime' => $request->ime,
            'dat_proiz' => $request->dat_proiz,
            'sifra' => $request->sifra,
            'id_dijelovi' => $request->id_dijelovi,
            'id_korisnik' => $request->id_korisnik
        ]);
        return redirect()->route('auta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auta  $auta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auta $auta)
    {
        //
    }

    public function delete(Request $request)
    {
        $id=$request->id;
        DB::table('auta')->where('id',$id)->delete();
        return redirect()->route('auta');
    }

}
