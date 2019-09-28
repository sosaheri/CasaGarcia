    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Planea, organiza y crea tu evento con nosotros</h2>
          <p>Somos una empresa con más de 31 años de experiencia. Nos adaptamos a todo tipo de necesidades y estamos comprometidos a brindar un servicio de calidad con el objetivo de garantizar el éxito en todo evento.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Dirección</h3>
              <address>Av. 1ro de mayo No.6, Hidalgo, Nicolás Romero, CP 54434, Estado de México</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Teléfono</h3>
              <p><a href="tel:5558235268">5558235268</a></p>
              <p><a href="tel:5558212603">5558212603</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">contacto@casagarcia.mx</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Su mensaje ha sido enviado. Gracias!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor indique su nombre" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="fecha" id="fecha" placeholder="Fecha del Evento" data-rule="required" data-msg="Por favor indique fecha del evento" />
                    <div class="validation"></div>
                  </div>
              <div class="form-group col-md-6">
                <input type="text" name="lugar" class="form-control" id="lugar" placeholder="Lugar del Evento" data-rule="required" data-msg="Por favor indique el lugar" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" data-rule="required" data-msg="Por favor indique su teléfono" />
                    <div class="validation"></div>
                  </div>
              <div class="form-group col-md-6">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" data-rule="email" data-msg="Por favor indique el correo" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Detalle el tipo de servicio que desea" placeholder="Platícanos más sobre tu evento"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Enviar mensaje</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->
