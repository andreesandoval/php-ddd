<?php

namespace App\Domain;

interface OrderRepository {

    public function save(Order $order);

}