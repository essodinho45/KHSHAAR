<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'logo_url',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
