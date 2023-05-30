<?php

namespace App\Application;

use App\Domain\Product;

class AddItemToCartCommand
{

    public Product $product;

    public int $quantity;

    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }
}
