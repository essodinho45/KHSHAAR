<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'image_url',
        'sub_category_id',
        'active',
    ];

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }
}
