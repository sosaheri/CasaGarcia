@extends('webLayouts.app')


@section('content')

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>

    </div> 
  </section>

<main id="main">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>Sala Lounge</h2>
          
        </div>

        <div class="row">
          <div class="col-md-6">
            <img src="{{ asset('web') }}/img/SalaLounge/SalaLounge1.jpg" alt="Speaker 1" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details">
              
              <div class="social">
                <a href='https://twitter.com/share?url=http%3A%2F%2Fwww.casagarcia.mx%2Flounge' target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.casagarcia.mx/lounge" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="mailto:info@example.com?&subject=&body=http://www.casagarcia.mx/lounge " target="_blank"><i class="fa fa-envelope"></i></a>
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
          <h2>Galeria</h2>
          
        </div>
      </div>

     
          
      
      <div class="owl-carousel gallery-carousel">
          @foreach ($medias as $media)
          <a href="{{ asset('storage') }}/{{ $media->url }}" class="venobox" data-gall="gallery-carousel">
          <img class="galeria" src="{{ asset('storage') }}/{{ $media->url }}" alt=""></a>
          @endforeach
      </div>

      
    </section>

@include('webLayouts.faq')

@include('webLayouts.contact')  

  </main>
    @endsection
