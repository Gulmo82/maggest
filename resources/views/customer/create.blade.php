@extends('app')
@section('title','New Customer')
@section('content')
<section class="section">
    <div class="container">
        <form action="{{route('customer.store')}}" method="post">
            @csrf
            <div class="field">
                <label class="label">Customer Name</label>
                <div class="control">
                    <input class="input" id="customer_name" name="customer_name" type="text"
                        placeholder="Customer name">
                </div>
                @error('customer_name')
                <p class="help is-danger">{{ $message }}</p>
                @enderror

            </div>
            <div class="field">
                <label class="label">Id Gestionale</label>
                <div class="control">
                    <input class="input" id="gest_id" name="gest_id" type="number" placeholder="Customer name">
                </div>
                @error('gest_id')
                <p class="help is-danger">{{ $message }}</p>
                @enderror

            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link">Create</button>
                </div>
                <div class="control">
                    <a class="button is-link is-light" href="{{route('customer.index')}}">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection
