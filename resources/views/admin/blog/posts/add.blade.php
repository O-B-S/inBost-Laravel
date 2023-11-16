@extends('../layouts/admin')

@section('title', 'InBost - Ajouter Poste')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/blogs">Blog</a></li>
          <li class="breadcrumb-item active">Ajouter Poste</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <div class="card-body">
            <h5 class="card-title">Ajouter un Postes</h5>

            <!-- General Form Elements -->
            <form action="{{url('insert-post')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Categories</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="cate_id">
                        <option selected="">Sélectionner une catégorie</option>
                        @foreach ($post as $item)
                          <option value="{{$item->id}}">{{ $item->name}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Titre</label>
                <div class="col-sm-10">
                  <input type="text" name="title" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Auteur</label>
                <div class="col-sm-10">
                  <input type="text" name="author" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control">
                </div>
              </div>
              
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-10">
                  <input class="form-control" type="file" id="formFile" name="image">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
      
    </section>

  </main><!-- End #main -->

@endsection