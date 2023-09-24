@extends('layouts.template')

@section('title', 'InBost - Réalisations')

@section('content')
<main id="main">

    <!-- ======= Jumbotron ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <h2>Nos realisations</h2>

        </div>
    </section>


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container aos-init aos-animate" data-aos="fade-up">

            <header class="section-header">
                <!-- <h2>Realisations</h2> -->
                <p>Projets Accomplis</p>
            </header>

            <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Tous</li>
                        <li data-filter=".filter-code">Code</li>
                        <li data-filter=".filter-ia">IA</li>
                        <li data-filter=".filter-md">Marketing Digital</li>
                        <li data-filter=".filter-ds">Data Science</li>
                        <li data-filter=".filter-reso">Reseau</li>
                    </ul>
                </div>
                <hr>
            </div>
            

            <div class="row gy-4 portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 2546.92px;">

                <div class="col-lg-6 col-md-6 portfolio-item filter-code mb-4" style="position: absolute; left: 0px; top: 0px;">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('img/rea3.webp')}}" class="img-fluid" alt=""></div>
                        <h3 class="post-title pt-2">Projet Lorem ipsum dolor sit amet </h3>
                        <span class="post-date">Tue, September 15</span>
                        
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ipsam perferendis itaque
                             debitis recusandae quasi atque eaque deleniti, quis dolorem! Ab 
                            itaque ipsam provident totam rem. Commodi cum quidem dicta.</p>
                        <a href="realisation-single.php" class="readmore stretched-link mt-auto"><span>En savoir plus</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 portfolio-item filter-ds mb-4" style="position: absolute; left: 570px; top: 0px;">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('img/rea6.webp')}}" class="img-fluid" alt=""></div>
                        <h3 class="post-title pt-2">Projet Lorem ipsum dolor sit amet </h3>
                        <span class="post-date">Tue, September 15</span>
                        
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ipsam perferendis itaque
                             debitis recusandae quasi atque eaque deleniti, quis dolorem! Ab 
                            itaque ipsam provident totam rem. Commodi cum quidem dicta.</p>
                        <a href="realisation-single.php" class="readmore stretched-link mt-auto"><span>En savoir plus</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 portfolio-item filter-md" style="position: absolute; left: 0px; top: 654.594px;">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('img/rea8.webp')}}" class="img-fluid" alt=""></div>
                        <h3 class="post-title pt-2">Projet Lorem ipsum dolor sit amet </h3>
                        <span class="post-date">Tue, September 15</span>
                        
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ipsam perferendis itaque
                             debitis recusandae quasi atque eaque deleniti, quis dolorem! Ab 
                            itaque ipsam provident totam rem. Commodi cum quidem dicta.</p>
                        <a href="realisation-single.php" class="readmore stretched-link mt-auto"><span>En savoir plus</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 portfolio-item filter-reso" style="position: absolute; left: 570px; top: 654.594px;">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('img/rea5.webp')}}" class="img-fluid" alt=""></div>
                        <h3 class="post-title pt-2">Projet Lorem ipsum dolor sit amet </h3>
                        <span class="post-date">Tue, September 15</span>
                        
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ipsam perferendis itaque
                             debitis recusandae quasi atque eaque deleniti, quis dolorem! Ab 
                            itaque ipsam provident totam rem. Commodi cum quidem dicta.
                        </p>
                        <a href="realisation-single.php" class="readmore stretched-link mt-auto"><span>En savoir plus</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 portfolio-item filter-md" style="position: absolute; left: 0px; top: 1285.73px;">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('img/rea7.jpg')}}" class="img-fluid" alt=""></div>
                        <h3 class="post-title pt-2">Projet Lorem ipsum dolor sit amet </h3>
                        <span class="post-date">Tue, September 15</span>
                        
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ipsam perferendis itaque
                             debitis recusandae quasi atque eaque deleniti, quis dolorem! Ab 
                            itaque ipsam provident totam rem. Commodi cum quidem dicta.</p>
                        <a href="realisation-single.php" class="readmore stretched-link mt-auto"><span>En savoir plus</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 portfolio-item filter-code" style="position: absolute; left: 570px; top: 1285.73px;">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('img/rea2.webp')}}" class="img-fluid" alt=""></div>
                        <h3 class="post-title pt-2">Projet Lorem ipsum dolor sit amet </h3>
                        <span class="post-date">Tue, September 15</span>
                        
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ipsam perferendis itaque
                             debitis recusandae quasi atque eaque deleniti, quis dolorem! Ab 
                            itaque ipsam provident totam rem. Commodi cum quidem dicta.</p>
                        <a href="realisation-single.php" class="readmore stretched-link mt-auto"><span>En savoir plus</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 portfolio-item filter-ia" style="position: absolute; left: 0px; top: 1916.33px;">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('img/rea1.jpg')}}" class="img-fluid" alt=""></div>
                        <h3 class="post-title pt-2">Projet Lorem ipsum dolor sit amet </h3>
                        <span class="post-date">Tue, September 15</span>
                        
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ipsam perferendis itaque
                             debitis recusandae quasi atque eaque deleniti, quis dolorem! Ab 
                            itaque ipsam provident totam rem. Commodi cum quidem dicta.</p>
                        <a href="realisation-single.php" class="readmore stretched-link mt-auto"><span>En savoir plus</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 portfolio-item filter-code" style="position: absolute; left: 570px; top: 1916.33px;">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('img/rea4.jpg')}}" class="img-fluid" alt=""></div>
                        <h3 class="post-title pt-2">Projet Lorem ipsum dolor sit amet </h3>
                        <span class="post-date">Tue, September 15</span>
                        
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ipsam perferendis itaque
                             debitis recusandae quasi atque eaque deleniti, quis dolorem! Ab 
                            itaque ipsam provident totam rem. Commodi cum quidem dicta.</p>
                        <a href="realisation-single.php" class="readmore stretched-link mt-auto"><span>En savoir plus</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>

    </section>

</main>
@endsection