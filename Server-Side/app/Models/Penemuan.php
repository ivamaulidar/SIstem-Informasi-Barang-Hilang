<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penemuan extends Model
{
    use HasFactory;
    protected $table = "penemuan";
    protected $fillable = [
        'nama','nim','prodi','angkatan','tanggal_ketemu','jenis','spek','kronologi','gambar'
    ];
}
