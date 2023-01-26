<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CartLines extends Model
{
    use HasFactory;

    protected $table = 'cart_lines';

    protected $connection = 'pgsql';

    protected $fillable = [
        'uuid',
        'active',
        'cart_id',
        'product_id',
        'units',
        'total_price',
        'total_price_per_unit',
        'total_base_price',
        'total_basE_price_per_unit',
        'total_tax',
        'total_tax_per_unit'
    ];
    public function cart(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Carts::class);
    }

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
