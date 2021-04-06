<!-- Navbar -->
<nav class="navbar is-dark is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="/img/logo_maggest_alt.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a href="{{route('dashboard')}}" class="navbar-item" title="Dashboard">
                    <span class="icon-text">
                        <span class="icon">
                            <i class="fa fa-tachometer-alt"></i>
                        </span>
                        <span>Dashboard</span>


                    </span>
                </a>



                <a class="navbar-item" title="Magazzino" href="{{route('products.index')}}">
                    <span class="icon-text">
                        <span class="icon">
                            <i class="fa fa-boxes"></i>
                        </span>
                        <span>Magazzino</span>
                    </span>
                </a>
                <a class="navbar-item" title="Produzione">
                    <span class="icon-text">
                        <span class="icon">
                            <i class="fa fa-industry"></i>
                        </span>
                        <span>Produzione</span>
                    </span>
                </a>


            </div>

            <div class="navbar-end">
                <hr class="navbar-divider is-hidden-desktop">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">

                        {{ Auth::user()->name }}
                    </a>

                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" title="Produzione">

                            <span class="icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <span>Profile</span>

                        </a>
                        @can('manage-user')
                        <a class="navbar-item" title="User Manager" href="{{route('user.index')}}">
                            <span class="icon">
                                <i class="fa fa-users-cog"></i>
                            </span>
                            <span>User Manager</span>

                        </a>
                        @endcan

                @can('manage-customer')
                <a class="navbar-item" title="Customers" href="{{route('customer.index')}}">
                        <span class="icon">
                            <i class="fa fa-user-friends"></i>
                        </span>
                        <span>Customer Manager</span>
                </a>
                @endcan

                        <a class="navbar-item modal-button" target="logout_modal" title="Produzione">

                            <span class="icon">
                                <i class="fa fa-door-open"></i>
                            </span>
                            <span>Logout</span>

                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
<!-- Fine Navbar -->

<!-- Modal Logout -->
<div id="logout_modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Logout</p>

        </header>
        <section class="modal-card-body">
            <p>Stai per uscire da MagGest</p>
            <p>Confemi?</p>
        </section>
        <footer class="modal-card-foot">

            <form action="{{route('logout')}}" method="post">
                @csrf
                <div class="buttons">

                    <button class="button is-danger" title="Log out" type="submit">
                        <span class="icon">
                            <i class="fa fa-door-open"></i>
                        </span>
                        <span>Esci</span>
                    </button>
                    <a class="button modal-delete is-success">Annulla</a>
                </div>
            </form>
        </footer>
    </div>
</div>
