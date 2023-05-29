<?php
namespace App\Domain;

class Order
{

    public string $orderId;

    public string $userId;

    public array $orderItems = [];

    public function __construct(array $orderItems)
    {
        $this->orderItems = $orderItems;
    }

    public function countProducts() {
        return count($this->orderItems);
    }

    public function countItems() {
        $count = 0;

        foreach ($this->orderItems as $index => $itemInOrder) {
            $count += $itemInOrder->quantity;
        }   
        
        return $count;
    }


}