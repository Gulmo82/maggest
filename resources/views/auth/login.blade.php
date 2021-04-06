<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
                        <p class="subtitle has-text-dark">Login page</p>
                        <hr>
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="email" name="email" id="email"
                                        placeholder="Email" autocomplete="off" autofocus>
                                </div>
                                @error('email')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="password" name="password" id="password"
                                        placeholder="Password" autocomplete="off" autofocus>
                                </div>
                                @error('password')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button class="button is-block is-dark is-fullwidth">
                                {{ __('Login') }}
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
