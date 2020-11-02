<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\HouseResource;
use App\Models\House;
use App\QueryFilters\HouseFilter;

class SearchHouseController extends Controller
{
    public function __invoke(HouseFilter $filters)
    {
        return HouseResource::collection(
            House::filter($filters)->get()
        );
    }
}
