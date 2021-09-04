@extends('layouts.app')
@section('content')


<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/photo1.jpg" class="d-block w-100" alt="ultrasound">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ultrasound Therapy</h5>
        <p>Therapeutic ultrasound is often used by physiotherapists to reduce pain, increase circulation and increase mobility of soft tissues. Additionally, the application of ultrasound can be helpful in the reduction of inflammation, reducing pain and the healing of injuries and wounds.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/photo4.jpg" class="d-block w-100" alt="Shockwave">
      <div class="carousel-caption d-none d-md-block">
        <h5>Shockwave Therapy</h5>
        <p>Extracorporeal shock wave therapy (ESWT) is a noninvasive treatment that involves delivery of shock waves to injured soft tissue to reduce pain and promote healing.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/photo5.jpg" class="d-block w-100" alt="short waves">
      <div class="carousel-caption d-none d-md-block">
        <h5>Shortwave Therapy</h5>
        <p>Pulsed shortwave therapy is the application of high frequency electromagnetic energy to the body to reduce pain and swelling.</p>
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

<!-- prices -->
<div class="card m-5">
    <div class="card-header text-center">
        <strong><em>Services</em></strong>
    </div>
    <div class="row mx-5 border">
    <div class="col-8 px-5">Kinesiotherapy</div>
    <div class="col-4 text-center">80£/hour</div>
    </div>

    <div class="row mx-5 border">
    <div class="col-8 px-5">Massage Therapy</div>
    <div class="col-4 text-center">60£/hour</div>
    </div>

    <div class="row mx-5 border">
    <div class="col-8 px-5">Lasertherapy</div>
    <div class="col-4 text-center">40£/session</div>
    </div>

    <div class="row mx-5 border">
    <div class="col-8 px-5">Shockwave</div>
    <div class="col-4 text-center">45£/session</div>
    </div>

</div>



@endsection