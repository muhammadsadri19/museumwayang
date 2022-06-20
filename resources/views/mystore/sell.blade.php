@extends('mystore.index')

@section('content')
    <h1>Create an Offer!</h1>
    <a href="/sell/create" class="btn btn-primary mb-2">Create an Offer</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Price</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td></td>
              <td></td>
              <td></td>
              <td><a class="text-decoration-none" href="/sell/create" title="Edit"><span data-feather="edit" class="align-text-bottom"></span>ㅤ</a>
                  <a class="text-decoration-none" href="/sell/create" title="View"><span data-feather="eye" class="align-text-bottom"></span>ㅤ</a>
                  <a class="text-decoration-none" href="/sell/create" title="Cancel Offer"><span data-feather="x" class="align-text-bottom"></span></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
@endsection
