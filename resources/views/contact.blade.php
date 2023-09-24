@extends('layouts.template')

@section('title', 'InBost - Nous Contacter')

@section('content')
<main id="main">
    <!-- ======= jumbotron ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <h2>Contactez-nous</h2>
      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row gy-4">
          <br><br>
          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <!-- <i class="bi bi-geo-alt"></i> -->
                  <h3>Côte d'Ivoire, Abidjan</h3>
                  <p>Numéro : +225 0123456789<br>Email: infos.inobost.ci@gmail.com</p>

                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <!-- <i class="bi bi-geo-alt"></i> -->
                  <h3>Senegal, Dakar</h3>
                  <p>Numéro : +225 0123456789<br>Email: infos.inobost.sen@gmail.com</p>


                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <!-- <i class="bi bi-geo-alt"></i> -->
                  <h3>France, Paris</h3>
                  <p>Numéro : +225 0123456789<br>Email: infos.inobost.fr@gmail.com</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-box">
                  <!-- <i class="bi bi-clock"></i> -->
                  <h3>Horaire</h3>
                  <p>Lundi - Vendredi<br>8:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="{{ url('contact') }}" method="post" class="php-email-form">
                {!! csrf_field() !!}
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nom" required="">
                </div>

                <div class="col-md-6">
                  <input type="text" name="forename" class="form-control" placeholder="Prenoms" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="text" class="form-control" name="contact" placeholder="Contact" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Sujet" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                

                <div class="col-md-12 text-center">
                  <!-- <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div> -->
                  <button type="submit">Envoyer</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main>
@endsection