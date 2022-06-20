@extends('layouts.main')

@section('content')

  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  @if(session()->has('loginError'))
    <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

<div class="login">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <main class="form-signin w-100 m-auto">
        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
        <form action="/login" method="post">
          @csrf
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            <label for="email">Username / Email address</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>
          <button class="w-100 btn btn-lg-0 btn-dark mt-2" name="submit" style="background-color: #143784;" type="submit">Login</button>
        </form>
        <small class="register d-block text-center mt-1">Don't have an account?<a href="/register">Register Here!</a></small>
      </main>
    </div>
  </div>
</div>
@endsection
