<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umum extends Model
{
    use HasFactory;

    public $table = 'umum';

    public $fillable = [
        'link', 'jenis'
    ];
}
