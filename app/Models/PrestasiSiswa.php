<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestasiSiswa extends Model
{
    protected $fillable = [
        'nomor',
        'tanggal',
        'siswa_id',
        'kepala_sekolah_id',
        'deskripsi',
        'catatan',
        'foto',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function kepalaSekolah()
    {
        return $this->belongsTo(KepalaSekolah::class);
    }

    public static function generateNomor()
    {
        $date = now()->format('Ymd');
        $lastRecord = self::where('nomor', 'like', "PRS{$date}%")->latest()->first();
        
        if ($lastRecord) {
            $lastNumber = (int) substr($lastRecord->nomor, -3);
            $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '001';
        }
        
        return "PRS{$date}{$newNumber}";
    }
}