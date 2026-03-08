<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelanggaranSiswa extends Model
{
    use HasFactory;

    protected $table = 'pelanggaran_siswas';

    protected $fillable = [
        'nomor',
        'siswa_id',
        'guru_id',
        'tanggal',
        'jam',
        'jenis_pelanggaran_id',
        'deskripsi',
        'catatan',
        'tindak_lanjut',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'jam' => 'datetime:H:i',
    ];

    /**
     * Get the siswa that owns the pelanggaran.
     */
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    /**
     * Get the guru that owns the pelanggaran.
     */
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    /**
     * Get the jenis pelanggaran that owns the pelanggaran.
     */
    public function jenisPelanggaran()
    {
        return $this->belongsTo(JenisPelanggaran::class);
    }

    /**
     * Generate a unique nomor pelanggaran.
     */
    public static function generateNomor()
    {
        $year = date('Y');
        $month = date('m');
        
        $lastNomor = self::where('nomor', 'like', "PLG{$year}{$month}%")
            ->orderBy('nomor', 'desc')
            ->first();

        if ($lastNomor) {
            $lastNumber = (int) substr($lastNomor->nomor, -4);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        return "PLG{$year}{$month}" . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
    }
}