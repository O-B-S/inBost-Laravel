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

          <div class="col-lg-6 ">
            <!-- Success message -->
           @if(Session::has('success'))
           <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
            @endif
            <form action="{{ url('contact.store') }}" method="post" class="php-email-form">
                {!! csrf_field() !!}
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'error' : '' }}" placeholder="Nom" required/>
                  <!-- Error -->
                   @if ($errors->has('name'))
                     <div class="error">
                         {{ $errors->first('name') }}
                     </div>
                   @endif
                </div>

                <div class="col-md-6">
                  <input type="text" name="forename" class="form-control {{ $errors->has('forename') ? 'error' : '' }}" placeholder="Prenoms" required/>
                  <!-- Error -->
                  @if ($errors->has('forename'))
                  <div class="error">
                      {{ $errors->first('forename') }}
                  </div>
                  @endif
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" placeholder="Email" required/>
                  <!-- Error -->
                  @if ($errors->has('email'))
                  <div class="error">
                      {{ $errors->first('email') }}
                  </div>
                  @endif
                </div>

                <div class="col-md-6 ">
                  <input type="text" class="form-control {{ $errors->has('contact') ? 'error' : '' }}" name="contact" placeholder="Contact" required/>
                  <!-- Error -->
                  @if ($errors->has('contact'))
                  <div class="error">
                      {{ $errors->first('contact') }}
                  </div>
                  @endif
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" placeholder="Sujet" required/>
                  <!-- Error -->
                  @if ($errors->has('subject'))
                  <div class="error">
                      {{ $errors->first('subject') }}
                  </div>
                  @endif
                </div>

                <div class="col-md-12">
                  <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" rows="6" placeholder="Message" required/></textarea>
                  <!-- Error -->
                  @if ($errors->has('message'))
                  <div class="error">
                      {{ $errors->first('message') }}
                  </div>
                  @endif
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