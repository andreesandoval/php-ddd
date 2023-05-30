<?php

namespace App\Application\Ports;

use App\Application\GetAllProductsQuery;

interface ICatalogService
{

    public function getAllProducts(GetAllProductsQuery $getAllProductsQuery): array;
}
