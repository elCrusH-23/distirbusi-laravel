<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan'; // Menyatakan nama tabel yang terkait dengan model ini
    protected $fillable = ['jumlah_barang', 'harag_satuan'];
}
