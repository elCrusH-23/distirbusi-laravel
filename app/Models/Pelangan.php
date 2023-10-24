<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelangan extends Model
{
    use HasFactory;
    protected $table = 'pelangan'; // Menyatakan nama tabel yang terkait dengan model ini
    protected $fillable = ['nama', 'kontak', 'asal'];
}
