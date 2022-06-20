<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #143784;">
    <div class="container" id="header">
        <a class="navbar-brand" href="/">MiddleMan</a>
        <ul class="navbar-nav ms-auto mb-1 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/home">Get Started</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About Us</a>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/profile">Profile | <i class="bi bi-person-circle"></i></a></li>
                            {{-- <li><a class="dropdown-item" href="/settings">Notifications | <i class="bi bi-bell"></i></a></li> --}}
                            {{-- <li><a class="dropdown-item" href="/settings">Settings | <i class="bi bi-gear"></i></a></li> --}}
                            <li><a class="dropdown-item" href="/dashboard">Dashboard | <i class="bi bi-grid"></i></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        Logout | <i class="bi bi-box-arrow-up-left"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}">Login
                            <i class="bi bi-box-arrow-in-down-right"></i>
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
