@extends('../layouts/admin')

@section('title', 'InBost - Categorie')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/blogs">Blog</a></li>
          <li class="breadcrumb-item active">Ajouter Categorie</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <div class="card-body">
            <h5 class="card-title">Ajouter une categorie de Postes</h5>

            <!-- General Form Elements -->
            <form action="{{url('insert-category')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control">
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
                  <input class="form-control" type="file" id="formFile">
                </div>
              </div>

              <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0"></legend>
                <div class="col-sm-10">

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="status">
                    <label class="form-check-label" for="gridCheck1">
                      Status
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked="" name="popular">
                    <label class="form-check-label" for="gridCheck2">
                      Popular
                    </label>
                  </div>

                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
      
    </section>

  </main><!-- End #main -->

@endsection