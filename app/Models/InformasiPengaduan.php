<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPengaduan extends Model
{
    use HasFactory;

    public $table = 'informasi_pengaduan';

    public $fillable = [
        'jenis', 'link'
    ];
}
