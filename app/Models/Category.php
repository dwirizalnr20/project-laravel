<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];
    protected $fillable = [
        'id',
        'name',
    ];
    protected $table = 'categories';

    public function item()
    {
        return $this->hasMany(item::class);
    }
}
