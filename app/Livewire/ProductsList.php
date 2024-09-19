<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductsList extends Component
{
    public function increment($id)
    {

    }

    public function decrement($id)
    {

    }

    public function render()
    {
        $products = Product::get();

        return view('livewire.products-list', compact('products'));
    }
}
