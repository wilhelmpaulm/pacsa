@extends('layouts.base')
@section('main')
<div style="color: white">
    <div class="bg-p1">
        <div class="container " id="about">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <p style="font-size: 30px"> Welcome to my site! I'll be your guide </p>
                <hr>
                <!--<div><img src='{{URL::asset("self/2.jpg")}}' alt="Wilhelm in a party!"  title="I have a nightlife too" style="height: 200px" class="img-polaroid" ></div>-->
                <h1 class="fs60"> WILHELM PAUL MARTINEZ </h1>
                <hr>
                <p style="font-size: 30px"> developer / designer / wizard / crazy person </p>
            </div>
        </div>
    </div>
    <div class="bg-p2">
        <div class="container" id="education">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <i class="icon-book icon-5x"></i>
                <h2 class="fs60">DEGREE</h2>
                <hr>
                <p class="fs40"> Bachelor of Science in Information Systems </p>
                <p class="fs30"> De La Salle University Manila</p>
            </div>
        </div>
    </div>
    <div class="bg-p3">
        <div class="container" id="extra">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <i class="icon-briefcase icon-5x"></i>
                <h2 class="fs60" >EXTRA INFO</h2>
                <hr>
                <p class="fs40"> Research Assistant </p>
                <p class="fs20"> De La Salle University </p>
                <br>
                <p class="fs40"> VP - Research & Technology </p>
                <p class="fs20"> DLSU Peer Tutor Society </p>
                <br>
                <p class="fs40"> AVP - Corporate Relations </p>
                <p class="fs20"> DLSU College of Computer Studies CSG</p>
                <br>
            </div>
        </div>
    </div>
    <div class="bg-p4">
        <div class="container" id="code">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <p class="fs20"> Programming languages I love </p>
                <p class="fs40"> Java, PHP, HTML5, JavaScript, Ruby, Python, C/C++ </p>
                <hr>
                <i class="icon-laptop icon-5x"></i>
                <h2 class="fs60"> I LOVE TO CODE </h2>
                <hr>
                <p class="fs20"> Some libraries and frameworks I use </p>
                <p class="fs40"> JQuery, CodeIgniter, Laravel 4, Rails 4 </p>
            </div>
        </div>
    </div>
    <div class="bg-lime ">
        <div class="container" id="awards">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <i class="icon-html5 icon-5x"></i>
                <p class="fs40"> 3rd Startup Weekend Manila First Place</p>
                <p class="fs40"> 3rd Startup Weekend Manila People's Choice</p>
                <hr>
                <h2 class="fs60">Hackathons! Hackathons! Hackathons!</h2>
                <hr>
                <i class="icon-windows icon-5x"></i>
                <p class="fs40"> DLSU Hackercup WP8 First Place</p>
            </div>
        </div>
    </div>

    <div class="bg-p5">
        <div class="container" id="contact">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <p class="fs20"> Send me an email </p>
                <p style="font-size: xx-large"> <i class="icon-envelope"></i>  wilhelmpaulm@gmail.com</p>
                <hr>
                <p class="fs20"> Follow me on theses sites </p>
                <p style="font-size: xx-large"> <i class="icon-twitter"></i>  @wilhelmpaulm</p>
                <br>
                <p style="font-size: xx-large"> <i class="icon-facebook"></i>  facebook.com/wilhelmpaulm</p>
                <br>
                <p style="font-size: xx-large"> <i class="icon-instagram"></i>  instagram.com/wilhelmpaulm</p>
                <br>
                <p style="font-size: xx-large"> <i class="icon-linkedin-sign"></i>  linkedin.com/in/wilhelmpaulm</p>
                <hr>
                <p class="fs20"> Look! Free Code! </p>
                <p style="font-size: xx-large"> <i class="icon-github"></i>  github.com/wilhelmpaulm</p>
            </div>
        </div>
    </div>
</div>

@stop