<?php

namespace App\Models;

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

    public function scopeActiveWithSex($query, $value)
    {
        // USO: Newsletter::activeAndSex(1)->get();
        $query->where('active', true)->where('sex',$value);
    }
}
