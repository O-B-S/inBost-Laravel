@extends('../layouts/admin')

@section('title', 'InBost - Categorie')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/blogs">Blog</a></li>
          <li class="breadcrumb-item active">Modifier Categorie</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <div class="card-body">
            <h5 class="card-title">Modifier Categorie</h5>
            <!-- General Form Elements -->
            <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                  <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" value="{{ $category->description }}" class="form-control">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-10">
                    @if($category->image)
                       <img src="{{ asset('assets/uploads/category/'.$category->image) }}" class="cate-image1" alt="category image">
                    @endif
                    <br>
                  <input class="form-control" type="file" id="formFile" name="image">
                </div>
              </div>

              <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0"></legend>
                <div class="col-sm-10">

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1" value="{{ $category->status  == "1" ? 'checked':'' }}" name="status">
                    <label class="form-check-label" for="gridCheck1">
                      Status
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck2" value="{{ $category->popular  == "1" ? 'checked':'' }}" name="popular">
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