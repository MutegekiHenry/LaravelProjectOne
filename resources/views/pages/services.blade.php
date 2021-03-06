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
      <h4 class="card-title">Skills I Offer</h4>
      <hr class="hr-light">
      <!-- Text -->
      <table class="table">
        <thead class="black white-text">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Langauge</th>
            <th scope="col">Competence</th>
            <th scope="col">Projects</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>C</td>
            <td>Good</td>
            <td>2</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>R</td>
            <td>Good</td>
            <td>1</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>PHP</td>
            <td> Intermediary</td>
            <td>1</td>
          </tr>
        </tbody>
      </table>

    </div>

  </div>
  <!-- Card Dark -->

@endsection
