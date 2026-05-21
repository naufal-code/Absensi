<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensi';

    protected $fillable = [
        'user_id',
        'kegiatan_id',
        'status',
        'alasan',
        'tanggal_absen'
    ];
}