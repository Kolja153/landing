<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'len_products';

    protected $fillable = [
        'title',
        'lesson',
        'program',
        'schedule',
        'duration',
        'price',
        'price_info',
        'product_id',
    ];
}
