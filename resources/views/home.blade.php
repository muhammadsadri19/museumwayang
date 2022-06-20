@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="/css/home.css">

@section('content')
<div>
</div>
<div class="home">
    <nav class="leftSide">
            <header>
                <h2>MiddleMan</h2>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="bttn bttn-light" type="button" id="button-addon2" style="background-color: #143784">Search <i class="bi bi-search"></i></button>
                </div>
            </header>
            <hr>
            <main>
                <div class="album py-5 bg-light">
                    <div class="container">

                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                          <div class="card shadow-sm">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title> --}}
                                {{-- <rect width="100%" height="100%" fill="#55595c"/> --}}
                                <img src="/img/banner.jpg" alt="">
                                {{-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                            <h6>Seller : <i class="fa fa-italic" aria-hidden="true">Seller Name</i></h6>
                            <i class="fa fa-italic" aria-hidden="true">Price : Rp. 123,456.78</i>

                            <div class="card-body">
                              <p>Offer Title</p>
                              <p class="card-text">--------------------------------------------------------------------Offer Description------------------------------------------------------------------</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">Buy</button>
                                </div>
                                <small class="text-muted"> <a href="/offers">View Details >></a></small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card shadow-sm">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title> --}}
                                {{-- <rect width="100%" height="100%" fill="#55595c"/> --}}
                                <img src="/img/banner.jpg" alt="">
                                {{-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                            <h6>Seller : <i class="fa fa-italic" aria-hidden="true">Seller Name</i></h6>
                            <i class="fa fa-italic" aria-hidden="true">Price : Rp. 123,456.78</i>

                            <div class="card-body">
                              <p>Offer Title</p>
                              <p class="card-text">--------------------------------------------------------------------Offer Description------------------------------------------------------------------</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">Buy</button>
                                </div>
                                <small class="text-muted"> <a href="/offers">View Details >></a></small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card shadow-sm">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title> --}}
                                {{-- <rect width="100%" height="100%" fill="#55595c"/> --}}
                                <img src="/img/banner.jpg" alt="">
                                {{-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                            <h6>Seller : <i class="fa fa-italic" aria-hidden="true">Seller Name</i></h6>
                            <i class="fa fa-italic" aria-hidden="true">Price : Rp. 123,456.78</i>

                            <div class="card-body">
                              <p>Offer Title</p>
                              <p class="card-text">--------------------------------------------------------------------Offer Description------------------------------------------------------------------</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">Buy</button>
                                </div>
                                <small class="text-muted"> <a href="/offers">View Details >></a></small>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col">
                          <div class="card shadow-sm">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title> --}}
                                {{-- <rect width="100%" height="100%" fill="#55595c"/> --}}
                                <img src="/img/banner.jpg" alt="">
                                {{-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                            <h6>Seller : <i class="fa fa-italic" aria-hidden="true">Seller Name</i></h6>
                            <i class="fa fa-italic" aria-hidden="true">Price : Rp. 123,456.78</i>

                            <div class="card-body">
                              <p>Offer Title</p>
                              <p class="card-text">--------------------------------------------------------------------Offer Description------------------------------------------------------------------</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">Buy</button>
                                </div>
                                <small class="text-muted"> <a href="/offers">View Details >></a></small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card shadow-sm">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title> --}}
                                {{-- <rect width="100%" height="100%" fill="#55595c"/> --}}
                                <img src="/img/banner.jpg" alt="">
                                {{-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                            <h6>Seller : <i class="fa fa-italic" aria-hidden="true">Seller Name</i></h6>
                            <i class="fa fa-italic" aria-hidden="true">Price : Rp. 123,456.78</i>

                            <div class="card-body">
                              <p>Offer Title</p>
                              <p class="card-text">--------------------------------------------------------------------Offer Description------------------------------------------------------------------</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">Buy</button>
                                </div>
                                <small class="text-muted"> <a href="/offers">View Details >></a></small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card shadow-sm">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title> --}}
                                {{-- <rect width="100%" height="100%" fill="#55595c"/> --}}
                                <img src="/img/banner.jpg" alt="">
                                {{-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                            <h6>Seller : <i class="fa fa-italic" aria-hidden="true">Seller Name</i></h6>
                            <i class="fa fa-italic" aria-hidden="true">Price : Rp. 123,456.78</i>

                            <div class="card-body">
                              <p>Offer Title</p>
                              <p class="card-text">--------------------------------------------------------------------Offer Description------------------------------------------------------------------</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">Buy</button>
                                </div>
                                <small class="text-muted"> <a href="/offers">View Details >></a></small>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col">
                          <div class="card shadow-sm">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title> --}}
                                {{-- <rect width="100%" height="100%" fill="#55595c"/> --}}
                                <img src="/img/banner.jpg" alt="">
                                {{-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                            <h6>Seller : <i class="fa fa-italic" aria-hidden="true">Seller Name</i></h6>
                            <i class="fa fa-italic" aria-hidden="true">Price : Rp. 123,456.78</i>

                            <div class="card-body">
                              <p>Offer Title</p>
                              <p class="card-text">--------------------------------------------------------------------Offer Description------------------------------------------------------------------</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">Buy</button>
                                </div>
                                <small class="text-muted"> <a href="/offers">View Details >></a></small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card shadow-sm">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title> --}}
                                {{-- <rect width="100%" height="100%" fill="#55595c"/> --}}
                                <img src="/img/banner.jpg" alt="">
                                {{-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                            <h6>Seller : <i class="fa fa-italic" aria-hidden="true">Seller Name</i></h6>
                            <i class="fa fa-italic" aria-hidden="true">Price : Rp. 123,456.78</i>

                            <div class="card-body">
                              <p>Offer Title</p>
                              <p class="card-text">--------------------------------------------------------------------Offer Description------------------------------------------------------------------</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">Buy</button>
                                </div>
                                <small class="text-muted"> <a href="/offers">View Details >></a></small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card shadow-sm">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title> --}}
                                {{-- <rect width="100%" height="100%" fill="#55595c"/> --}}
                                <img src="/img/banner.jpg" alt="">
                                {{-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                            <h6>Seller : <i class="fa fa-italic" aria-hidden="true">Seller Name</i></h6>
                            <i class="fa fa-italic" aria-hidden="true">Price : Rp. 123,456.78</i>

                            <div class="card-body">
                              <p>Offer Title</p>
                              <p class="card-text">--------------------------------------------------------------------Offer Description------------------------------------------------------------------</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #143784; color: white;">Buy</button>
                                </div>
                                <small class="text-muted"> <a href="/offers">View Details >></a></small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </main>
        <hr>
        <footer class="container d-block">
            <p class="float-start"><a href="#">Back to top</a></p>
            <p>&copy; 2022 MiddleMan</p>
        </footer>
    </nav>
    <nav class="RightSide">
        <h5 class="sideTittle"><a href=""> Top Rated! </a></h5>
        <hr>
        <dt class="container d-block">Seller</dt>
        <hr>
            <button class="d-flex">ㅤ1. Seller 1
                <dd class="me-auto">0 Offers</dd>
            </button>
            <button class="d-flex">ㅤ2. Seller 2
                <dd class="me-auto">0 Offers</dd>
            </button>
            <button class="d-flex">ㅤ3. Seller 3
                <dd class="me-auto">0 Offers</dd>
            </button>
            <button class="d-flex">ㅤ4. Seller 4
                <dd class="me-auto">0 Offers</dd>
            </button>
            <button class="d-flex">ㅤ5. Seller 5
                <dd class="me-auto">0 Offers</dd>
            </button>
        <hr>
        <dt class="container d-block">Middleman</dt>
        <hr>
            <button class="d-flex">ㅤ1. Middleman 1
                <dd class="me-auto">0 Offers</dd>
            </button>
            <button class="d-flex">ㅤ2. Middleman 2
                <dd class="me-auto">0 Offers</dd>
            </button>
            <button class="d-flex">ㅤ3. Middleman 3
                <dd class="me-auto">0 Offers</dd>
            </button>
            <button class="d-flex">ㅤ4. Middleman 4
                <dd class="me-auto">0 Offers</dd>
            </button>
            <button class="d-flex">ㅤ5. Middleman 5
                <dd class="me-auto">0 Offers</dd>
            </button>
        <hr>
        <dt class="container d-block">Buyer</dt>
        <hr>
            <button class="d-flex">ㅤ1. Buyer 1
                <dd class="me-auto">0 Offers</dd>
            </button>
            <button class="d-flex">ㅤ2. Buyer 2
                <dd class="me-auto">0 Offers</dd>
            </button>
            <button class="d-flex">ㅤ3. Buyer 3
                <dd class="me-auto">0 Offers</dd>
            </button>
            <button class="d-flex">ㅤ4. Buyer 4
                <dd class="me-auto">0 Offers</dd>
            </button>
            <button class="d-flex">ㅤ5. Buyer 5
                <dd class="me-auto">0 Offers</dd>
            </button>
    </nav>
</div>
@endsection
