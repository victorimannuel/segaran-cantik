<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    use HasFactory;
    protected $table = 'usaha';

    protected $fillable = [
        'nama_usaha', 'kontak', 'rt', 'rw', 'dusun'
    ];
}
