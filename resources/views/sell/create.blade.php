@extends('mystore.index')

@section('content')
    <h1>Create New Offer!</h1>
    <hr>
    <div class="col-lg-8">
        <form method="" action="">
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
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Offer Description</label>
                <input type="text" class="form-control" id="desription" name="desription">
            </div>

            <div class="mb-3">
                <label for="prices" class="form-label">Prices</label>
                <input type="number" class="form-control" id="prices" name="prices">
            </div>

            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber">
            </div>

            <button type="submit" class="btn btn-primary">Create Now!</button>
        </form>
    </div>
@endsection
