<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mag Gest - Login</title>
    <link rel="stylesheet" href="/css/bulma.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>
    <section class="hero is-dark is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <div class="box">
                        <figure class="py-3">
                            <img src="/img/logo_maggest.png">
                        </figure>
                        <p class="subtitle has-text-dark">{{ __('Register') }}</p>
                        <hr>
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="text" name="name" id="name"
                                        placeholder="Name" value="{{old('name')}}" autocomplete="off" autofocus >
                                </div>
                                @error('name')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="email" name="email" id="email"
                                        placeholder="Email" autocomplete="off" value="{{old('email')}}" autofocus >
                                </div>
                                @error('email')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="password" name="password" id="password"
                                        placeholder="Password" autocomplete="off" autofocus>
                                </div>
                                @error('password')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="password" name="password_confirmation" id="password_confirmation"
                                        placeholder="Password confirmation" autocomplete="off" autofocus>
                                </div>
                                @error('password_confirmation')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button class="button is-block is-dark is-medium is-fullwidth">
                                {{ __('Register') }}
                                <i class="fa fa-sign-in-alt"></i>
                            </button>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </section>
</body>

</html>
