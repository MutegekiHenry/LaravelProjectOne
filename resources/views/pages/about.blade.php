@extends('layouts.app')
@section('content')


<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">Who is Henry?</h1>
        <p>This guy here is a simple Dev. I am still a student, currently at Makerere University, persuing a bachelor's degreee in software Engineerning. I often do coding for fun and i actually enjoy it, the whole concept of coming up with algoriths and seeing them come to life, wow that strikes me differently. Get to know three things about me! </p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">See Details&raquo;</a></p>
      </div>
    </div>

    <div class="container">

        <!-- Card group -->
<div class="card-group">

    <!-- Card -->
    <div class="card mb-4">

      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Card content -->
      <div class="card-body">

        <!-- Title -->
        <h4 class="card-title">Commutity</h4>
        <!-- Text -->
        <p class="card-text">I am super passionate about community and helping people using tech, to lead better lives. I find ease in associating with new people and love to mentor the youth getting into the field of tech. I also take pride and joy in holding long conversations.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <button type="button" class="btn btn-primary btn-md">Read more</button>

      </div>
      <!-- Card content -->

    </div>
    <!-- Card -->

    <!-- Card -->
    <div class="card mb-4">

      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Card content -->
      <div class="card-body">
        <!-- Title -->
        <h4 class="card-title">Clouds</h4>
        <!-- Text -->
        <p class="card-text">Some times i just take off time and look into the sky and wonder what its made of, that sparks lots of conspiracies that i often venture to explore. Iam very inquisitive! I love to travel, given chance i would go anywhere in the world without thinking twice. </p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <button type="button" class="btn btn-primary btn-md">Read more</button>

      </div>
      <!-- Card content -->

    </div>
    <!-- Card -->

    <!-- Card -->
    <div class="card mb-4">

      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/77.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Card content -->
      <div class="card-body">

        <!-- Title -->
        <h4 class="card-title">Nature</h4>
        <!-- Text -->
        <p class="card-text">I love the scenary of mountains, waterfalls, lakes, rivers and all things that make up nature. It haunts me when there is a massive destruction on nature and i feel compeled to always protect mother nature. </p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <button type="button" class="btn btn-primary btn-md">Read more</button>

      </div>
      <!-- Card content -->

    </div>
    <!-- Card -->

  </div>
  <!-- Card group -->

    </div> <!-- /container -->

  </main>



@endsection
