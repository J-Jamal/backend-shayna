<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    // mendaftarkan atribut (nama kolom) yang bisa kita isi ketika melakukan insert/update ke database
    protected $fillable = [
        'name', 'type', 'description', 'price', 'slug', 'quantity'
    ];
    // menyembunyikan atribut yang tidak ingin diketahui oleh orang lain
    protected $hidden = [];

    // melakukan relasi dengan tabel galeri
    public function galleries()
    {
        // return $this->hasMany(ProductGallery::class, 'products_id');
    }
}
