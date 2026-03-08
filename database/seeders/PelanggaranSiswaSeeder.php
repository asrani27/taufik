<?php

namespace Database\Seeders;

use App\Models\PelanggaranSiswa;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\JenisPelanggaran;
use Illuminate\Database\Seeder;

class PelanggaranSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get sample data
        $siswas = Siswa::all();
        $gurus = Guru::all();
        $jenisPelanggarans = JenisPelanggaran::all();

        if ($siswas->isEmpty() || $gurus->isEmpty() || $jenisPelanggarans->isEmpty()) {
            $this->command->warn('Skipping PelanggaranSiswaSeeder: Siswa, Guru, or JenisPelanggaran data not found.');
            return;
        }

        // Create sample pelanggaran siswa records
        $pelanggarans = [
            [
                'siswa_id' => $siswas[0]->id,
                'guru_id' => $gurus[0]->id,
                'tanggal' => now()->subDays(5)->format('Y-m-d'),
                'jam' => '08:30',
                'jenis_pelanggaran_id' => $jenisPelanggarans[0]->id,
                'deskripsi' => 'Siswa terlambat masuk kelas lebih dari 15 menit tanpa alasan yang jelas',
                'catatan' => 'Siswa sudah diberi peringatan sebelumnya',
                'tindak_lanjut' => 'Diberikan surat peringatan dan wajib menulis pernyataan',
            ],
            [
                'siswa_id' => $siswas[1]->id,
                'guru_id' => $gurus[1]->id,
                'tanggal' => now()->subDays(3)->format('Y-m-d'),
                'jam' => '10:00',
                'jenis_pelanggaran_id' => $jenisPelanggarans[1]->id,
                'deskripsi' => 'Siswa menggunakan HP selama pelajaran berlangsung',
                'catatan' => 'HP diamankan oleh guru piket',
                'tindak_lanjut' => 'HP dikembalikan setelah orang tua datang ke sekolah',
            ],
            [
                'siswa_id' => $siswas[2]->id,
                'guru_id' => $gurus[2]->id,
                'tanggal' => now()->subDays(2)->format('Y-m-d'),
                'jam' => '13:00',
                'jenis_pelanggaran_id' => $jenisPelanggarans[2]->id,
                'deskripsi' => 'Siswa tidak memakai atribut lengkap seragam sekolah',
                'catatan' => 'Tidak memakai dasi dan ikat pinggang',
                'tindak_lanjut' => 'Ditegur dan diminta memperbaiki penampilan',
            ],
            [
                'siswa_id' => $siswas[0]->id,
                'guru_id' => $gurus[3]->id,
                'tanggal' => now()->subDays(1)->format('Y-m-d'),
                'jam' => '09:15',
                'jenis_pelanggaran_id' => $jenisPelanggarans[3]->id,
                'deskripsi' => 'Siswa tidak membawa buku pelajaran',
                'catatan' => 'Siswa lupa membawa buku mata pelajaran Matematika',
                'tindak_lanjut' => 'Orang tua diberi informasi untuk selalu memeriksa tas anak',
            ],
            [
                'siswa_id' => $siswas[3]->id,
                'guru_id' => $gurus[0]->id,
                'tanggal' => now()->format('Y-m-d'),
                'jam' => '07:45',
                'jenis_pelanggaran_id' => $jenisPelanggarans[0]->id,
                'deskripsi' => 'Siswa terlambat masuk sekolah',
                'catatan' => 'Karena macet jalan',
                'tindak_lanjut' => 'Diberi peringatan lisan',
            ],
        ];

        foreach ($pelanggarans as $data) {
            PelanggaranSiswa::create([
                'nomor' => PelanggaranSiswa::generateNomor(),
                'siswa_id' => $data['siswa_id'],
                'guru_id' => $data['guru_id'],
                'tanggal' => $data['tanggal'],
                'jam' => $data['jam'],
                'jenis_pelanggaran_id' => $data['jenis_pelanggaran_id'],
                'deskripsi' => $data['deskripsi'],
                'catatan' => $data['catatan'],
                'tindak_lanjut' => $data['tindak_lanjut'],
            ]);
        }

        $this->command->info('PelanggaranSiswaSeeder completed successfully!');
    }
}