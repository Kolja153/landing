<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'len_orders';

    protected $fillable = [
        'name',
        'phone',
        'product_id',
        'snap_product',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
