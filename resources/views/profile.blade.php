@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="/css/profile.css">
@endsection
@section('content')
<div class="card" style="width: 60rem;">
    <img src="/img/banner.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{ auth()->user()->name }}</h3>
      <p class="card-text" style="color: rgba(0, 0, 0, 0.6)">Write down your bio...</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Usernameㅤ: {{ auth()->user()->username }}</li>
      <li class="list-group-item">Emailㅤㅤㅤ: {{ auth()->user()->email }}</li>
      <li class="list-group-item">Password ㅤ: **********</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link text-decoration-none">>Link your whatsapp<</a>ㅤㅤㅤㅤㅤㅤ
      <a href="#" class="card-link text-decoration-none">>Link your Instagram<</a>
    </div>
</div>
@endsection
