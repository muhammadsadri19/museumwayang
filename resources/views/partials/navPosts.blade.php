<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #143784;">
    <div class="container" id="header">
      <a class="navbar-brand" href="/">MiddleMan</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-1 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/home">Home</a>
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link {{ ($active === "offers") ? 'active' : '' }}" href="/offers">Store</a> --}}
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ ($active === "selling") ? 'active' : '' }}" href="/sell">Selling</a>
          </li> --}}

        </ul>
        <ul class="navbar-nav">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/profile">Profile | <i class="bi bi-person-circle"></i></a></li>
                {{-- <li><a class="dropdown-item" href="/settings">Notifications | <i class="bi bi-bell"></i></i></a></li> --}}
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
                <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }} ">Login
                    <i class="bi bi-box-arrow-in-down-right"></i>
                </a>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
