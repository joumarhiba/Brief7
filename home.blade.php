@extends('layouts.app')
@section('link')
<link rel="stylesheet" href="css/home.css">
@endsection
@section('content')
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner vh-100">
    <div class="carousel-item active vh-100" data-bs-interval="10000">
      <img src="assets/img2.jpg" class="d-block w-100 vh-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>En quelques clics</h5>
        <h4>Trouvez le job qui vous convient vraiment.</h4>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets/img3.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>En quelques clics</h5>
        <h4>Trouvez le job qui vous convient vraiment.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img1.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>En quelques clics</h5>
        <h4>Trouvez le job qui vous convient vraiment.</h4>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<h4 class="title text-center">Les Jobs Les plus demandés</h4>
<section class="ctgr">
  <div class="carte card text-white">
  <img src="assets/img4.jpg" alt="">
  <div class="card-img-overlay my-1 py-1">
    <h5 class="card-title">Design</h5>
    <p class="card-text">New 130 Jobs Posted</p>
  </div>
</div>
<div class="carte card text-white">
  <img src="assets/img3.jpg" alt="">
  <div class="card-img-overlay my-1 py-1">
    <h5 class="card-title">Marketing</h5>
    <p class="card-text">New 130 Jobs Posted</p>
  </div>
</div>
<div class=" carte card text-white">
  <img src="assets/img4.jpg" alt="">
  <div class="card-img-overlay my-1 py-1">
    <h5 class="card-title">Technology</h5>
    <p class="card-text">New 130 Jobs Posted</p>
  </div>
</div>
<div class="carte card text-white">
  <img src="assets/img3.jpg" alt="">
  <div class="card-img-overlay my-1 py-1">
    <h5 class="card-title">Finance</h5>
    <p class="card-text w-100">New 130 Jobs Posted</p>
  </div>
</div>
</section>

<section>
  <div class=" d-flex justify-content-around">
<div>
<img src="assets/needjob new.png" class="hireme" style="width: 100%;" alt="">
</div> 
<div>
  <h3 class="title">Create & Build Your Profile</h3>
<p class="paragraph mt-5" style="width: 60%;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nihil nesciunt nemo consequatur ullam facilis incidunt blanditiis quis quibusdam aperiam quidem a nam possimus porro, saepe excepturi harum delectus dignissimos.</p>

</div>
</div>
</section>
@endsection