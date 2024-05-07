<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'products';
    protected $fillable = [
        'gambar',
        'nama',
        'harga',
        'stok',
        'berat',
        'kondisi',
        'deskripsi'
    ];
}
