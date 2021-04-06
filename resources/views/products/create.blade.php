@extends('app')
@section('title','Products List')
@section('content')
<div class="container">
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="field">
            <label class="label">Code</label>
            <div class="control">
                <input class="input" type="text" name="product_code" id="product_code">
            </div>
            @error('product_code')
            <p class="help is-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="field">
            <label class="label">Bag</label>
            <div class="control">
                <input class="input" type="number" name="product_bag" id="product_bag">
            </div>
            @error('product_bag')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="field">
            <label class="label">Box</label>
            <div class="control">
                <input class="input" type="number" name="product_box" id="product_box">
            </div>
            @error('product_box')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="field">
            <label class="label">Stock</label>
            <div class="control">
                <input class="input" type="number" name="product_stock" id="product_stock">
            </div>
            @error('product_stock')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button type="submit" name="action" value="store_back" class="button is-success is-light">Carica articolo</button>
            </div>
            <div class="control">
                <button type="submit" name="action" value="store_new" class="button is-link is-light">Carica e Nuovo</button>
            </div>
            <div class="control">
                <a href="{{route('products.index')}}" class="button is-danger is-light">Annulla</a>
            </div>
        </div>
    </form>
</div>
@endsection
