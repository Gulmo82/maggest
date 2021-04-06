@extends('app')

@section('title','Dashboard')

@section('content')

<section class="mt-3 mx-3">
    <div class="container">



        <div class="container">
            <!-- Tile -->
            <h3 class="title block">Hello</h3>
            <div class="tile is-ancestor">
                <div class="tile is-parent">
                    <a href="{{route('products.index')}}" class="tile is-child notification is-info box">

                        <span class="icon is-large">

                            <i class="fas fa-boxes fa-2x"></i>


                        </span>
                        <span class="title">
                            Magazzino
                        </span>

                        <!-- Add content or other tiles -->
                        <p>
                            Movimentazione articoli di magazzino e gestione.
                        </p>

                    </a>

                </div>
                <div class="tile is-parent">
                    <a href="#" class="tile is-child notification is-danger box">

                        <span class="icon is-large">
                            <i class="fas fa-industry fa-2x"></i>
                        </span>
                        <span class="title">
                            Produzione
                        </span>
                        <p>Gestione ordini di produzione</p>

                    </a>
                </div>

            </div>
            <!-- Fine Tile -->

            <h3 class="title block">Amministrazione</h3>
            <div class="tile is-ancestor">
                @can('manage-customer')
                <div class="tile is-parent">
                    <a href="{{route('customer.index')}}" class="tile is-child notification is-success box">

                        <span class="icon is-large">
                            <i class="fas fa-user-friends fa-2x"></i>
                        </span>
                        <span class="title">Customer Manager</span>
                        <p>
                            Gestione clienti
                        </p>

                    </a>

                </div>
                @endcan
                @can('manage-user')
                <div class="tile is-parent">
                    <a class="tile is-child notification is-dark box" title="User Manager"
                        href="{{route('user.index')}}">
                        <span class="icon is-large">
                            <i class="fa fa-users-cog fa-2x"></i>
                        </span>
                        <span class="title">
                            User Manager</span>

                        <p>Gestione utenti</p>
                    </a>

                </div>
                @endcan


            </div>
            <!-- Fine Tile -->

            <hr>
            <!-- Text samples -->
            <h3 class="title">Titolo</h3>
            <h4 class="subtitle">Sottotitolo</h4>
            <div class="content">
                <ul>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, quod.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, quod.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, quod.</li>
                </ul>


            </div>

        </div>
    </div>

    </div>
</section>

@endsection
