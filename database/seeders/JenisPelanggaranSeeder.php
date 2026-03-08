<?php

namespace Database\Seeders;

use App\Models\JenisPelanggaran;
use Illuminate\Database\Seeder;

class JenisPelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenisPelanggaran = [
            [
                'kode' => 'P01',
                'nama' => 'Terlambat Sekolah',
                'poin' => 5,
            ],
            [
                'kode' => 'P02',
                'nama' => 'Tidak Memakai Seragam Lengkap',
                'poin' => 10,
            ],
            [
                'kode' => 'P03',
                'nama' => 'Membawa HP ke Sekolah',
                'poin' => 15,
            ],
            [
                'kode' => 'P04',
                'nama' => 'Bolos Pelajaran',
                'poin' => 20,
            ],
            [
                'kode' => 'P05',
                'nama' => 'Merokok di Lingkungan Sekolah',
                'poin' => 25,
            ],
            [
                'kode' => 'P06',
                'nama' => 'Bertengkar dengan Teman',
                'poin' => 30,
            ],
            [
                'kode' => 'P07',
                'nama' => 'Tidak Mengerjakan Tugas',
                'poin' => 10,
            ],
            [
                'kode' => 'P08',
                'nama' => 'Melanggar Tata Tertib',
                'poin' => 15,
            ],
            [
                'kode' => 'P09',
                'nama' => 'Tidak Mengikuti Upacara',
                'poin' => 10,
            ],
            [
                'kode' => 'P10',
                'nama' => 'Berkelahi',
                'poin' => 50,
            ],
            [
                'kode' => 'P11',
                'nama' => 'Memukul Guru',
                'poin' => 100,
            ],
            [
                'kode' => 'P12',
                'nama' => 'Merusak Fasilitas Sekolah',
                'poin' => 75,
            ],
            [
                'kode' => 'P13',
                'nama' => 'Mencuri',
                'poin' => 100,
            ],
            [
                'kode' => 'P14',
                'nama' => 'Memalsukan Dokumen',
                'poin' => 80,
            ],
            [
                'kode' => 'P15',
                'nama' => 'Tidak Mengikuti Kegiatan Ekstrakurikuler',
                'poin' => 10,
            ],
        ];

        foreach ($jenisPelanggaran as $data) {
            JenisPelanggaran::create($data);
        }
    }
}