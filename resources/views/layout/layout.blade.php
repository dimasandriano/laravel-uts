<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <style>
      #listmenu>a:hover{
        background-color: #0ea5e9;
      }
      #kiri , .bg-blue{
        background-color: #38bdf8;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
      <div class="row min-vh-100">
        <div class="col-2 text-white shadow-sm p-0 pt-1" id="kiri">
          <h3 class="text-center shadow-sm py-2">Side Menu</h3>
          <nav class="nav flex-column nav-pills" id="listmenu">
            <a class="nav-link text-white fs-5" href="/dashboard"><span class="ms-5">Dashboard</span></a>
            <a class="nav-link text-white fs-5" href="/buku/create"><span class="ms-5">Tambah Data</span></a>
            <a class="nav-link text-white fs-5" href="/"><span class="ms-5">List Data</span></a>
            <a class="nav-link text-white fs-5" href="/about"><span class="ms-5">About</span></a>
          </nav>
        </div>
        <div class="col-10" id="kanan">
          <nav class="navbar navbar-expand-lg bg-blue mb-3">
              <div class="container-fluid">
                <a href="" class="text-white">
                  <svg id="hamburger" href="#" width="25" height="25" class="me-2 pe-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                </a>
                <a class="navbar-brand text-white" href="#">Perpustakaan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                </div>
              </div>
          </nav>
          <div class="mx-3">
            @yield('content')
          </div>
        </div>
      </div>
      {{-- footer --}}
      <footer class="py-3 my-4 border-top">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/dashboard" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              Perpustakaan
            </a>
            <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Kelompok 3</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">Aji</li>
            <li class="ms-3">Bima</li>
            <li class="ms-3">Dimas</li>
            <li class="ms-3">Dony</li>
          </ul>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    {{-- Sidemenu --}}
    <script type="text/javascript">
      //Dom
      const colKiri = document.getElementById('kiri')
      const colKanan = document.getElementById('kanan')
      const hamburger = document.getElementById('hamburger')

      hamburger.addEventListener('click', function(e){
        e.preventDefault()
        colKanan.classList.toggle('col-12')
        colKanan.classList.toggle('col-10')
        colKiri.classList.toggle('col-2')
        colKiri.classList.toggle('d-none')
      })

    </script>
  </body>
</html>