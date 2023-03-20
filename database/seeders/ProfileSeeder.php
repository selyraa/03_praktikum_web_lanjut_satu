<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            'nim' => '2141720005',
            'nama' => 'Sely Ruli Amanda',
            'jurusan' => 'Teknologi Informasi',
            'kelas' => 'TI - 2H',
            'no_absen' => 25,
            'jenis_kelamin' => 'P',
        ]);
    }
}
