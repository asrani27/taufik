<?php

namespace Database\Seeders;

use App\Models\PrestasiSiswa;
use Illuminate\Database\Seeder;

class PrestasiSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prestasis = [
            [
                'tanggal' => '2024-01-15',
                'siswa_id' => 1,
                'kepala_sekolah_id' => 1,
                'deskripsi' => 'Juara 1 Lomba Matematika Tingkat Kabupaten',
                'catatan' => 'Mendapatkan piala dan uang pembinaan',
            ],
            [
                'tanggal' => '2024-02-20',
                'siswa_id' => 2,
                'kepala_sekolah_id' => 1,
                'deskripsi' => 'Juara 2 Lomba Puisi Tingkat Provinsi',
                'catatan' => 'Mewakili sekolah dalam ajang provinsi',
            ],
            [
                'tanggal' => '2024-03-10',
                'siswa_id' => 3,
                'kepala_sekolah_id' => 1,
                'deskripsi' => 'Juara 1 Lomba Kebersihan Kelas',
                'catatan' => 'Kelas terbersih bulan Maret',
            ],
            [
                'tanggal' => '2024-03-25',
                'siswa_id' => 4,
                'kepala_sekolah_id' => 1,
                'deskripsi' => 'Juara 1 Lomba Teknologi Informasi',
                'catatan' => 'Menciptakan aplikasi sekolah',
            ],
            [
                'tanggal' => '2024-04-05',
                'siswa_id' => 5,
                'kepala_sekolah_id' => 1,
                'deskripsi' => 'Juara 3 Lomba Olahraga Basket',
                'catatan' => 'Tim basket sekolah',
            ],
            [
                'tanggal' => '2024-04-15',
                'siswa_id' => 6,
                'kepala_sekolah_id' => 1,
                'deskripsi' => 'Juara 1 Lomba Kewirausahaan',
                'catatan' => 'Produk kerajinan tangan',
            ],
            [
                'tanggal' => '2024-05-10',
                'siswa_id' => 7,
                'kepala_sekolah_id' => 1,
                'deskripsi' => 'Siswa Teladan Semester Genap',
                'catatan' => 'Prestasi akademik dan perilaku baik',
            ],
            [
                'tanggal' => '2024-05-20',
                'siswa_id' => 8,
                'kepala_sekolah_id' => 1,
                'deskripsi' => 'Juara 2 Lomba Bahasa Inggris',
                'catatan' => 'Pidato bahasa Inggris',
            ],
            [
                'tanggal' => '2024-06-01',
                'siswa_id' => 9,
                'kepala_sekolah_id' => 1,
                'deskripsi' => 'Juara 1 Lomba Robotika',
                'catatan' => 'Inovasi robot pembersih',
            ],
            [
                'tanggal' => '2024-06-15',
                'siswa_id' => 10,
                'kepala_sekolah_id' => 1,
                'deskripsi' => 'Juara 1 Lomba Seni Tari',
                'catatan' => 'Tari tradisional daerah',
            ],
        ];

        foreach ($prestasis as $index => $prestasi) {
            $date = date('Ymd', strtotime($prestasi['tanggal']));
            $lastRecord = PrestasiSiswa::where('nomor', 'like', "PRS{$date}%")->latest()->first();
            
            if ($lastRecord) {
                $lastNumber = (int) substr($lastRecord->nomor, -3);
                $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $newNumber = str_pad($index + 1, 3, '0', STR_PAD_LEFT);
            }
            
            $prestasi['nomor'] = "PRS{$date}{$newNumber}";
            PrestasiSiswa::create($prestasi);
        }
    }
}