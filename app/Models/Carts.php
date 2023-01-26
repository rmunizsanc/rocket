<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Carts extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = [
        'uuid',
        'active',
        'order_id',
        'user_id',
        'coupon'
    ];

    public function lines(): HasMany
    {
        return $this->hasMany(CartLines::class, 'cart_id', 'id');
    }

    public function coupondata(): HasOne
    {
        return $this->hasOne(Coupons::class, 'id', 'coupon');
    }

    public function user():HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function order(): HasOne
    {
        return $this->hasOne(Orders::class, 'id', 'order_id');
    }
}
