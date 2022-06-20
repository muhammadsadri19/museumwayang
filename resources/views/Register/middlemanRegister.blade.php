@extends('mystore.index')

@section('content')
    <h1>Register As Middleman</h1>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <hr>
    <div class="col-lg-8">
        <form method="post" action="/middlemanRegister">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>

            <div class="mb-3">
                <label for="birthDate" class="form-label">Birthdate</label>
                <input type="number" class="form-control" id="birthDate" name="birthDate">
            </div>

            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber">
            </div>

            <div class="mb-3">
                <label for="identityCard" class="form-label">Identity Card</label>
                <input type="number" class="form-control" id="identityCard" name="identityCard">
            </div>

            <button type="submit" class="btn btn-primary">Register as Middleman!</button>
        </form>
    </div>
@endsection
