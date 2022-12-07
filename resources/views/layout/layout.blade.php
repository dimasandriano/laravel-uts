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
      <div class="row">
        <div class="d-none min-vh-100 bg-info text-white shadow-sm" id="kiri">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque recusandae sed consectetur in labore at ea ipsa, assumenda reprehenderit, nisi explicabo doloremque sit voluptatibus dolore culpa quasi. Ipsa, ea ratione.
        </div>
        <div class="col-12" id="kanan">
          <nav class="navbar navbar-expand-lg bg-light mb-3">
              <div class="container-fluid">
                <a href="" class="text-black">
                  <svg id="hamburger" href="#" width="25" height="25" class="me-2 pe-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                </a>
                <a class="navbar-brand" href="#">Perpustakaan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="/buku">Buku</a>
                  </div>
                </div>
              </div>
          </nav>
          @yield('content')
        </div>
      </div>
    </div>
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