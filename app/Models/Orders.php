<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'delivery_name',
        'delivery_surname',
        'delivery_addres',
        'delivery_zipcode',
        'delivery_province',
        'delivery_country',
        'delivery_phone',
        'delivery_comments',
        'bill_name',
        'bill_address',
        'bill_zipcode',
        'bill_province',
        'bill_country',
        'bill_identity_card',
        'bill_fiscal_name',
        'bill_phone',
        'bill_alter_phone',
        'bill_city',
        'bill_surname',
        'payment_method',
        'paid',
        'paid_at',
        'total_price',
        'tax_price',
        'subtotal_price',
        'shipping_price',
        'shipping_tax',
        'discounted_price',
        'status',
        'email',
        'id_unique'
    ];

    protected $casts = [
        'paid_at' => 'datetime'
    ];

    public function lines(): HasMany
    {
        return $this->hasMany(OrderLines::class, 'delivery_id', 'id');
    }

    public function coupondata(): HasOne
    {
        return $this->hasOne(Coupons::class, 'id', 'coupon');
    }
}
