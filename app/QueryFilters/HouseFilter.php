<?php
declare(strict_types=1);

namespace App\QueryFilters;

class HouseFilter extends BaseQueryFilter
{
    public function name(string $value): void
    {
        $this->builder->where('name', 'like', "%{$value}%");
    }

    public function bedrooms(string $value): void
    {
        $this->builder->where('bedrooms', $value);
    }

    public function bathrooms(string $value): void
    {
        $this->builder->where('bathrooms', $value);
    }

    public function storeys(string $value): void
    {
        $this->builder->where('storeys', $value);
    }

    public function garages(string $value): void
    {
        $this->builder->where('garages', $value);
    }

    public function priceFrom(string $value): void
    {
        $this->builder->where('price', '>=', $value);
    }

    public function priceTo(string $value): void
    {
        $this->builder->where('price', '<=', $value);
    }
}
