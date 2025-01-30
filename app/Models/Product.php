<?php

namespace App\Models;

use Appstract\Stock\HasStock;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasStock;

    public $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
