<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\On;

class Cart extends Component
{
    public function increment($id)
    {

    }

    public function decrement($id)
    {

    }

    public function render()
    {
        $cart = session('cart', []);
        $products = Product::whereIn('id', array_keys($cart))->get();

        return view('livewire.cart', compact('cart', 'products'));
    }
}
