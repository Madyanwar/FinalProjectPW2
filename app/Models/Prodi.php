<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodis';

    // Kolom yang dapat diisi
    protected $fillable = [
        'id',
        'kode',
        'nama',
    ];
}
