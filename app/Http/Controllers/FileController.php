<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.datafile');
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
        $folderAkta='public/assets-file/akta';
        $folderKK='public/assets-file/kk';
        $folderIjz='public/assets-file/ijazah-skhu';
        $folderFoto='public/assets-file/pas-foto';

        if($request->hasFile('akta')) {
            $file1 = new File;
            $file1->user_id = $request->user()->id;
            $file1->akta = $request->akta->storePubliclyAs(
                $folderAkta,
                $request->user()->id.'-'.$request->user()->name.'-'.$request->akta->getClientOriginalName(),
                'public'
            );
            $file1->kk = $request->kk->storePubliclyAs(
                $folderKK,
                $request->user()->id.'-'.$request->user()->name.'-'.$request->kk->getClientOriginalName(),
                'public'
            );
            $file1->ijazah_skhu = $request->ijazah_skhu->storePubliclyAs(
                $folderIjz,
                $request->user()->id.'-'.$request->user()->name.'-'.$request->ijazah_skhu->getClientOriginalName(),
                'public'
            );
            $file1->foto = $request->foto->storePubliclyAs(
                $folderFoto,
                $request->user()->id.'-'.$request->user()->name.'-'.$request->foto->getClientOriginalName(),
                'public'
            );

            $file1->save();
            return redirect('/menu')->with('messege', 'Data berhasil disimpan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
