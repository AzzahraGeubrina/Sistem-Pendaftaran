<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ($student = DB::table('students')->where('user_id', '=', Auth::user()->id)->exists() && 
            $parent = DB::table('parents')->where('user_id', '=', Auth::user()->id)->exists() &&
            $file = DB::table('files')->where('user_id', '=', Auth::user()->id)->exists()){
            return view('siswa.menu');
        }
        
        else if ($student = DB::table('students')->where('user_id', '=', Auth::user()->id)->exists() && 
                $parent = DB::table('parents')->where('user_id', '=', Auth::user()->id)->count() == 0&&
                $file = DB::table('files')->where('user_id', '=', Auth::user()->id)->count() == 0){
                return view('siswa.dataorangtua');
        }
         else if ($student = DB::table('students')->where('user_id', '=', Auth::user()->id)->exists() && 
                $parent = DB::table('parents')->where('user_id', '=', Auth::user()->id)->exists() &&
                $file = DB::table('files')->where('user_id', '=', Auth::user()->id)->count() == 0){
                return view('siswa.datafile');
        }
        else {
            return view('home');
        }
    }

    public function menu()
    {
        return view('siswa.menu');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function visimisi()
    {
        return view('visimisi');
    }

    public function ekstrakurikuler()
    {
        return view('ekstrakurikuler');
    }
    public function about()
    {
        return view('about');
    }
}
