<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootsrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    {{-- Style Sendiri --}}
    <link rel="stylesheet" href="/css/welcome.css">

    {{-- Style --}}
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }

        .b-example-divider {
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }

        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }

        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }

        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }
    </style>
    <title>Middleman</title>
  </head>
  <body>
    @include('partials.navHome')

    <div class="carousel">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
                <img class="banner" src="/img/banner.jpg" alt="Banner" width="1720" height="160%">

                <div class="container">
                  <div class="carousel-caption text-start">
                      <h1>Lorem ipsum</h1>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae id hic eveniet aliquid, saepe modi et possimus quod alias praesentium, eius repudiandae tenetur molestiae rerum sequi cumque consectetur reiciendis incidunt.</p>
                    <p><a class="btn btn-lg btn-primary" href="/home">Get Started</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
                <img class="banner" src="/img/banner2.jpg" alt="Banner2" width="1720" height="200%">

                <div class="container">
                  <div class="carousel-caption">
                    <h1>Middleman Offers</h1>
                    <p>Click the button bellow to take a look the offers</p>
                    <p><a class="btn btn-lg btn-primary" href="/offers">Offers</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
                <img class="banner" src="/img/banner3.jpg" alt="Banner" width="1720" height="160%">

                <div class="container">
                  <div class="carousel-caption text-end">
                    <h1>Support</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae id hic eveniet aliquid, saepe modi et possimus quod alias praesentium, eius repudiandae tenetur molestiae rerum sequi cumque consectetur reiciendis incidunt.</p>
                    <p><a class="btn btn-lg btn-primary" href="mailto:dionma@telkomuniversity.ac.id">Contact Us</a></p>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="visually-hidden">Next</span>
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Prev</span>
            </button>
          </div>
    </div>
    <div class="card">
        <div class="container marketing">
            <div class="row">
              <div class="r1 col-md-4">
                <svg class="bd-placeholder-img rounded-circle mt-2 mb-2" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                <h2 class="fw-normal">Middleman 1</h2>
                <p>Bio Middleman1 / Tentang Middleman1</p>
                <p>--------------------------------------------------------------------------------</p>
                <p><a class="btn" href="#">Contact Now! &raquo;</a></p>
              </div><!-- /.col-md-4 -->
              <div class="r2 col-md-4">
                <svg class="bd-placeholder-img rounded-circle mt-2 mb-2" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                <h2 class="fw-normal">Middleman 2</h2>
                <p>Bio Middleman1 / Tentang Middleman2</p>
                <p>--------------------------------------------------------------------------------</p>
                <p><a class="btn" href="#">Contact Now! &raquo;</a></p>
              </div><!-- /.col-md-4 -->
              <div class="r3 col-md-4">
                <svg class="bd-placeholder-img rounded-circle mt-2 mb-2" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                <h2 class="fw-normal">Middleman 3</h2>
                <p>Bio Middleman1 / Tentang Middleman3</p>
                <p>--------------------------------------------------------------------------------</p>
                <p><a class="btn" href="#">Contact Now! &raquo;</a></p>
              </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div>
    </div>

    <footer class="container d-block">
        <p class="float-start"><a href="#">Back to top</a></p>
        <p>&copy; 2022 MiddleMan</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
