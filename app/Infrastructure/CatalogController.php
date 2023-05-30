<?php

namespace App\Infrastructure;

use App\Application\Ports\ICatalogService;
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
        return 'catalog';
    }
}
