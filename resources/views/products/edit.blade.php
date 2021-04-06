@extends('app')
@section('title','Products List')
@section('content')

<div class="container">
    <div class="notification is-danger">
        <h3>Attenzione!!!</h3>
        <p>Le mondifiche non potranno essere annullate!!!</p>
    </div>
    <form action="{{route('products.update',$product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label class="label">Code</label>
            <div class="control">
                <input class="input" type="text" name="product_code" id="product_code"
                    value="{{$product->product_code}}" >
            </div>
            @error('product_code')
            <p class="help is-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="field">
            <label class="label">Bag</label>
            <div class="control">
                <input class="input" type="number" name="product_bag" id="product_bag"
                    value="{{$product->product_bag}}">
            </div>
            @error('product_bag')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="field">
            <label class="label">Box</label>
            <div class="control">
                <input class="input" type="number" name="product_box" id="product_box"
                    value="{{$product->product_box}}">
            </div>
            @error('product_box')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="field">
            <label class="label">Stock</label>
            <div class="control">
                <input class="input" type="number" name="product_stock" id="product_stock"
                    value="{{$product->product_stock}}">
            </div>
            @error('product_stock')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button type="submit" name="pick" value="update" class="button is-success is-light">Aggiorna</button>
            </div>

            <div class="control">
                <a href="{{route('products.index')}}" class="button is-danger is-light">Annulla</a>
            </div>


    </form>
    <form action="{{route('products.destroy',$product->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="button">
            <span class="icon">
                <i class="fas fa-trash"></i>
            </span>
            <span>Delete</span>
        </button>
    </form>
</div>
@endsection
