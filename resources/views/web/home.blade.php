@extends('webLayouts.app')




@section('content')

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
      <div class="intro-container wow fadeIn">
          <h1 class="mb-4 pb-0">Nuestros<br><span>Eventos Sociales</span></h1>
          <a href="https://www.youtube.com/watch?v=z-5r-VoECAE" class="venobox play-btn mb-4" data-vbtype="video"
            data-autoplay="true"></a>
          <a href="#about" class="about-btn scrollto">Ver más</a>
        </div>

    <div id="owl-banner" class="owl-carousel owl-theme">
      <div class="item">
          <div class="intro-container wow fadeIn">
              <h1 class="mb-4 pb-0">The Annual<br><span>Marketing</span> Conference</h1>
              <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>
              <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                data-autoplay="true"></a>
              <a href="#about" class="about-btn scrollto">About The Event</a>
            </div>
      </div>

      <div class="item">
          <div class="intro-container wow fadeIn">
              <h1 class="mb-4 pb-0">The Annual<br><span>Marketing</span> Conference</h1>
              <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>
              <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                data-autoplay="true"></a>
              <a href="#about" class="about-btn scrollto">About The Event</a>
            </div>
      </div>



    </div>
  </section>




  <main id="main">
      <!--==========================
        About Section
      ============================-->
      <section id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <h2>Quienes Somos</h2>
              <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
                accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
                est ut optio sequi unde.</p>
            </div>
            <div class="col-lg-3">
              <h3>Misión</h3>
              <p>Ser una empresa líder en el mercado, proporcionando a nuestros clientes un servicio de gran valor y calidad siempre a la vanguardia para con ello lograr su preferencia asegurando una relación permanente.</p>
            </div>
            <div class="col-lg-5">
              <h3>Visión</h3>
              <p>Casa García quiere consolidarse, crecer y posicionarse como una organización líder en el negocio; ser reconocida por su calidad de servicios y efectividad de sus esfuerzos orientados a rendir un servicio de calidad asegurando la satisfacción de las necesidades y expectativas de sus clientes en un marco de atención y servicios competitivos buscando en todo momento siempre la excelencia.</p>
            </div>
          </div>
        </div>
      </section>

      <!--==========================
        Speakers Section
      ============================-->
      <section id="speakers" class="wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Catalogo</h2>
            
          </div>

          <div class="row">
            <div class="col-lg-2 col-md-6">  
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="{{ asset('web') }}/img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
                <div class="details">
                  <h3><a href="speaker-details.html">Eventos Gubernamentales</a></h3>
                  
                  <div class="social">
                    <p>Ver Más</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="{{ asset('web') }}/img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
                <div class="details">
                  <h3><a href="speaker-details.html">Eventos Sociales</a></h3>
                                    
                  <div class="social">
                      <p>Ver Más</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6"></div>
            <div class="col-lg-2 col-md-6"></div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="{{ asset('web') }}/img/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
                <div class="details">
                  <h3><a href="speaker-details.html">Eventos Empresariales</a></h3>
                  
                  <div class="social">
                      <p>Ver Más</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="{{ asset('web') }}/img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
                <div class="details">
                  <h3><a href="speaker-details.html">Catering / Mobiliario</a></h3>
                                    
                  <div class="social">
                      <p>Ver Más</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6"></div>
          
          </div>
        </div>

      </section>


      <!--==========================
        Venue Section
      ============================-->
      <section id="venue" class="wow fadeInUp">

        <div class="container-fluid">

          <div class="section-header">
            <h2>Nuestros Eventos</h2>
            
          </div>

          <div class="row no-gutters">
            
            <div class="col-lg-6 venue-gallery">
                <a href="{{ asset('web') }}/img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                <img src="{{ asset('web') }}/img/venue-gallery/1.jpg" alt="" class="img-fluid">
              </a>
            </div>

            <div class="col-lg-6 venue-info">
              <div class="row justify-content-center">
                <div class="col-11 col-lg-8">
                  <h3>Downtown Conference Center, New York</h3>
                  <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="container-fluid venue-gallery-container">
          <div class="row no-gutters">

            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery">
                <a href="{{ asset('web') }}/img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                  <img src="{{ asset('web') }}/img/venue-gallery/1.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery">
                <a href="{{ asset('web') }}/img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                  <img src="{{ asset('web') }}/img/venue-gallery/2.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery">
                <a href="{{ asset('web') }}/img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                  <img src="{{ asset('web') }}/img/venue-gallery/3.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery">
                <a href="{{ asset('web') }}/img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                  <img src="{{ asset('web') }}/img/venue-gallery/4.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery">
                <a href="{{ asset('web') }}/img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                  <img src="{{ asset('web') }}/img/venue-gallery/5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery">
                <a href="{{ asset('web') }}/img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                  <img src="{{ asset('web') }}/img/venue-gallery/6.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery">
                <a href="{{ asset('web') }}/img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                  <img src="{{ asset('web') }}/img/venue-gallery/7.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery">
                <a href="{{ asset('web') }}/img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                  <img src="{{ asset('web') }}/img/venue-gallery/8.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

          </div>

          <div class="row">
              <div class="col-lg venue-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
          </div>
        </div>

      </section>

    
    @include('webLayouts.contact')

      </main>

@endsection
