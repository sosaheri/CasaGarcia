    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

        <div class="container">
  
          <div class="section-header">
            <h2>Preguntas frecuentes </h2>
          </div>
  
          <div class="row justify-content-center">
            <div class="col-lg-9">
                <ul id="faq-list">
  
                    
                    
                    @php
                        $i= 1;
                    @endphp
 
                    @foreach ($faqs as $faq)

                  <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq{{$i}}">{{ $faq->question}} <i class="fa fa-minus-circle"></i></a>
                      <div id="faq{{$i}}" class="collapse" data-parent="#faq-list">
                        <p>
                            {{ $faq->answer}}
                        </p>
                      </div>
                    </li>

                        @php
                          $i++;
                      @endphp
                      
                  @endforeach
                  
        
        
                  
        
                </ul>
            </div>
          </div>
  
        </div>
  
      </section>