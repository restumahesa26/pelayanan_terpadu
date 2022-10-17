<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perdata extends Model
{
    use HasFactory;

    public $table = 'perdata';

    public $fillable = [
        'jenis', 'link'
    ];
}
