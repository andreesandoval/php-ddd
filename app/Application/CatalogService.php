<?php

namespace App\Application;

use App\Application\Ports\ICatalogService;
use App\Domain\Ports\ICatalogRepository;

class CatalogService implements ICatalogService
{

    public ICatalogRepository $catalogRepository;

    public function __construct(ICatalogRepository $catalogRepository)
    {
        $this->catalogRepository = $catalogRepository;
    }

    public function getAllProducts(GetAllProductsQuery $getAllProductsQuery): array
    {
        return [];
    }
}
