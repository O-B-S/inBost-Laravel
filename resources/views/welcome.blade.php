@extends('layouts.template')

@section('title', 'InBost - Accueil')

@section('content')
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Nous proposons des solutions modernes pour développer votre entreprise</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Des solutions innovantes pour dynamiser votre entreprise</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#services" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Nos services</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('img/hero-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Bienvenu à inBost</h3>
              <h2>Votre partenaire de confiance pour les services numériques.</h2>
              <p>
                <strong>inBost</strong> une entreprise passionnée et spécialisée dans la fourniture de solutions
                informatiques et réseau de pointe. Notre objectif est d'aider nos clients à exploiter
                pleinement le potentiel de la technologie pour atteindre leurs objectifs commerciaux.
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>En savoir plus</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('img/about.jpg')}}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>
    <!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container aos-init" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>Nos Services Informatiques et Réseaux</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <i class="ri-code-s-line icon"></i>
              <h3>Code</h3>
              <p>Notre équipe de développeurs expérimentés est dédiée à créer des applications
                sur mesure pour répondre aux besoins spécifiques de votre entreprise.</p>
              <a href="service-code.php" class="read-more"><span>En savoir plus</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-megaphone-line icon"></i>
              <h3>Marketing Digital</h3>
              <p>Notre expertise en marketing digital vous permettra d'atteindre votre public cible de
                manière efficace. Des campagnes de publicité en ligne, stratégies de médias sociaux etc...</p>
              <a href="service-code.php" class="read-more"><span>En savoir plus</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-robot-line icon"></i>
              <h3>Intelligence Artificielle</h3>
              <p>Plongez dans l'avenir de la technologie avec nos solutions d'intelligence artificielle. Nous exploitons les capacités
                de l'IA pour améliorer l'efficacité et la productivité de votre entreprise.</p>
              <a href="service-code.php" class="read-more"><span>En savoir plus</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="row mt-4 justify-content-center">
            <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="500">
              <div class="service-box red">
                <i class="ri-line-chart-line icon"></i>
                <h3>Data Science</h3>
                <p>Les données sont une mine d'informations précieuses pour chaque entreprise. Notre équipe vous aidera à interpréter vos données afin de prendre des décisions éclairées.</p>
                <a href="service-code.php" class="read-more"><span>En savoir plus</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="600">
              <div class="service-box purple">
                <i class="ri-radar-line icon"></i>
                <h3>Reseau</h3>
                <p>Notre expertise en réseautage garantit que votre entreprise reste connectée et sécurisée.
                  Nous concevons, mettons en œuvre et gérons des infrastructures réseau fiables...</p>
                <a href="service-code.php" class="read-more"><span>En savoir plus</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>




        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= realisations Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container aos-init" data-aos="fade-up">

        <header class="section-header">
          <h2>Realisations</h2>
          <p>Projets Accomplis</p>
        </header>

        <div class="row gy-4 portfolio-container aos-init" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 523.016px;">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 0px;">
            <div class="portfolio-wrap">
              <a href="realisation-single.php">
                <img src="assets/img/rea3.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Projet 2</h4>
                  <p>Code</p>
                </div>
              </a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 380px; top: 0px;">
            <div class="portfolio-wrap">
              <a href="realisation-single.php">
                <img src="assets/img/rea6.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Projet 3</h4>
                  <p>Data Science</p>
                </div>
              </a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 760px; top: 0px;">
            <div class="portfolio-wrap">
              <a href="realisation-single.php">
                <img src="assets/img/rea8.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Projet 4</h4>
                  <p>Marketing Digital</p>
                </div>
              </a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 0px; top: 261.328px;">
            <div class="portfolio-wrap">
              <a href="realisation-single.php">
                <img src="assets/img/rea5.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Projet 5</h4>
                  <p>Reseau</p>
                </div>
              </a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 380px; top: 261.328px;">
            <div class="portfolio-wrap">
              <a href="realisation-single.php">
                <img src="assets/img/rea7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Projet 1</h4>
                  <p>Marketing digital</p>
                </div>
              </a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 760px; top: 261.328px;">
            <div class="portfolio-wrap">
              <a href="realisation-single.php">
                <img src="assets/img/rea1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Projet 6</h4>
                  <p>IA</p>
                </div>
              </a>

            </div>
          </div>

        </div>
        <div class="about section-header mt-5">
          <a href="realisation.php" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Voir plus</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>


      </div>

    </section><!-- End realiation Section -->

    <!-- ======= temoignages Section ======= -->
    <section id="testimonials" class="testimonials">

    <div class="container aos-init" data-aos="fade-up">

        <header class="section-header">
            <h2>Temoignages</h2>
            <p>Ce que nos clients disent</p>
        </header>

        <div class="testimonials-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events aos-init" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper" id="swiper-wrapper-d26034c5e7e22d33" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-3082.67px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="3 / 5" style="width: 345.333px; margin-right: 40px;" data-swiper-slide-index="2">
                    <div class="testimonial-item">
                        <div class="stars">
                            ---
                            <!-- <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> -->
                        </div>
                        <p>
                            Le développement d'applications a été essentiel pour notre entreprise, et cette entreprise a su répondre à nos besoins avec expertise. Leurs solutions personnalisées ont dépassé nos attentes.
                        </p>
                        <div class="profile mt-auto">
                            <!-- <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt=""> -->
                            <h3>Abiola Akanji</h3>
                            <h4>Directeur</h4>
                        </div>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="4 / 5" style="width: 345.333px; margin-right: 40px;" data-swiper-slide-index="3">
                    <div class="testimonial-item">
                        <div class="stars">
                            ---
                            <!-- <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> -->
                        </div>
                        <p>
                            Les applications développées par cette entreprise ont permis à notre équipe marketing de gagner en efficacité. Elles sont conviviales et nous permettent de mieux interagir avec nos clients.
                        </p>
                        <div class="profile mt-auto">
                            <!-- <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt=""> -->
                            <h3>Harissa bello</h3>
                            <h4>Responsable Marketing</h4>
                        </div>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="5 / 5" style="width: 345.333px; margin-right: 40px;" data-swiper-slide-index="4">
                    <div class="testimonial-item">
                        <div class="stars">
                            ---
                            <!-- <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> -->
                        </div>
                        <p>
                            En tant qu'entrepreneur, je sais à quel point une application bien conçue peut faire la différence. Cette entreprise a développé une application qui a contribué au succès de mon entreprise.
                        </p>
                        <div class="profile mt-auto">
                            <!-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt=""> -->
                            <h3>Andrea Kouakou</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-duplicate-active" role="group" aria-label="1 / 5" style="width: 345.333px; margin-right: 40px;" data-swiper-slide-index="0">
                    <div class="testimonial-item">
                        <div class="stars">
                            ---
                            <!-- <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> -->
                        </div>
                        <p>
                            Nous avons investi dans le développement d'applications pour améliorer notre efficacité et notre service client. Cette entreprise a réalisé un travail exceptionnel en créant des applications innovantes qui ont transformé notre entreprise.
                        </p>
                        <div class="profile mt-auto">
                            <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                            <h3>Mariam Traoré</h3>
                            <h4>Ceo</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-duplicate-next" role="group" aria-label="2 / 5" style="width: 345.333px; margin-right: 40px;" data-swiper-slide-index="1">
                    <div class="testimonial-item">
                        <div class="stars">
                            ---
                            <!-- <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> -->
                        </div>
                        <p>
                            L'équipe de développement d'applications de cette entreprise a été un partenaire clé pour nous. Leurs applications sont robustes, fiables et s'intègrent parfaitement à notre infrastructure réseau. C'est un atout précieux pour notre entreprise.
                        </p>
                        <div class="profile mt-auto">
                            <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                            <h3>Laurent Kouame</h3>
                            <h4>Administrateur Reseau</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" role="group" aria-label="3 / 5" style="width: 345.333px; margin-right: 40px;" data-swiper-slide-index="2">
                    <div class="testimonial-item">
                        <div class="stars">
                            ---
                            <!-- <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> -->
                        </div>
                        <p>
                            Le développement d'applications a été essentiel pour notre entreprise, et cette entreprise a su répondre à nos besoins avec expertise. Leurs solutions personnalisées ont dépassé nos attentes.
                        </p>
                        <div class="profile mt-auto">
                            <!-- <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt=""> -->
                            <h3>Abiola Akanji</h3>
                            <h4>Directeur</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" role="group" aria-label="4 / 5" style="width: 345.333px; margin-right: 40px;" data-swiper-slide-index="3">
                    <div class="testimonial-item">
                        <div class="stars">
                            ---
                            <!-- <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> -->
                        </div>
                        <p>
                            Les applications développées par cette entreprise ont permis à notre équipe marketing de gagner en efficacité. Elles sont conviviales et nous permettent de mieux interagir avec nos clients.
                        </p>
                        <div class="profile mt-auto">
                            <!-- <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt=""> -->
                            <h3>Harissa bello</h3>
                            <h4>Responsable Marketing</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="5 / 5" style="width: 345.333px; margin-right: 40px;" data-swiper-slide-index="4">
                    <div class="testimonial-item">
                        <div class="stars">
                            ---
                            <!-- <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> -->
                        </div>
                        <p>
                            En tant qu'entrepreneur, je sais à quel point une application bien conçue peut faire la différence. Cette entreprise a développé une application qui a contribué au succès de mon entreprise.
                        </p>
                        <div class="profile mt-auto">
                            <!-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt=""> -->
                            <h3>Andrea Kouakou</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div>
                </div>

            <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" role="group" aria-label="1 / 5" style="width: 345.333px; margin-right: 40px;" data-swiper-slide-index="0">
                    <div class="testimonial-item">
                        <div class="stars">
                            ---
                            <!-- <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> -->
                        </div>
                        <p>
                            Nous avons investi dans le développement d'applications pour améliorer notre efficacité et notre service client. Cette entreprise a réalisé un travail exceptionnel en créant des applications innovantes qui ont transformé notre entreprise.
                        </p>
                        <div class="profile mt-auto">
                            <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                            <h3>Mariam Traoré</h3>
                            <h4>Ceo</h4>
                        </div>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-next" role="group" aria-label="2 / 5" style="width: 345.333px; margin-right: 40px;" data-swiper-slide-index="1">
                    <div class="testimonial-item">
                        <div class="stars">
                            ---
                            <!-- <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> -->
                        </div>
                        <p>
                            L'équipe de développement d'applications de cette entreprise a été un partenaire clé pour nous. Leurs applications sont robustes, fiables et s'intègrent parfaitement à notre infrastructure réseau. C'est un atout précieux pour notre entreprise.
                        </p>
                        <div class="profile mt-auto">
                            <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                            <h3>Laurent Kouame</h3>
                            <h4>Administrateur Reseau</h4>
                        </div>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="3 / 5" style="width: 345.333px; margin-right: 40px;" data-swiper-slide-index="2">
                    <div class="testimonial-item">
                        <div class="stars">
                            ---
                            <!-- <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> -->
                        </div>
                        <p>
                            Le développement d'applications a été essentiel pour notre entreprise, et cette entreprise a su répondre à nos besoins avec expertise. Leurs solutions personnalisées ont dépassé nos attentes.
                        </p>
                        <div class="profile mt-auto">
                            <!-- <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt=""> -->
                            <h3>Abiola Akanji</h3>
                            <h4>Directeur</h4>
                        </div>
                    </div>
                </div></div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

    </div>

</section>    <!-- End temoignage Section -->



    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container aos-init" data-aos="fade-up">

        <header class="section-header">
          <h2>Nos Clients</h2>
          <p>Ils nous ont fait confiance</p>
        </header>

        <div class="clients-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
          <div class="swiper-wrapper align-items-center" id="swiper-wrapper-d977590eadfb5788" aria-live="off" style="transform: translate3d(-2472px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="3 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="2"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="4 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="3"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="5 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="4"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="6 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="5"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" role="group" aria-label="7 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="6"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" role="group" aria-label="8 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="7"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" role="group" aria-label="1 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="0"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" role="group" aria-label="2 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="1"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" role="group" aria-label="3 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="2"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" role="group" aria-label="4 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="3"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" role="group" aria-label="5 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="4"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="6 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="5"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-active" role="group" aria-label="7 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="6"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-next" role="group" aria-label="8 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="7"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="1 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="0"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="2 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="1"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="3 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="2"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="4 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="3"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="5 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="4"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="6 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="5"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div></div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 7" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
      </div>

    </section><!-- End Clients Section -->

    <!-- ======= Blog Posts Recent  Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container aos-init" data-aos="fade-up">

        <header class="section-header">
          <h2>Blog</h2>
          <p>Posts récents de notre blog</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Tue, September 15</span>
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
              <a href="blog-single.php" class="readmore stretched-link mt-auto"><span>Lire la suite</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
              <a href="blog-single.php" class="readmore stretched-link mt-auto"><span>Lire la suite</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Mon, July 11</span>
              <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
              <a href="blog-single.php" class="readmore stretched-link mt-auto"><span>Lire la suite</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->



  </main>

@endsection