@extends('../layouts/admin')

@section('title', 'InBost - Categorie')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/blogs">Blog</a></li>
          <li class="breadcrumb-item active">Categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste des Categories de postes</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($category as $item)
                     <tr>
                       <th scope="row">{{ $item-> id }}</th>
                       <td class="col-sm-3">{{ $item-> name }}</td>
                       <td>{{ $item-> description }}</td>
                       <td>
                          <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="cate-image" alt="Image">
                        </td>
                       <td>
                          <button class="btn btn-primary">Modifier</button>
                          <button class="btn btn-danger">Supprimer</button>
                       </td>
                     </tr>                      
                  @endforeach
                    
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection