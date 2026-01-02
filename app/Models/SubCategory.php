<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'active',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
