<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderLines extends Model
{
    use HasFactory;

    protected $table = 'order_lines';

    protected $fillable = [
        'product_id',
        'delivery_id',
        'sku',
        'units',
        'name',
        'price_unit',
        'price_unit_base',
        'price_total',
        'price_total_base',
        'id_tax',
        'tax_value',
        'tax_unit',
        'tax_total',
        'original_price'
    ];

    public function product(): hasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function order(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Orders::class);
    }
}
