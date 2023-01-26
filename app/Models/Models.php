<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Models extends Model
{
    use HasFactory;

    protected $table = 'model';

    protected $fillable = [
        'code',
        'name',
        'brand',
        'active',
        'image',
        'title',
        'description',
        'url',
        'color',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'model_id', 'id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'product', 'id');
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class, 'product', 'id');
    }

    public function scopeActiveAndLastUpdated($query)
    {
        // USO: Models::activeAndLastUpdated()->get();
        $query->where('active', true)->where('updated_at', '>=', Carbon::now()->subWeek());
    }
}
