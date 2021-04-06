@extends('app')
@section('title','Products List')
@section('content')
<div class="container">
    <form action="{{route('products.edit',$product->id)}}" method="GET">
        @csrf

        <div class="field">
            <label class="label">Code</label>
            <div class="control">
                <input class="input" type="text" name="product_code" id="product_code"
                    value="{{$product->product_code}}"  disabled>
            </div>
            @error('product_code')
            <p class="help is-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="field">
            <label class="label">Bag</label>
            <div class="control">
                <input class="input" type="number" name="product_bag" id="product_bag"
                    value="{{$product->product_bag}}" disabled>
            </div>
            @error('product_bag')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="field">
            <label class="label">Box</label>
            <div class="control">
                <input class="input" type="number" name="product_box" id="product_box"
                    value="{{$product->product_box}}" disabled>
            </div>
            @error('product_box')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="field">
            <label class="label">Stock</label>
            <div class="control">
                <input class="input" type="number" name="product_stock" id="product_stock"
                    value="{{$product->product_stock}}" disabled>
            </div>
            @error('product_stock')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button type="submit" name="pick" value="update" class="button is-success is-light">Edit</button>
            </div>

            <div class="control">
                <a href="{{route('products.index')}}" class="button is-danger is-light">Annulla</a>
            </div>


    </form>

</div>
@endsection
