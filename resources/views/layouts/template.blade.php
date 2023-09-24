<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="keywords">
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicons -->
        <link href="assets/img/fav.png" rel="icon">
        <link href="" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- CSS fichiers -->
        <link href="{{ asset('css/aos.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/glightbox.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/remixicon.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <header id="header" class="header fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        
                <a href="/" class="logo d-flex align-items-center">
                    <img src="{{ asset('img/lg.png')}}" alt="">
                    <span>inBost</span>
                </a>
        
                <nav id="navbar" class="navbar"> 
                    <ul>
                        <li><a class="nav-link scrollto active" href="/">Accueil</a></li>
                        <li><a class="nav-link scrollto " href="/about">A Propos</a></li>
                        <li class="dropdown"><a href="#" class=""><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/service-code.php">Code</a></li>
                                <li><a href="/service-code.php">Data Science</a></li>
                                <li><a href="/service-code.php">Intelligence Artificielle</a></li>
                                <li><a href="/service-code.php">Martketing Digital</a></li>
                                <li><a href="/service-code.php">Réseau</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto " href="/realisation">Réalisations</a></li>
                        <li><a class="nav-link scrollto " href="/blog">Blog</a></li>
                        <li><a class="nav-link scrollto " href="/contact">Contact</a></li>
                        <!-- <li><a class="getstarted scrollto" href="">Prendre rendez-vous</a></li> -->
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
        
            </div>
        </header>
        @yield('content')
        <footer id="footer" class="footer">
                 
            <div class="footer-top">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-5 col-md-12 footer-info">
                            <a href="index.html" class="logo d-flex align-items-center">
                                <span>inBost</span>
                            </a>
                            <p>entreprise spécialisée dans la fourniture de solutions informatiques et réseau innovantes, 
                                offrant des services de pointe pour répondre à tous vos besoins technologiques.</p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
        
                        <div class="col-lg-2 col-6 footer-links">
                            <h4>Liens utiles</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href="/">Accueil</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="about">A Propos</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="realisation">Realisations</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                        </div>
        
                        <div class="col-lg-2 col-6 footer-links">
                            <h4>Nos services</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href="service-code.php">Code</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing Digital</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">IA</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Data Science</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Réseau</a></li>
                            </ul>
                        </div>
        
                        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                            <h4>Contact</h4>
                            <p>
                                Cocody Angré <br>
                                Abidjan,<br>
                                Côte d'Ivoire<br><br>
        
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
        
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="container">
                <div class="copyright">
                     Copyright &copy; | 2023 <!--strong><span>inoBost</span></strong-->. Tous droits réservés
                </div>
            </div>
        </footer>
        
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        
        <!-- JS scripts -->
        <script src="{{ asset('js/purecounter_vanilla.js')}}"></script>
        <script src="{{ asset('js/aos.js')}}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('js/glightbox.min.js')}}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('js/swiper-bundle.min.js')}}"></script>
        <script src="{{ asset('js/main.js')}}"></script>
    </body>
</html>
