<?php
namespace App\Application\Ports;

use App\Application\AddItemToCartCommand;

interface ICartService {

    public function addItemToCart(AddItemToCartCommand $addItemToCartCommand);

}