<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use CrudTrait;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'logo_url',
    ];
}
