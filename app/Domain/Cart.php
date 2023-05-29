<?php
namespace App\Domain;

class Cart
{

    public string $cartId;

    public string $userId;

    public array $cartItems = [];

    public function add(CartItem $cartItem) {
        $this->cartItems[] = $cartItem;
    }

    public function update(CartItem $cartItem) {
        foreach ($this->cartItems as $index => $itemInCart) {
            if ($itemInCart->productId === $cartItem->productId) {
                $this->cartItems[$index] = $cartItem;
                break;
            }  
        }    
    }

    public function delete(CartItem $cartItem) {
        foreach ($this->cartItems as $index => $itemInCart) {
            if ($itemInCart->productId === $cartItem->productId) {
                unset($this->cartItems[$index]);
                break;
            }  
        }    
    }

    public function countProducts() {
        return count($this->cartItems);
    }

    public function countItems() {
        $count = 0;

        foreach ($this->cartItems as $index => $itemInCart) {
            $count += $itemInCart->quantity;
        }   
        
        return $count;
    }


}