<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = [
        'code',
        'active',
        'name',
        'description',
        'url',
        'parent'
    ];


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function parentData()
    {
        return $this->hasOne(self::class, 'parent', 'id');
    }

    public function child()
    {
        return $this->hasOne(self::class, 'id', 'parent');
    }

}
