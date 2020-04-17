@extends('layouts.app')
@section('content')

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">My Laravel Journey!</h1>
        <p>This is a simple blog that i will use to tell my journey as a laravel developer on the scene. I am new to laravel but not new to coding and like any other newbie there is lots of crazy first time encounters. Curious to now?</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Dive In &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Initiation</h2>
          <p>So you may wonder, how did it come to this! Of all frameworks why laravel? Well its simple, a friend and workmate of mine called Innocent ounce said that life will always force you to learn what you need to get the job done. It is though that same phenomena that an opportunity to collaborate on a project with a colleague called Mike, that i got to pick interest in learning how to use Laravel since its the framework the project was to be built in. </p><p>Being born curious and willing i to learn and grow, i jumped right in it will a blind fold on.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Resources</h2>
          <p>Mike introduced me to a few resouces in form of video tutorials that would help me learn <a href="https://www.youtube.com/watch?v=3MS9T15ki_g">Link 1</a>  <a href="https://laracasts.com/skills/laravel">Laracasts</a></p>
          <p> I did some research as well and found that many people were recommending laracasts as the site for the introductory guidance to laravel so i ventured in on it as well. Due to unstable connections here and there i couldn't stream the videos live but i downloaded them instead for offline viewing. With all the necessary resources in place, i felt i was ready to dive in and start doing some hands on stuff</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Setting Up</h2>
          <p>So i was using a php framework called codeignitor and was always using windows OS. My setup then was easy, just a Xammp installation, Code Editor (VS Code) and a browser </p>
          <p>For this new journey i decided to go linux for development. So i set Up  <a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04">Lammp</a> on my Ubuntu 18.04 environment and also installed <a href="https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-18-04">PHP My Admin </a> for linux. I there after installed  <a href="https://www.howtoforge.com/tutorial/install-laravel-on-ubuntu-for-apache/">Composer</a> which I later used to create different instances of laravel projects. I had to learn how to change  <a href="https://www.linux.com/training-tutorials/how-manage-file-and-folder-permissions-linux/">folder permissions in linux</a> for www folder.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

    </div> <!-- /container -->

  </main>


@endsection
