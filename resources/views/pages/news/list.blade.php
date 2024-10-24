<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('assets/icons/logo-warna.ico') }}">
        <title>Pusri.net</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        </head>

   <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
            <div class="container" data-aos="fade-down">
              <!-- Logo -->
              <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/icons/logo-warna.webp') }}" alt="Pusri Logo" width="60" height="80">
                <span class="navbar-title">PUPUK SRIWIDJAJA PALEMBANG</span>
              </a>
              
              <!-- Navbar Toggle (for mobile view) -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <!-- Navbar Links -->
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Pusri</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Berita & Informasi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          {{-- HEADER --}}
          <section class="hero-search p-5">
            <div class="form-search container">
                <input type="text" name="" id="" placeholder="Cari Agenda Terbaru.." class="form-control">
            </div>
          </section>
          {{-- LIST AGENDA --}}
          <section class="list p-5">
            <h2 class="text-center">
                Temukan Berita Terbaru
            </h2>
            <div class="row mt-5">
              @forelse ($news as $item)
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4 justify-content-center text-center" data-aos="zoom-in">
                  <div class="card">
                      <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="News 1" >
                      <div class="card-body">
                          <h5 class="card-title">{{ $item->created_at->format('d F Y') }}</h5>
                          <p class="card-text">{{ \Str::limit($item->title, 50, '...') }}</p>
                          <a href="{{ route('news.detail', $item->slug) }}" class="btn btn-primary  ">Selengkapnya →</a>
                      </div>
                  </div>
              </div>
              @empty
                  <p class="text-center">
                      Belum ada agenda
                  </p>
              @endforelse
            </div>
          </section>
            {{-- FOOTER --}}
            <footer class="text-center py-4" style="background-color: #f8f9fa;">
            <div class="container">
                <p>Berkontribusi pada keberlanjutan lingkungan dan sosial</p>
                <div class="row">
                    <div class="col-md-4">
                        <p><strong>Contact Us</strong></p>
                        <p>0800-10-080-01</p>
                    </div>
                    <div class="col-md-4">
                        <p>humas@pusri.co.id</p>
                    </div>
                    <div class="col-md-4">
                        <p>@pusripalembang</p>
                    </div>
                </div>
                <p>&copy; 2021 PT Pupuk Sriwidjaja Palembang (Pusri), All Rights Reserved</p>
            </div>
            </footer>
      

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
    </body>

</html>
