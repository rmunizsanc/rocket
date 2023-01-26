<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $fillable = [
        'code',
        'active',
        'category',
        'parent'
    ];

    public function parentData()
    {
        return $this->hasOne(self::class, 'parent', 'id');
    }

    public function child()
    {
        return $this->hasOne(self::class, 'id', 'parent');
    }
}
