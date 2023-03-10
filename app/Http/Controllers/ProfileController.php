<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view(('profile'))
        ->with('nama', 'Sely Ruli Amanda')
        ->with('jurusan', 'Teknik Informatika')
        ->with('nim', '2141720005')
        ->with('kelas', 'TI - 2H')
        ->with('absen', '25');
    }
}
