<?php
namespace App\Application\Ports;

use App\Application\CompleteOrderCommand;

interface IOrderService {

    public function completeOrder(CompleteOrderCommand $completeOrderCommand);

}