<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Middleman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" style="text-align: right">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6">{{ auth()->user()->name }} Store</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form action="/home" method="get">
                    <button href="/home" class="nav-link px-3 bg-dark border-0">
                        Home
                    </button>
                </form>
            </div>
        </div>
    </header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "dashboard") ? 'active' : '' }}" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "sell") ? 'active' : '' }}" href="/sell">
              <span data-feather="file" class="align-text-bottom"></span>
              Sell
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" style="color: rgba(0,0,0,0.4)">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Cart
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" style="color: rgba(0,0,0,0.4)">
              <span data-feather="message-square" class="align-text-bottom"></span>
              Message
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('content')
    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
  </body>
</html>
