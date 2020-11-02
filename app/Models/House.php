<?php
declare(strict_types=1);

namespace App\Models;

use App\QueryFilters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'name',
        'bedrooms',
        'bathrooms',
        'storeys',
        'garages',
        'price'
    ];
}

