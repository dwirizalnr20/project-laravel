<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];

    protected $fillable = [
        'id',
        'category_id',
        'nama_item',
        'gambar',
        'keterangan',
        'pemegang',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
