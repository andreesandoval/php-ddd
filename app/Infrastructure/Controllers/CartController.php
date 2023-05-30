<?php

namespace App\Infrastructure\Controllers;

use App\Application\Ports\ICartService;
use Illuminate\Http\Request;

class CartController extends Controller
{

    private ICartService $cartService;

    public function __construct(ICartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function addItem(Request $request)
    {
        return 'cart';
    }
}
