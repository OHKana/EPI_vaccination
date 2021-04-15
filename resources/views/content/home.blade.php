@extends('master')

@section('content')


<div >
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100 slider-height" src="https://cdn.sanity.io/images/0vv8moc6/drugtopics/fa0ef299d4b5d2e7b19394eebe5f53476e426f84-1000x500.png?auto=format" class="d-block w-100" alt="influenza">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <h2>IT IS THE RIGHT OF A CHILD TO BE IMMUNIZED IN FULL</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100 slider-height" src="https://ichef.bbci.co.uk/news/976/cpsprodpb/14F41/production/_109352858_polio.jpg" class="d-block w-100" alt="Polio">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100 slider-height" src="https://thebetterindia-english.sgp1.digitaloceanspaces.com/uploads/2015/03/8437.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


{{-- baby tika link
<img src=""https://pedimedicine.com/wp-content/uploads/2018/09/EPI-Vaccination-Schedule-in-Bangladesh-2018-1.jpg>
https://image.slidesharecdn.com/practiceteachingtopicno-160706172028/95/immunization-schedule-11-638.jpg?cb=1467825847

teenage --}}

@endsection
