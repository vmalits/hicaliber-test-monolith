<?php
declare(strict_types=1);

namespace App\QueryFilters;

class HouseFilter extends BaseQueryFilter
{
    public function name(string $value): void
    {
        $this->builder->where('name', 'like', "%{$value}%");
    }

    public function bedrooms(int $value): void
    {
        $this->builder->where('bedrooms', $value);
    }

    public function bathrooms(int $value): void
    {
        $this->builder->where('bathrooms', $value);
    }

    public function storeys(int $value): void
    {
        $this->builder->where('storeys', $value);
    }

    public function garages(int $value): void
    {
        $this->builder->where('garages', $value);
    }

    public function price(int $from, $to): void
    {
        $this->builder->whereBetween('price', [$from, $to]);
    }
}
