@extends('layouts.app')


@section('content')
{{-- <br>
<br>

<h1>{{$title}}</h1>

<ul class="list-group">
    @if ($services)

    @foreach ($services as $service)
    <li class="list-group-item"> {{$service}} </li>

    @endforeach

    @endif

</ul> --}}

<!-- Card Dark -->
<div class="card">

    <!-- Card image -->
    <div class="view overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2821%29.jpg"
        alt="Card image cap">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!-- Card content -->
    <div class="card-body elegant-color white-text rounded-bottom">

      <!-- Social shares button -->
      <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
      <!-- Title -->
      <h4 class="card-title">Card title</h4>
      <hr class="hr-light">
      <!-- Text -->
      <p class="card-text white-text mb-4">Some quick example text to build on the card title and make up the bulk
        of the card's content.</p>
      <!-- Link -->
      

    </div>

  </div>
  <!-- Card Dark -->

@endsection
