<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {

        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([

            'product_code' => 'required',
            'product_bag' => 'numeric',
            'product_box' => 'numeric',
            'product_stock' => 'numeric',
            'action' => 'required'

        ]);

        $validated['product_code'] = Str::upper($validated['product_code']);

        Product::create($validated);
        if ($validated['action'] == 'store_new') {
            return redirect(route('products.create'))
                ->with('status_success', 'L\'articolo ' . $validated['product_code'] . ' caricato con successo!');
        } else {
            return redirect(route('products.index'))
                ->with('status_success', 'L\'articolo ' . $validated['product_code'] . ' caricato con successo!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $verificed = $request->validate([
            'product_code' => 'required',
            'product_bag' => 'required',
            'product_box' => 'required',
            'product_stock' => 'required'
        ]);
        $product->update($verificed);
        return redirect(route('products.index'))
            ->with('status_success', 'Giacenza per l\'articolo ' . $product->product_code . ' aggiornata con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        $product->delete();
        return redirect(route('products.index'))
            ->with('status_success', 'L\'articolo ' . $product->product_code . ' eliminato con successo!');
    }
}
