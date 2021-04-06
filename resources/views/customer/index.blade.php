@extends('app')
@section('title','Clienti')
@section('content')

      <div class="container">
        <table class="table table-bordered is-fullwidth">
            <thead>
                <th>Id</th>
                <th>Customer name</th>
                <th>Gest Id</th>
                <th></th>
            </thead>
            @forelse ($customers as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->customer_name}}</td>
                <td>{{$customer->gest_id}}</td>
                <td>
                    <div class="buttons is-right">
                        <a href="{{route('customer.edit',$customer->id)}}" class="button is-success is-small">
                            <span class="icon is-small">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                            <span>Edit</span>
                        </a>
                        <form action="{{route('customer.destroy',$customer->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger is-small">
                                <span class="icon is-small">
                                    <i class="fas fa-trash-alt "></i>
                                </span>
                                <span>Delete</span>
                            </button>
                        </form>
                    </div>

                </td>
            </tr>
            @empty
            <tr>
                <td>No Customer present</td>
            </tr>
            @endforelse
        </table>

        <div class="columns block">
            <div class="column is-10">
                {{ $customers->links() }}
            </div>
            <div class="column is-2">
                <a href="{{route('customer.create')}}" class="button is-dark is-outlined">Create New Customer</a>
            </div>
        </div>

    </div>


@endsection
