<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'akuns';
    protected $fillable = [
        'nama_akun',
        'email',
        'gender',
        'umur',
        'tgl_lahir',
        'alamat'
    ];

    public function toko(){
        return $this->hasOne(Toko::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
