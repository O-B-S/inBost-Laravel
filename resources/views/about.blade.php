@extends('layouts.template')

@section('title', 'InBost - À Propos')

@section('content')
<main id="main">
    <!-- ======= jumbotron ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <h2>À Propos</h2>
        </div>
    </section>

    <!-- ======= Section About  ======= -->
    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="row feture-tabs aos-init aos-animate" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h3>Notre Essence en Une Phrase : Passé Inspirant, Présent Dynamique, Futur Engagé.</h3>

                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li>
                                <a class="nav-link active" data-bs-toggle="pill" href="#tab1" aria-selected="true" role="tab">Qui sommes-nous</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab2" aria-selected="false" tabindex="-1" role="tab">Notre histoire</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab3" aria-selected="false" tabindex="-1" role="tab">Vision</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab4" aria-selected="false" tabindex="-1" role="tab">Mission</a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="tab1" role="tabpanel">

                                <p>
                                    <strong>inBost</strong> une équipe dynamique et passionnée spécialisée dans le développement
                                    d'applications et la gestion de réseaux.

                                    Nous travaillons avec des marques de tous les secteurs, y compris l'alimentation
                                    et les boissons, la santé et le style de vie, le sport et la technologie,
                                    les produits pharmaceutiques et les loisirs etc...
                                </p>
                                <p>
                                    Forts de notre expertise technique et de notre expérience approfondie,
                                    nous proposons des solutions personnalisées et innovantes pour répondre aux
                                    besoins spécifiques de nos clients.
                                </p><p>
                                    Nous sommes fiers de notre engagement envers l'excellence, l'innovation et la satisfaction
                                    du client. Notre équipe talentueuse et diversifiée est prête à relever les défis
                                    technologiques les plus complexes pour vous aider à atteindre vos objectifs.
                                </p>
                                <p>
                                    Faites-nous confiance pour faire progresser votre entreprise dans le monde numérique.
                                    Nous sommes <strong>inBost</strong>, votre partenaire technologique de confiance.
                                </p>
                                <p>
                                    Pour en savoir plus sur nos services ou pour discuter de votre prochain projet,
                                    <a href="contact">contactez-nous</a> dès aujourd'hui.
                                </p>

                            </div>

                            <div class="tab-pane fade show" id="tab2" role="tabpanel">
                                <!-- <h3>Notre Histoire</h3> -->

                                <h4 class="pt-2 ps-2">Le Commencement</h4>
                                <p class="pt-2 ps-2">
                                    L'histoire de <strong>inBost</strong> est une aventure passionnante qui a débuté avec une
                                    vision audacieuse et la détermination de faire une différence dans le monde de la technologie. Fondée par un groupe d'experts en technologie,
                                    notre entreprise a toujours été animée par la volonté de repousser les limites de l'innovation
                                    et de créer un impact positif dans le monde numérique en constante évolution.
                                </p>

                                <h4 class="pt-2 ps-2">L'Inspiration</h4>
                                <p class="pt-2 ps-2">
                                    L'inspiration derrière <strong>inBost</strong> est née de la conviction que la technologie peut améliorer nos
                                    vies de manière significative et que nous pouvons contribuer à façonner l'avenir numérique. Nous avons rassemblé
                                    une équipe de professionnels passionnés et talentueux, chacun apportant son expertise unique dans les domaines
                                    du développement d'applications, de la data science, de l'intelligence artificielle, du marketing digital et
                                    des réseaux.
                                </p>

                                <h4 class="pt-2 ps-2">L'Aventure Commence</h4>
                                <p class="pt-2 ps-2">
                                    Notre passion, notre expertise et notre engagement envers l'excellence sont inébranlables. Nous sommes prêts
                                    à relever les défis technologiques les
                                    plus passionnants et à travailler en étroite collaboration avec nos clients pour atteindre leurs
                                    objectifs.
                                </p>

                                <p class="pt-2 ps-2">
                                    L'histoire de <strong>inBost</strong> ne fait que commencer, et nous sommes impatients
                                    de la construire avec vous.
                                </p>

                            </div>

                            <div class="tab-pane fade show" id="tab3" role="tabpanel">
                                <h3>Vision</h3>
                                <p>
                                    Chez <strong>inBost</strong>, notre vision est de devenir le catalyseur de
                                    l'innovation technologique, en repoussant les frontières de ce qui est
                                    possible et en créant un impact positif durable dans le monde numérique.
                                </p>
                                <p>
                                    Nous aspirons à façonner un avenir où la technologie est au service de
                                    l'humanité, où les applications simplifient la vie quotidienne, où la data
                                    science révèle des insights puissants, où l'intelligence artificielle
                                    améliore la productivité et la prise de décision, où le marketing digital
                                    renforce la visibilité des entreprises et où les réseaux garantissent la
                                    connectivité et la sécurité en tout temps.
                                    Notre vision est guidée par les principes suivants :
                                </p>
                                <ul>
                                    <li class="fw-bold">Innovation sans limites :</li>
                                    Nous nous engageons à rester à la pointe des avancées
                                    technologiques, en repoussant constamment les limites de ce qui est possible.
                                    Nous croyons que l'innovation est la clé de la croissance et de la prospérité.
                                    <br><br>

                                    <li class="fw-bold">Impact positif : </li>
                                    Nous croyons que la technologie peut apporter des changements
                                    positifs dans la société et dans le monde des affaires. Nous nous efforçons
                                    de créer des solutions qui améliorent la vie des individus, renforcent la
                                    compétitivité des entreprises et contribuent à un avenir plus durable. <br><br>

                                    <li class="fw-bold">Collaboration et partenariat : </li>
                                    Nous valorisons les partenariats solides et la
                                    collaboration avec nos clients, nos partenaires et notre équipe. Ensemble,
                                    nous pouvons atteindre des sommets technologiques et réaliser des projets
                                    exceptionnels. <br><br>

                                    <li class="fw-bold">Excellence sans compromis : </li>
                                    Nous visons l'excellence dans tout ce que nous
                                    faisons, de la conception de nos applications à la gestion de nos réseaux.
                                    Nous sommes déterminés à offrir des solutions de la plus haute qualité à nos
                                    clients.
                                </ul>

                                <p>
                                    Chez <strong>inBost</strong>, notre vision est notre boussole, nous guidant dans notre quête d'innovation
                                    technologique et d'excellence. Nous sommes impatients de créer un avenir numérique brillant
                                    et de partager cette vision avec nos clients et partenaires pour les années à venir.
                                </p>

                                

                            </div>

                            <div class="tab-pane fade show" id="tab4" role="tabpanel">
                                <h3>Mission</h3>
                                <p class="pt-2 ps-2"> Notre mission est claire : apporter des solutions technologiques innovantes
                                    qui résolvent des problèmes réels pour nos clients. Que ce soit en développant des applications
                                    intuitives, en analysant des données pour dévoiler des insights cruciaux, en intégrant
                                    l'intelligence artificielle pour automatiser des processus, en créant des stratégies
                                    de marketing digital percutantes ou en assurant la fiabilité des réseaux, nous nous
                                    engageons à offrir des services de haute qualité qui dépassent les attentes.
                                </p>
                                <br>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4">
                        <img src="{{asset('img/features-2.png')}}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container aos-init" data-aos="fade-up">

            <header class="section-header">
                <h2>Valeurs</h2>
                <p>Nos Engagements Fondamentaux</p>
            </header>

            <div class="row">

                <div class="col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <img src="{{asset('img/values-1.png')}}" class="img-fluid" alt="">
                        <h3>Collaboration</h3>
                        <p>Travailler en étroite collaboration avec nos clients pour comprendre leurs besoins uniques
                            et développer des solutions sur mesure qui répondent à leurs défis spécifiques.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0 aos-init" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <img src="{{asset('img/values-2.png')}}" class="img-fluid" alt="">
                        <h3>Expertise technique</h3>
                        <p>Fournir une expertise pointue dans les domaines de l'informatique et des
                            réseaux pour résoudre les problèmes complexes et offrir des solutions optimales.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0 aos-init" data-aos="fade-up" data-aos-delay="600">
                    <div class="box">
                        <img src="{{asset('img/values-3.png')}}" class="img-fluid" alt="">
                        <h3>Transparence</h3>
                        <p>Établir une communication ouverte et transparente avec nos clients
                            concernant les solutions proposées, les coûts et les délais.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container aos-init" data-aos="fade-up">

            <header class="section-header">
                <h2>Atouts</h2>
                <p>Nos Points Forts Technologiques</p>
            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="{{asset('img/features.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6 aos-init" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Expertise Technique Avancée</h3>
                            </div>
                        </div>

                        <div class="col-md-6 aos-init" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Solutions Personnalisées</h3>
                            </div>
                        </div>

                        <div class="col-md-6 aos-init" data-aos="zoom-out" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Optimisation des Performances</h3>
                            </div>
                        </div>

                        <div class="col-md-6 aos-init" data-aos="zoom-out" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Gestion de Projet Expert</h3>
                            </div>
                        </div>

                        <div class="col-md-6 aos-init" data-aos="zoom-out" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Satisfaction Client Prioritaire</h3>
                            </div>
                        </div>

                        <div class="col-md-6 aos-init" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Support Réactif</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- ======= Services Section ======= -->
    <section id="features" class="features">

        <div class="container aos-init" data-aos="fade-up">

            <header class="section-header">
                <h2>Services</h2>
                <p>Nos Services Informatiques et Réseaux</p>
            </header>

            <div class="row">

                <div class="row feature-icons aos-init" data-aos="fade-up">

                    <div class="row">

                        <div class="col-xl-4 text-center aos-init" data-aos="fade-right" data-aos-delay="100">
                            <img src="{{asset('img/features-3.png')}}" class="img-fluid p-4" alt="">
                        </div>

                        <div class="col-xl-8 d-flex content">
                            <div class="row align-self-center gy-4">

                                <div class="col-md-6 icon-box aos-init" data-aos="fade-up">
                                    <i class="ri-line-chart-line"></i>
                                    <div>
                                        <a href="service-code.php">
                                            <h4>Data Science</h4>
                                        </a>
                                        <p>Transformer des données en informations exploitables</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box aos-init" data-aos="fade-up" data-aos-delay="100">
                                    <i class="ri-code-s-line"></i>
                                    <div>
                                        <a href="service-code.php">
                                            <h4>Code</h4>
                                        </a>
                                        <p>Conception et le Développement d'applications mobiles et web sur mesure</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box aos-init" data-aos="fade-up" data-aos-delay="200">
                                    <i class="ri-megaphone-line"></i>
                                    <div>
                                        <a href="service-code.php">
                                            <h4>Marketing Digital</h4>
                                        </a>
                                        <p>Optimiser votre présence en ligne, générer des leads de qualité et augmenter votre visibilité</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box aos-init" data-aos="fade-up" data-aos-delay="300">
                                    <i class="ri-robot-line"></i>
                                    <div>
                                        <a href="service-code.php">
                                            <h4>Intelligence Artificielle</h4>
                                        </a>
                                        <p>Des solutions d'IA innovantes pour automatiser des tâches, améliorer la prise de décision 
                                            et renforcer la productivité de votre entreprise</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box aos-init" data-aos="fade-up" data-aos-delay="500">
                                    <i class="ri-radar-line"></i>
                                    <div>
                                        <a href="service-code.php">
                                            <h4>Réseau</h4>
                                        </a>
                                        <p>Conception, mise en œuvre et gestion de réseaux robustes et fiables</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

<div class="container aos-init" data-aos="fade-up">

    <header class="section-header">
        <h2>Temoignages</h2>
        <p>Ce que nos clients disent</p>
    </header>

    <div class="testimonials-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events aos-init" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper" id="swiper-wrapper-19e20b5ed7b953bd" aria-live="off" style="transition-duration: 600ms; transform: translate3d(-2232px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 372px;">
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
            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 372px;">
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
            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 372px;">
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

            <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 372px;">
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

            <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 372px;">
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

            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 372px;">
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

            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 372px;">
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

            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 372px;">
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

        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 372px;">
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
            </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 372px;">
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
            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 372px;">
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
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

</div>

</section>
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container aos-init" data-aos="fade-up">

            <header class="section-header">
                <h2>Equipe</h2>
                <p>Notre équipe dévouée</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{asset('img/sec.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Ismael Seck</h4>
                            <span>Chief Executive Officer</span>
                            <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{asset('img/jnt.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Jean-Noel Tokpa</h4>
                            <span>Product Manager</span>
                            <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{asset('img/chr.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Desiré Okobé</h4>
                            <span>CTO</span>
                            <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{asset('img/oko.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Christian Braffo</h4>
                            <span>Web Développer</span>
                            <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

        <div class="container aos-init" data-aos="fade-up">
  
          <header class="section-header">
            <h2>Nos Clients</h2>
            <p>Ils nous ont fait confiance</p>
          </header>
  
          <div class="clients-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="swiper-wrapper align-items-center" id="swiper-wrapper-d977590eadfb5788" aria-live="off" style="transform: translate3d(-2472px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="3 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="2"><img src="{{asset('img/clients/client-3.png')}}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="4 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="3"><img src="{{asset('img/clients/client-4.png')}}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="5 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="4"><img src="{{asset('img/clients/client-5.png')}}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="6 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="5"><img src="{{asset('img/clients/client-6.png')}}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" role="group" aria-label="7 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="6"><img src="{{asset('img/clients/client-7.png')}}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" role="group" aria-label="8 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="7"><img src="{{asset('img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" role="group" aria-label="1 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="0"><img src="{{asset('img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" role="group" aria-label="2 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="1"><img src="{{asset('img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" role="group" aria-label="3 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="2"><img src="{{asset('img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" role="group" aria-label="4 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="3"><img src="{{asset('img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" role="group" aria-label="5 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="4"><img src="{{asset('img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
              <div class="swiper-slide swiper-slide-prev" role="group" aria-label="6 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="5"><img src="{{asset('img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
              <div class="swiper-slide swiper-slide-active" role="group" aria-label="7 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="6"><img src="{{asset('img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
              <div class="swiper-slide swiper-slide-next" role="group" aria-label="8 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="7"><img src="{{asset('img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="1 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="0"><img src="{{asset('img/clients/client-1.png')}}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="2 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="1"><img src="{{asset('img/clients/client-2.png')}}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="3 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="2"><img src="{{asset('img/clients/client-3.png')}}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="4 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="3"><img src="{{asset('img/clients/client-4.png')}}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="5 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="4"><img src="{{asset('img/clients/client-5.png')}}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="6 / 8" style="width: 86px; margin-right: 120px;" data-swiper-slide-index="5"><img src="{{asset('img/clients/client-6.png')}}" class="img-fluid" alt=""></div></div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 7" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
  
      </section><!-- End Clients Section -->

</main>
@endsection