@extends('app')
@section('title','User Manager')
@section('content')
<div class="container">
    <div class="table-container">
        <table class="table is-hoverable is-fullwidth">
            <thead>
                <th>Id</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Role Id</th>
                <th></th>
            </thead>
            <tfoot>
                <th>Id</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Role Id</th>
                <th></th>
            </tfoot>
            @forelse ($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->role}}</td>
                <td>
                    <div class="buttons is-right">
                        <a href=" {{route('user.edit',$user->id)}}" class="button is-small is-success">
                            <span class="icon is-small">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                            <span>Edit</span>
                        </a>
                        <form action="{{route('user.destroy',$user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-small is-danger">
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
                <td>No User present</td>
            </tr>
            @endforelse
        </table>
    </div>

    <div class="columns block">
        <div class="column is-10">
            {{ $users->links() }}
        </div>
        <div class="column is-2">
            <a href="{{route('user.create')}}" class="button is-dark is-outlined">Create New User</a>

        </div>
    </div>
</div>

@endsection
