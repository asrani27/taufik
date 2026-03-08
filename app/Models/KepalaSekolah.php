<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KepalaSekolah extends Model
{
    protected $fillable = [
        'nip',
        'nama',
        'pangkat',
        'tanggal_menjabat',
    ];

    protected $casts = [
        'tanggal_menjabat' => 'date',
    ];
}
