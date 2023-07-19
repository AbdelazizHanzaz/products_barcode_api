<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductTable extends Component
{
    public $products = [];

    public function render()
    {
        $products = Product::all();
        return view('livewire.product.product-table');
    }
}
