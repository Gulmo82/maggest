<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Laravel\Sail\Console\PublishCommand;

class ProductMovimentController extends Controller
{

    public function load(Request $request, Product $product)
    {
        $verificed = $request->validate([
            'product_qty' => 'required',
            'pick' => 'required'
        ]);


        $stock =  ($product->product_stock) + $verificed['product_qty'];

        $product->update(['product_stock' => $stock]);
        return redirect(route('products.index'))
            ->with('status_success', 'Giacenza per l\'articolo ' . $product->product_code . ' aggiornata con successo!');
    }
    public function unload(Request $request, Product $product)
    {
        $verificed = $request->validate([
            'product_qty' => 'required',
            'pick' => 'required'
        ]);
        if ($verificed['product_qty'] > $product->product_stock) {
            return redirect(route('products.index'))
                ->with('status_error', 'Non è possibile scaricare ' . $verificed['product_qty'] . ' pezzi per l\'articolo ' . $product->product_code);
        } else {
            $stock =  ($product->product_stock) - $verificed['product_qty'];
        }

        $product->update(['product_stock' => $stock]);
        return redirect(route('products.index'))
            ->with('status_success', 'Giacenza per l\'articolo ' . $product->product_code . ' aggiornata con successo!');
    }


    public function moviment(Request $request, Product $product)
    {


        $verificed = $request->validate([
            'product_qty' => 'required',
            'pick' => 'required'
        ]);

        if ($verificed['pick'] == 'load') {
            $stock =  ($product->product_stock) + $verificed['product_qty'];

            $product->update(['product_stock' => $stock]);
            return redirect(route('products.index'))
                ->with('status_success', 'Giacenza per l\'articolo ' . $product->product_code . ' aggiornata con successo!');
        }
        if ($verificed['pick'] == 'unload') {
            if ($verificed['product_qty'] > $product->product_stock) {
                return redirect(route('products.index'))
                    ->with('status_error', 'Non è possibile scaricare ' . $verificed['product_qty'] . ' pezzi per l\'articolo ' . $product->product_code);
            } else {
                $stock =  ($product->product_stock) - $verificed['product_qty'];
            }

            $product->update(['product_stock' => $stock]);
            return redirect(route('products.index'))
                ->with('status_success', 'Giacenza per l\'articolo ' . $product->product_code . ' aggiornata con successo!');
        }
    }
}
