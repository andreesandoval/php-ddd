<?php

namespace App\Infrastructure\Controllers;

use App\Application\Ports\ICatalogService;
use App\Application\Queries\GetAllProductsQuery;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    private ICatalogService $catalogService;

    public function __construct(ICatalogService $catalogService)
    {
        $this->catalogService = $catalogService;
    }

    public function list(Request $request)
    {
        $products = $this->catalogService->getAllProducts(new GetAllProductsQuery());
        return response()->json($products, 200);
    }
}
