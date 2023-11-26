@extends('layouts.template')

@section('title', 'InBost - Le Blog')

@section('content')
<main id="main">

    <!-- ======= jumbotron ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <h2>Blog</h2>
      </div>
    </section>

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            @foreach ($featured_post as $post)
                
               <article class="entry">

                 <div class="entry-img">
                   <img src="{{asset('assets/uploads/posts/'.$post->image)}}" alt="" class="img-fluid">
                 </div>

                 <h2 class="entry-title">
                   <a href="blog-single.php">{{ $post->title }}</a>
                 </h2>

                 <div class="entry-meta">
                   <ul>
                     <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{$post->author}}</a></li>
                     <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$post->created_at}}</time></a></li>
                     <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                   </ul>
                 </div>

                 <div class="entry-content">
                   <p>
                    {{$post->description}}
                   </p>
                   <div class="read-more">
                     <a href="blog-single.php">Lire la suite</a>
                   </div>
                 </div>

               </article>
            @endforeach

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Recherche</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <a href="view-category">
                <h3 class="sidebar-title">Categories</h3>
              </a>  
              <div class="sidebar-item categories">
                <ul>
                  @foreach ($featured_post2 as $category)
                    @if (($category->name))
                     <li><a href="#">{{ $category->name }}</a></li>
                    @endif
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Postes récents</h3>
              <div class="sidebar-item recent-posts">
                @foreach ($most_recent as $post)
                <div class="post-item clearfix">
                  <img src="{{asset('assets/uploads/posts/'.$post->image)}}" alt="">
                  <h4><a href="blog-single.php">{{ $post->title }}</a></h4>
                  <time datetime="2020-01-01">{{ $post->created_at }}</time>
                </div>
                @endforeach

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div>
        </div>

      </div>
    </section>

  </main>
@endsection