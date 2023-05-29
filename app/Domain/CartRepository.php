<?php

namespace App\Domain;

interface CartRepository {

    public function save(Cart $cart);

}