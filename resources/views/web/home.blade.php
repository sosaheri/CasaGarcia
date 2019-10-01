@extends('webLayouts.app')




@section('content')

  <!--==========================
    Intro Section
  ============================-->

    

  
  <section id="intro">
      <div class="intro-container wow fadeIn">
{{-- 
          <h1 class="mb-4 pb-0">Nuestros<br><span>Eventos</span></h1>--}}

           <div id="owl-demo-home" class="owl-carousel owl-theme"> 

              <div class="item">
                  <h1 class="mb-4 pb-0">Nuestros<br><span>Eventos Sociales</span></h1>
                  <a href="{{ $medias[0]->url}}" class="venobox play-btn mb-4 about-btn scrollto" data-vbtype="video"
                data-autoplay="true"></a> 
                <br>
               <a href="#about" class="about-btn scrollto">Ver más</a>


              </div>

              <div class="item">
                  <h1 class="mb-4 pb-0">Nuestros<br><span>Eventos Gubernamentales</span></h1>
                <a href="{{ $medias[1]->url}}" class="venobox play-btn mb-4 about-btn scrollto" data-vbtype="video"
                data-autoplay="true"></a>
                <br>
                <a href="#about" class="about-btn scrollto">Ver más</a>
                
              </div>

              <div class="item">
                  <h1 class="mb-4 pb-0">Nuestros<br><span>Eventos Empresariales</span></h1>
                <a href="{{ $medias[2]->url}}" class="venobox play-btn mb-4 about-btn scrollto" data-vbtype="video"
                data-autoplay="true"></a>
                <br>
                <a href="#about" class="about-btn scrollto">Ver más</a>
              </div>
          </div>

          {{-- <a href="#about" class="about-btn scrollto">Ver más</a> --}}
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
              <p>Somos una empresa con más de 31 años de experiencia. Nos adaptamos a todo tipo de necesidades y estamos comprometidos a brindar un servicio de calidad con el objetivo de garantizar el éxito en todo evento.</p>
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
      <section  id="speakers" class="wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Catalogo</h2>
            
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6">  
                <div class="speaker">
                    <img src="{{ asset('web') }}/img/Carpas/Carpa3.jpg" alt="Speaker 2" class="img-fluid">
                    <div class="details">
                      <h3><a href="{{ url('carpas') }}">Carpas</a></h3>
                                        
                      <div class="social">
                          <p>Ver Más</p>
                        </div>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="{{ asset('web') }}/img/MesaCuadrada/MesaCuadrada2.jpg" alt="Speaker 2" class="img-fluid">
                <div class="details">
                  <h3><a href="{{ url('cuadrada') }}">Mesas Cuadrada</a></h3>
                                    
                  <div class="social">
                      <p>Ver Más</p>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="speaker">
                  <img src="{{ asset('web') }}/img/MesaVintage/MesaVintage1.jpg" alt="Speaker 1" class="img-fluid">
                  <div class="details">
                    <h3><a href="{{ url('mesaVintage') }}">Mesas Vintage</a></h3>
                    
                    <div class="social">
                      <p>Ver Más</p>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-lg-4 col-md-6">
                <div class="speaker">
                    <img src="{{ asset('web') }}/img/Periquera/Periquera2.jpg" alt="Speaker 2" class="img-fluid">
                    <div class="details">
                      <h3><a href="{{ url('periquera') }}">Periquera</a></h3>
                                        
                      <div class="social">
                          <p>Ver Más</p>
                        </div>
                    </div>
                  </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="{{ asset('web') }}/img/SalaVintage/SalaVintage2.jpg" alt="Speaker 3" class="img-fluid">
                <div class="details">
                  <h3><a href="{{ url('sala-vintage') }}">Sala Vintage</a></h3>
                  
                  <div class="social">
                      <p>Ver Más</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="{{ asset('web') }}/img/SalaLounge/SalaLounge1.jpg" alt="Speaker 4" class="img-fluid">
                <div class="details">
                  <h3><a href="{{ url('lounge') }}">Sala Lounge</a></h3>
                                    
                  <div class="social">
                      <p>Ver Más</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6"></div>
            <div class="col-lg-4 col-md-6">
                <div class="speaker">
                    <img src="{{ asset('web') }}/img/Bocadillos/Bocadillo1.jpg" alt="Speaker 2" class="img-fluid">
                    <div class="details">
                      <h3><a href="{{ url('bocadillos') }}">Bocadillos</a></h3>
                                        
                      <div class="social">
                          <p>Ver Más</p>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6"></div>
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
                <a href="{{ asset('web') }}/img/eventos/social.jpg" class="venobox" data-gall="venue-gallery">
                <img src="{{ asset('web') }}/img/eventos/social.jpg" alt="" class="img-fluid">
              </a>
            </div>

            <div class="col-lg-6 venue-info">
              <div class="row justify-content-center">
                <div class="col-11 col-lg-8">
                  <h3>Seleccion de nuestros Mejores Eventos</h3>
                  <p>Conoce algunos de nuestros eventos. En Casa García estamos comprometidos a que cumplas el evento de tus sueños. Pregunta por nuestras diferentes opciones.</p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="container-fluid venue-gallery-container">
          <div class="row no-gutters">

            @foreach ($medias as $media)
                
            @if ($media->type != 'video' && ($media->category == 'sociales' || $media->category == 'gubernamental' || $media->category == 'empresarial'))
                           
            
            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery grid">
                  
                <a href="{{ asset('storage') }}/{{ $media->url }}" class="venobox" data-gall="venue-gallery">
                  <img src="{{ asset('storage') }}/{{ $media->url }}" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            @endif
            @endforeach
            

          </div>

          <div class="row">
              <div class="col-lg venue-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3758.1927211118655!2d-99.29562688558619!3d19.61905683977682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2195942d88f73%3A0x2a92d572414e611c!2s1ro%20de%20Mayo%2C%20San%20Ildefonso%2C%2054470%20Villa%20Nicol%C3%A1s%20Romero%2C%20M%C3%A9x.%2C%20M%C3%A9xico!5e0!3m2!1ses-419!2sve!4v1569846529946!5m2!1ses-419!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                </div>
          </div>
        </div>

      </section>

    
    @include('webLayouts.contact')

      </main>

@endsection
