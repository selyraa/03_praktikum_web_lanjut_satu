<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        return view('program', [
            'judul' => 'Program']);
    }

    public function satu(){
        return view('program', [
            'judul' => 'Event']);
    }

    public function dua(){
        return view('program', [
            'judul' => 'Karir']);
    }

    public function tiga(){
        return view('program', [
            'judul' => 'Magang']);
    }

    public function empat(){
        return view('program', [
            'judul' => 'Kunjungan Industri']);
    }
}

