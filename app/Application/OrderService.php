<?php
namespace App\Application;

use App\Domain\OrderRepository;

class OrderService {

    public function __construct(OrderRepository $orderRepository) {

    }

}