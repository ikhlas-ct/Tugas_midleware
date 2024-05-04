<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KucingKeren extends Model
{
    use HasFactory;
    protected $table = 'kucingkeren';
    protected $fillable = ['gambar', 'nama', 'umur', 'berat', 'harga', 'stock', 'kondisi', 'deskripsi'];

}
