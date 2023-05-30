<?php

namespace App\Infrastructure;

use App\Domain\Ports\ICatalogRepository;

class CatalogRepository implements ICatalogRepository
{

    public function getAllProducts(): array
    {
        return [];
    }
}
