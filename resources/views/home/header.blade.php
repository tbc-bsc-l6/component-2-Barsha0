<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html">
                    <h1>TheJournal</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.homepage') }}">Home</a>
                        </li>

                        <li class="nav-item submenu dropdown active">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">category</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home.travel') }}">Travels</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home.car') }}">Car</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home.sport') }}">Sports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home.lifestyle') }}">Life Style</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                        @if (Route::has('login'))
                            @auth

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Log Out
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Log In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>

                            @endauth
                        @endif

                    </ul>
                    <ul class="nav navbar-nav ml-auto search">
                        <li class="nav-item d-flex align-items-center mr-10">
                            <div class="menu-form">
                                <form>
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="Search post"
                                            id="" name="search">
                                    </div>
                                </form>
                            </div>
                            <button type="submit" class="search-icon">
                                <i class="lnr lnr-magnifier"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
