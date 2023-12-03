@extends('layouts.template')

@section('title', 'InBost - Category posts')

@section('content')
<section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="/">Accueil</a></li>
        <li><a href="/blog">Blog</a></li>
        <li>Categorie {{$category->name}}</li>
      </ol>

    </div>
  </section><!-- End Breadcrumbs -->

<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container aos-init" data-aos="fade-up">

        <header class="section-header">
            <h2>{{$category->name}}</h2>
            <p>postes liés à la categorie {{$category->name}}</p>
          </header>

      <div class="row">
       @foreach($post as $post)
        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="{{asset('assets/uploads/posts/'.$post->image)}}" class="img-fluid" alt=""></div>
            <span class="post-date">{{$post->created_at}}</span>
            <h3 class="post-title">{{ $post->title }}</h3>
            <a href="#" class="readmore stretched-link mt-auto"><span>Lire la suite</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
       @endforeach
      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->

@endsection