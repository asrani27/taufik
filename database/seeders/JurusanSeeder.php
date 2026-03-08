<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusans = [
            ['kode' => 'TKJ', 'nama' => 'Teknik Komputer dan Jaringan'],
            ['kode' => 'RPL', 'nama' => 'Rekayasa Perangkat Lunak'],
            ['kode' => 'TKR', 'nama' => 'Teknik Kendaraan Ringan'],
            ['kode' => 'TBSM', 'nama' => 'Teknik Sepeda Motor'],
            ['kode' => 'AKL', 'nama' => 'Akuntansi dan Keuangan Lembaga'],
            ['kode' => 'BDP', 'nama' => 'Bisnis Daring dan Pemasaran'],
        ];

        foreach ($jurusans as $jurusan) {
            Jurusan::create($jurusan);
        }
    }
}
