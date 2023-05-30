<?php
namespace App\Application;

use App\Application\Ports\IOrderService;
use App\Domain\Ports\IOrderRepository;

class OrderService implements IOrderService {

    private IOrderRepository $orderRepository;

    public function __construct(IOrderRepository $orderRepository) {
        $this->orderRepository = $orderRepository;
    }

    public function completeOrder(CompleteOrderCommand $completeOrderCommand) {

    }

}