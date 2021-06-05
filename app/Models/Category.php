<?php

namespace App\Models;

use App\models\traits\Uuid as TraitsUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, TraitsUuid;

    protected $fillable = ['name', 'description', 'is_active'];
    protected $dates = ['deleted_at'];
    protected $casts = [
        'id' =>  'string'
    ];

}
