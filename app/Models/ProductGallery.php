<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use HasFactory;
    use SoftDeletes;

    // mendaftarkan atribut (nama kolom) yang bisa kita isi ketika melakukan insert/update ke database
    protected $fillable = [
        'products_id', 'photo', 'is_default'
    ];
    // menyembunyikan atribut yang tidak ingin diketahui oleh orang lain
    protected $hidden = [];

    // melakukan relasi dengan tabel galeri
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
