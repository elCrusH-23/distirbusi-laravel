<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang'; // Menyatakan nama tabel yang terkait dengan model ini
    protected $fillable = ['nama_barang', 'price', 'stock'];
}
