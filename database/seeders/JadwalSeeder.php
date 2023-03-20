<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwals')->insert([
            [
                'kode_mk' => 'RTI214006',
                'hari' => 'Senin',
                'jam' => '07:00 - 10:15	',
                'mata_kuliah' => 'Jaringan Komputer',
                'nama_dosen' => 'Arief Prasetyo, S.Kom., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI214004',
                'hari' => 'Senin',
                'jam' => '12:45 - 18:00	',
                'mata_kuliah' => 'Proyek 1',
                'nama_dosen' => 'Luqman Affandi, S.Kom., M.MSI.'
            ],
            [
                'kode_mk' => 'RTI214001',
                'hari' => 'Selasa',
                'jam' => '07:00 - 08:40',
                'mata_kuliah' => 'Kewarganegaraan',
                'nama_dosen' => 'Widaningsih, S.H., M.H.'
            ],
            [
                'kode_mk' => 'RTI214003',
                'hari' => 'Selasa',
                'jam' => '11:00 - 14:00',
                'mata_kuliah' => 'Manajemen Proyek',
                'nama_dosen' => 'Chandrasena Setiadi, S.T., M.Tr.T.'
            ],
            [
                'kode_mk' => 'RTI214002',
                'hari' => 'Rabu',
                'jam' => '13:35 - 16:00	',
                'mata_kuliah' => 'Analisis dan Desain Berorentasi Objek',
                'nama_dosen' => 'Eka Larasati Amalia, S.ST., M.T.'
            ],
            [
                'kode_mk' => 'RTI214009',
                'hari' => 'Kamis',
                'jam' => '07:00 - 10:15',
                'mata_kuliah' => 'Statistik Komputasi',
                'nama_dosen' => 'Septian Enggar Sukmana, S.Pd., M.T.'
            ],
            [
                'kode_mk' => 'RTI214005',
                'hari' => 'Kamis',
                'jam' => '10:15 - 14:25',
                'mata_kuliah' => 'Business Intelligence',
                'nama_dosen' => 'Dr. Eng. Banni Satria Andoko, S.Kom., M.MSI.'
            ],
            [
                'kode_mk' => 'RTI214007',
                'hari' => 'Kamis',
                'jam' => '14:25 - 18:00',
                'mata_kuliah' => 'Praktikum Jaringan Komputer',
                'nama_dosen' => 'Arief Prasetyo, S.Kom., M.Kom.'
            ],
            [
                'kode_mk' => 'RTI214008',
                'hari' => 'Jumat',
                'jam' => '13:00 - 17:45',
                'mata_kuliah' => 'Pemrograman Web Lanjut',
                'nama_dosen' => 'Endah Septa Sintiya, S.Pd., M.Kom.'
            ]
        ]);
    }
}
