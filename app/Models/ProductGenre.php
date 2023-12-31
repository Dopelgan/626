<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGenre extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'genre_id',
    ];

}
