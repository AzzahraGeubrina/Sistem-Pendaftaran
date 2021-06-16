<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class StudentController extends Controller
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
        $student1 = new Student;
        $student1->user_id = $request->user()->id;
        $student1->nama_lengkap = $request->nama_lengkap;
        $student1->nisn = $request->nisn;
        $student1->jenis_kelamin = $request->jenis_kelamin;
        $student1->tempat_lahir = $request->tempat_lahir;
        $student1->tanggal_lahir = $request->tanggal_lahir;
        $student1->agama = $request->agama;
        $student1->alamat = $request->alamat;
        $student1->no_hp = $request->no_hp;
        $student1->asal_sekolah = $request->asal_sekolah;
        $student1->jurusan_pilihan = $request->jurusan_pilihan;
        $student1->save();

        return redirect('/dataorangtua');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function __construct() {
        $this->Student = new Student();
    }
    public function joinTabel($id) {
        $data = [
            'student' => $this->Student->userData($id),
        ];
        return view('siswa.semuadata', $data);
    }
    public function kelulusan($id) {
        $data = [
            'student' => $this->Student->userData($id),
        ];
        return view('siswa.kelulusan', $data);
    }
    public function kartu($id) {
        $data = [
            'student' => $this->Student->userData($id),
        ];
        return view('/kartu', $data);
    }
    public function updatelulus($id) {
        Student::where('user_id', $id)
        ->update(['keterangan' => 'Lulus']);

        return redirect ('/admin')->with('messege', 'Data berhasil disimpan! Peserta lulus.');
    }

    public function updatetdklulus($id) {
        Student::where('user_id', $id)
        ->update(['keterangan' => 'Tidak Lulus']);
        
        return redirect ('/admin')->with('messege', 'Data berhasil disimpan! Peserta tidak lulus.');
    }
    public function pesertalulus() { 
        $student = Student::where('keterangan', '=', 'Lulus')
        ->get(); 
        return view('admin.pesertalulus', compact('student'));
    }
    public function showkartu($id) {
        $data = [
            'student' => $this->Student->userData($id),
        ];
        return view('siswa.kartu', $data);
    }
}
