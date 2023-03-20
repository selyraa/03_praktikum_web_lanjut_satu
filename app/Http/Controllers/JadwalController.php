<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(){
        $jadwal = Jadwal::all();
        return view('jadwal')->with('jadwals', $jadwal);
    }
}
