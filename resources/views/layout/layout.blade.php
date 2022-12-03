<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light mb-3">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Perpustakaan</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" href="/">Home</a>
                  <a class="nav-link" href="/about">About</a>
                </div>
              </div>
            </div>
        </nav>
        @yield('content')
    </div>







    {{-- Modal --}}
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="ModalLabel">Edit Buku</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="POST" action="{{route('store')}}">
            <div class="modal-body">
              @csrf
              <div class="mb-3">
                <label for="id" class="col-form-label">Id</label>
                <input type="text" class="form-control" id="id" name="id">
              </div>
              <div class="mb-3">
                <label for="author" class="col-form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author">
              </div>
              <div class="mb-3">
                <label for="title" class="col-form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
              </div>
              <div class="mb-3">
                <label for="Deskripsi" class="col-form-label">Deskripsi</label>
                <textarea class="form-control" id="Deskripsi" name="deskripsi"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary" id="aksi">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>