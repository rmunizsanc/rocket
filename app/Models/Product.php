<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable =
        [
            'sku',
            'active',
            'model_id',
            'size'
        ];
    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Models::class, 'model_id', 'id');
    }

    public function stock(): HasOne
    {
        return $this->hasOne(Stock::class, 'sku', 'sku');
    }
    public function rate(): HasOne
    {
        return $this->hasOne(Rates::class, 'sku', 'sku');
    }
}
