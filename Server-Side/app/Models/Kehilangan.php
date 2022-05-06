<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehilangan extends Model
{
    use HasFactory;

    protected $table = "kehilangan";
    protected $fillable = [
        'nama','nim','prodi','angkatan','tanggal','jenis','spek','kronologi','gambar'
    ];
}
