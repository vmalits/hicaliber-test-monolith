<?php
declare(strict_types=1);

namespace App\QueryFilters;

trait Filterable
{
    public function scopeFilter($builder, $filters)
    {
        return $filters->apply($builder);
    }
}
