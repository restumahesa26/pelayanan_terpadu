<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaumRenta extends Model
{
    use HasFactory;

    public $table = 'kaum_renta';

    public $fillable = [
        'link'
    ];
}
