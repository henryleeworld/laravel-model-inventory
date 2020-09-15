<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Appstract\Stock\HasStock;

class Product extends Model
{
    use HasStock;

    public $table = 'products';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
