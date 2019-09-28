@extends('webLayouts.app')




@section('content')

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">The Annual<br><span>Marketing</span> Conference</h1>
      <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">About The Event</a>
    </div>
  </section>

<main id="main">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>Speaker Details</h2>
          <p>Praesentium ut qui possimus sapiente nulla.</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <img src="{{ asset('web') }}/img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2>Brenden Legros</h2>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
              <p>Voluptatem perferendis sed assumenda voluptatibus. Laudantium molestiae sint. Doloremque odio dolore dolore sit. Quae labore alias ea omnis ex expedita sapiente molestias atque. Optio voluptas et.</p>
 
              <p>Aboriosam inventore dolorem inventore nam est esse. Aperiam voluptatem nisi molestias laborum ut. Porro dignissimos eum. Tempore dolores minus unde est voluptatum incidunt ut aperiam.</p> 

              <p>Et dolore blanditiis officiis non quod id possimus. Optio non commodi alias sint culpa sapiente nihil ipsa magnam. Qui eum alias provident omnis incidunt aut. Eius et officia corrupti omnis error vel quia omnis velit. In qui debitis autem aperiam voluptates unde sunt et facilis.</p>
            </div>
          </div>
          
        </div>
      </div>

    </section>
    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="{{ asset('web') }}/img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('web') }}/img/gallery/1.jpg" alt=""></a>
        <a href="{{ asset('web') }}/img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('web') }}/img/gallery/2.jpg" alt=""></a>
        <a href="{{ asset('web') }}/img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('web') }}/img/gallery/3.jpg" alt=""></a>
        <a href="{{ asset('web') }}/img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('web') }}/img/gallery/4.jpg" alt=""></a>
        <a href="{{ asset('web') }}/img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('web') }}/img/gallery/5.jpg" alt=""></a>
        <a href="{{ asset('web') }}/img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('web') }}/img/gallery/6.jpg" alt=""></a>
        <a href="{{ asset('web') }}/img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('web') }}/img/gallery/7.jpg" alt=""></a>
        <a href="{{ asset('web') }}/img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('web') }}/img/gallery/8.jpg" alt=""></a>
      </div>

    </section>

@include('webLayouts.faq')

@include('webLayouts.contact')  

  </main>
    @endsection
