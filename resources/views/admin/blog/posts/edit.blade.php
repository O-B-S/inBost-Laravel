@extends('../layouts/admin')

@section('title', 'InBost - Poste')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/blogs">Blog</a></li>
          <li class="breadcrumb-item active">Modifier Poste</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <div class="card-body">
            <h5 class="card-title">Modifier Poste</h5>
            <!-- General Form Elements -->
            <form action="{{url('update-post/'.$post->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Categories</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="cate_id">
                        <option value="">{{ $post->category->name }}</option>
                    </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Titre</label>
                <div class="col-sm-10">
                  <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Auteur</label>
                <div class="col-sm-10">
                  <input type="text" name="author" class="form-control" value="{{ $post->author }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" value="{{ $post->description }}">
                </div>
              </div>
              
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-10">
                    @if($post->image)
                       <img src="{{ asset('assets/uploads/posts/'.$post->image) }}" class="cate-image1" alt="category image">
                    @endif
                    <br>
                  <input class="form-control" type="file" id="formFile" name="image">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
      
    </section>

  </main><!-- End #main -->

@endsection