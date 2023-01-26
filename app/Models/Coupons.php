<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    use HasFactory;
    protected $table = 'coupons';

    protected $fillable =[
        'active',
        'init_at',
        'finish_at',
        'code',
        'used',
        'type'
    ];

    protected $casts = [
        'init_at',
        'finish_at'
    ];

    public function order(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Orders::class);
    }
}
