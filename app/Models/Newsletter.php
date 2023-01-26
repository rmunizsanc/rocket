<?php

namespace App\Models;

use App\Casts\Sex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $table = 'newsletter';

    protected $fillable = [
        'email',
        'active',
        'sex'
    ];

    protected $casts = [
        'sex' => Sex::class
    ];
}
