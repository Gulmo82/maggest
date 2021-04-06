<?php

namespace App\Http\Livewire;

use App\Http\Controllers\ProductMovimentController;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;



class Products extends Component
{
    use WithPagination;

    public $search = '';
    public $product_qty = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function paginationView()
    {
        return 'partial.pagination';
    }


    public function render()
    {

        $query = Product::where('product_code', 'like', $this->search . '%');


        return view('livewire.products', [
            'products' => $query->paginate(15),
            'count' => $query->count(),
        ]);
    }
}
