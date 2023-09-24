@extends('layouts.template')

@section('title', 'InBost - Service Code')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <h2>Service Code</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Code</h3>
              <h2>Création d'applications personnalisées et de sites web modernes pour répondre aux
                besoins spécifiques de votre entreprise.</h2>
              <strong>Prix : A partir de ... <br> Durée : ...</strong>
              <p>

                Nous sommes fiers de vous offrir une gamme complète de services de développement d'applications et de
                sites web, conçus pour répondre à vos besoins spécifiques et vous aider à atteindre vos objectifs en
                ligne. <br> Que vous ayez besoin d'une application mobile innovante ou d'un site web professionnel, notre équipe
                d'experts en développement est prête à transformer vos idées en réalité numérique.
              </p>

            </div>

          </div>

          <div class="col-lg-6 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('img/code.webp')}}" class="img-fluid" alt="">
          </div>

        </div>

      </div>

    </section>

    <section id="features" class="features">

      <div class="container aos-init aos-animate" data-aos="fade-up">
        <!--  Icons -->
        <div class="row feature-icons aos-init aos-animate" data-aos="fade-up">
          <h3>Le Process</h3>

          <div class="row">

            <div class="col-xl-4 text-center aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
              <img src="{{asset('img/code.webp')}}" class="img-fluid p-4" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box aos-init aos-animate" data-aos="fade-up">
                  <div>
                    <h4>1. Analyse Approfondie </h4>
                    <p> Comprendre vos besoins spécifiques et définir les bases solides pour le développement.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                  <div>
                    <h4>2. Conception Sur Mesure</h4>
                    <p>Nous élaborons une stratégie de développement adaptée à vos exigences, en gardant à l'esprit
                      l'UX et la convivialité.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                  <div>
                    <h4>3. Développement Expert</h4>
                    <p>Transformer les concepts en réalité numérique en utilisant les meilleures pratiques de l'industrie.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                  <div>
                    <h4>4. Tests Rigoureux </h4>
                    <p>Chaque aspect de l'application ou du site est minutieusement testé pour éleminer toute faille.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                  <div>
                    <h4>5. Lancement et Suivi</h4>
                    <p>Une fois le projet déployé, nous assurons, si vous le desirez, et selon un contrat, un suivi continu pour garantir que tout fonctionne comme prévu.</p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div>

      </div>

    </section>

    <section class="bg-light">
      <div class="container text-center aos-init aos-animate" data-aos="fade-up">
        <header class="section-header">
          <p>Prêt à donner vie à votre projet numérique ?</p>
          <br>
          <span class="text-muted">Contactez-nous dès aujourd'hui pour discuter de
            vos besoins et démarrer votre parcours de développement.</span>
        </header>
        <div class="about text-lg-center">
          <a href="contact.php" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Travaillons ensemble</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>

      </div>
    </section>

    <!-- ======= temoignage Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h2>Temoignages des clients</h2>
          <!-- <p>Ce que nos clients disent</p> -->
        </header>

        <div class="testimonials-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper" id="swiper-wrapper-a4cbd61b40047532" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-2232px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 372px;">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                  <h3>Mariam Traoré</h3>
                  <h4>Ceo</h4>
                </div>
              </div>
            </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 372px;">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                  <h3>Laurent Kouame</h3>
                  <h4>Administrateur Reseau</h4>
                </div>
              </div>
            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 372px;">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <!-- <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt=""> -->
                  <h3>Abiola Akanji</h3>
                  <h4>Directeur</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 372px;">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                  <h3>Mariam Traoré</h3>
                  <h4>Ceo</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 372px;">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                  <h3>Laurent Kouame</h3>
                  <h4>Administrateur Reseau</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 372px;">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <!-- <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt=""> -->
                  <h3>Abiola Akanji</h3>
                  <h4>Directeur</h4>
                </div>
              </div>
            </div>

          <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 372px;">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                  <h3>Mariam Traoré</h3>
                  <h4>Ceo</h4>
                </div>
              </div>
            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 372px;">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                  <h3>Laurent Kouame</h3>
                  <h4>Administrateur Reseau</h4>
                </div>
              </div>
            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 372px;">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <!-- <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt=""> -->
                  <h3>Abiola Akanji</h3>
                  <h4>Directeur</h4>
                </div>
              </div>
            </div></div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

      </div>

    </section>

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <!-- <p>Questions frequement posées</p> -->
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Quels types d'applications pouvez-vous développer ?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Nous sommes capables de développer une variété d'applications, qu'il s'agisse d'applications mobiles
                    ou d'applications web.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Combien de temps prendra le développement de mon projet ?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Le temps de développement dépend de la complexité du projet, mais nous nous engageons à
                    respecter des délais raisonnables.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Offrez-vous des services de maintenance après le lancement ?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Oui, nous offrons des services de maintenance et de support pour garantir le bon fonctionnement de
                    votre projet à long terme.
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Comment puis-je obtenir un devis pour mes besoins spécifiques ?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Vous pouvez obtenir un devis personnalisé en nous fournissant des détails sur votre
                    projet. Contactez-nous et nous serons ravis de discuter de vos besoins et de vous
                    fournir une estimation précise.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Comment se passe le règlement ?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Le paiement se passe en 3 temps pour te permettre un échelonnement.
                    Lorsque le cahier des charges est rempli et le devis signé, je demande un acompte de 30% 
                    pour commencer à travailler. 30% au début de l’intégration, puis 40% à la livraison du site 
                    avant mise en ligne.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Combien de temps faut-il pour développer une application ?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Le délai de développement varie en fonction de la complexité du projet. Nous vous
                    fournirons une estimation précise après avoir évalué vos besoins. Notre objectif est
                    de fournir des solutions de haute qualité dans des délais raisonnables.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section>

  </main>
@endsection