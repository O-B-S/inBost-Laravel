@extends('../layouts/admin')

@section('title', 'InBost - Postes')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/blogs">Blog</a></li>
          <li class="breadcrumb-item active">Postes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste des postes</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($post as $item)
                     <tr>
                       <th scope="row">{{ $item->id }}</th>
                       <td class="col-sm-3">{{ $item->category->name }}</td>
                       <td class="col-sm-3">{{ $item->title }}</td>
                       <td class="col-sm-3">{{ $item->author }}</td>
                       <td class="col-sm-3">{{ $item->description }}</td>
                       <td>
                          <img src="{{ asset('assets/uploads/posts/'.$item->image) }}" class="cate-image" alt="Image">
                        </td>
                       <td>
                          <a href="{{ url('edit-post/'.$item->id)}}" class="btn btn-primary btn-sm">Modifier</a>
                          <a href="{{ url('delete-post/'.$item->id)}}" class="btn btn-danger btn-sm">Supprimer</a>
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