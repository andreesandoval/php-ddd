<?php

namespace App\Infrastructure\Adapters;

use App\Domain\Ports\ICatalogRepository;
use App\Infrastructure\Models\Product;

class CatalogRepository implements ICatalogRepository
{
    public function getAllProducts(): array
    {
        $dbProducts = Product::all()->toArray();

        return array_map(fn ($dbProduct) => new Product($dbProduct['id'], $dbProduct['name'], $dbProduct['price']), $dbProducts);
    }
}
