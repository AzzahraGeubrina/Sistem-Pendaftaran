<?php

namespace App\Http\Controllers;

use App\Models\Parentt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.dataorangtua');
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
        $idu = Auth::user()->id;
        $parent1 = new Parentt;
        $parent1->user_id = $request->user()->id;
        $parent1->nama_ayah = $request->nama_ayah;
        $parent1->alamat_ayah = $request->alamat_ayah;
        $parent1->pekerjaan_ayah = $request->pekerjaan_ayah;
        $parent1->nohp_ayah = $request->nohp_ayah;
        $parent1->nama_ibu = $request->nama_ibu;
        $parent1->alamat_ibu = $request->alamat_ibu;
        $parent1->pekerjaan_ibu = $request->pekerjaan_ibu;
        $parent1->nohp_ibu = $request->nohp_ibu;
        $parent1->nama_wali = $request->nama_wali;
        $parent1->alamat_wali = $request->alamat_wali;
        $parent1->nohp_wali = $request->nohp_wali;
        $parent1->save();

        return redirect ('/uploadberkas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parentt  $parentt
     * @return \Illuminate\Http\Response
     */
    public function show(Parentt $parentt)
    {
        return view('datasiswa', compact('parentt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parentt  $parentt
     * @return \Illuminate\Http\Response
     */
    public function edit(Parentt $parentt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parentt  $parentt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parentt $parentt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parentt  $parentt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parentt $parentt)
    {
        //
    }
}
