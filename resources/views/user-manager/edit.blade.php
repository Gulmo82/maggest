@extends('app')
@section('title','Edit User')
@section('content')
<section class="section">
    <div class="container">
        <form action="{{route('user.update',$user->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label">User Name</label>
                <div class="control">
                    <input class="input" id="name" name="name" type="text" placeholder="User name"
                        value="{{$user->name}}">
                </div>
                @error('name')
                <p class="help is-danger">{{ $message }}</p>
                @enderror

            </div>
            <div class="field">
                <label class="label">User Email</label>
                <div class="control">
                    <input class="input" id="email" name="email" type="email" placeholder="User Email"
                        value="{{$user->email}}">
                </div>
                @error('email')
                <p class="help is-danger">{{ $message }}</p>
                @enderror

            </div>
            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input class="input" id="password" name="password" type="password" placeholder="Type password">
                </div>
                @error('password')
                <p class="help is-danger">{{ $message }}</p>
                @enderror

            </div>
            <div class="field">
                <label class="label">Password Confirm</label>
                <div class="control">
                    <input class="input" id="password_confirmation" name="password_confirmation" type="password"
                        placeholder="Retype password">
                </div>
                @error('password_confirmation')
                <p class="help is-danger">{{ $message }}</p>
                @enderror

            </div>
            <div class="field">
                <div class="control">
                    @foreach ($roles as $role)
                    @if ($role->id == $user->role_id)
                    <label class="radio">
                        <input type="radio" name="role_id" value="{{$role->id}}" checked>
                        {{$role->role}}
                    </label>

                    @else
                    <label class="radio">
                        <input type="radio" name="role_id" value="{{$role->id}}">
                        {{$role->role}}
                    </label>
                    @endif

                    @endforeach


                </div>
            </div>


            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link">Update User</button>
                </div>
                <div class="control">
                    <a class="button is-link is-light" href="{{route('user.index')}}">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection
