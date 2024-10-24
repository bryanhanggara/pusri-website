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
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
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
          <section id="hero" class="px-0">
            <div class="container text-left text-white">
              <div class="hero-title" data-aos="fade-down">
                <h1>Hi,</h1>
                <h1>Selamat Datang</h1>
                <p>PT Pupuk Sriwidjaja Palembang (PUSRI) adalah <br>
                    produsen pupuk terkemuka di Indonesia <br> yang berperan penting 
                    dalam mendukung <br> ketahanan
                     pangan nasional dan pembangunan sektor pertanian.
                </p>
                <button class="btn">Selengkapnya</button>
              </div>
            </div>
          </section>

                    {{-- tentang pusri --}}
                    <section class="about-section">
                      <div class="container"  data-aos="fade-down">
                        <div class="row">
                          <!-- Gambar di sebelah kiri -->
                          <div class="col-lg-6 image-container">
                            <img src="{{ asset ('assets/images/tentang pusri.jpg') }}" class="img-fluid" alt="">
                          </div>
                    
                          <!-- Teks di sebelah kanan -->
                          <div class="col-lg-6 text-container"  data-aos="fade-down">
                            <h2 class="section-title">Tentang Pusri</h2>
                            <p class="section-subtitle">
                              PT Pupuk Sriwidjaja Palembang (Pusri) adalah perusahaan yang didirikan sebagai pelopor produsen pupuk urea di Indonesia pada tanggal 24 Desember 1959 di Palembang, Sumatera Selatan, dengan nama PT Pupuk Sriwidjaja (Persero).
                            </p>
                            <p class="section-description">
                              PT Pupuk Sriwidjaja Palembang (Pusri), didirikan pada tahun 1959, adalah pelopor industri pupuk di Indonesia. Dengan visi menjadi produsen pupuk terkemuka di Asia Tenggara, Pusri berkomitmen menyediakan pupuk berkualitas tinggi untuk mendukung ketahanan pangan nasional. Perusahaan memproduksi berbagai jenis pupuk, termasuk Urea, NPK, dan pupuk organik, serta menyediakan layanan konsultasi agronomi.
                            </p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                          </div>
                        </div>
                      </div>
                    </section>
                    {{-- tentang psuri --}}
                    
                    {{-- Visi & Misi --}}
                    <section class="container-fluid bg-primary text-white py-5">
                      <div class="container text-center">
                        <h2 class="fw-bold">Visi & <span class="text-warning">Misi</span> kami</h2>
                        <p class="fst-italic">“Menjadi produsen pupuk terkemuka yang berperan dalam mendukung ketahanan pangan dan pembangunan berkelanjutan di Indonesia”</p>
                      </div>
                  
                      <div class="container mt-5" data-aos="fade-up">
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <h4><span class="text-warning">01.</span> Memberikan Pupuk Berkualitas Tinggi</h4>
                            <p>Menyediakan pupuk yang bermutu tinggi untuk mendukung produktivitas dan keberlanjutan sektor pertanian nasional.</p>
                          </div>
                  
                          <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <h4><span class="text-warning">02.</span> Inovasi dan Pengembangan</h4>
                            <p>Terus melakukan inovasi dalam teknologi produksi dan distribusi pupuk untuk meningkatkan efisiensi dan keberlanjutan.</p>
                          </div>
                  
                          <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <h4><span class="text-warning">03.</span> Komitmen terhadap Lingkungan</h4>
                            <p>Mengelola kegiatan operasional dengan memperhatikan dan menjaga kelestarian lingkungan serta kesehatan masyarakat sekitar.</p>
                          </div>
                  
                          <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <h4><span class="text-warning">04.</span> Inovasi dan Pengembangan</h4>
                            <p>Mendorong peningkatan kapasitas petani melalui program pendidikan, pelatihan, dan penerapan teknologi pertanian yang maju.</p>
                          </div>
                  
                          <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <h4><span class="text-warning">05.</span> Pemberdayaan Petani</h4>
                            <p>Membangun kemitraan yang berkelanjutan dengan semua pemangku kepentingan (stakeholders) dan melaksanakan tanggung jawab sosial perusahaan dengan baik.</p>
                          </div>
                    </section>
                  
                    <section class="container-fluid text-white bg-primary py-4 mt-5">
                      <div class="row text-center">
                        <div class="col-lg-4 col-md-4 col-12">
                          <div class="icon"><i class="bi bi-trophy fs-1"></i></div> <!-- Ikon Trophy -->
                          <h4>200+</h4>
                          <p>lebih dari 200 penghargaan</p>
                        </div>
                    
                        <div class="col-lg-4 col-md-4 col-12">
                          <div class="icon"><i class="bi bi-globe fs-1"></i></div>
                          <h4>AREA</h4>
                          <p>Asia Responsible Enterprise Awards 2023</p>
                        </div>
                    
                        <div class="col-lg-4 col-md-4 col-12">
                          <div class="icon"><i class="bi bi-calendar fs-1"></i></div>
                          <h4>1995</h4>
                          <p>Berdiri sejak tahun 1959</p>
                        </div>
                      </div>
                    </section>
                    
                    {{-- Visi & Misi --}}

                    {{-- direksi --}}
                    <section>
                      <div class="d-flex flex-column justify-content-center align-items-center min-vh-100 pt-5">
                        <h2 class="mb-4">Direksi PT. Pupuk Sriwidjaja</h2>
                        
                        <div class="row ">
                          <!-- Direktur Utama -->
                          <div class="row mb-4">
                            <div class="col-lg-12 col-md-6 mb-4 d-flex justify-content-center" data-aos="flip-down">
                              <div class="card">
                                <div class="card-body text-center">
                                  <img src="{{ asset ('assets/images/direktur-utama.jpg') }}" class="rounded-circle mb-3" alt="Daconi Khotob" width="150">
                                  <h5 class="card-title">Daconi Khotob</h5>
                                  <p class="card-text">Direktur Utama</p>
                                  <a href="#" class="btn btn-primary">More..</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                    
                            <!-- Saifullah Lasindrang - Direktur Keuangan Umum -->
                            <div class="col-lg-4 col-md-6 mb-4  d-flex justify-content-center" data-aos="flip-down">
                              <div class="card">
                                <div class="card-body text-center">
                                  <img src="{{ asset ('assets/images/direktur-keuangan.jpg') }}" class="rounded-circle mb-3" alt="Saifullah Lasindrang" width="150">
                                  <h5 class="card-title">Saifullah Lasindrang</h5>
                                  <p class="card-text">Direktur Keuangan Umum</p>
                                  <a href="#" class="btn btn-primary">More..</a>
                                </div>
                              </div>
                            </div>
                      
                            <!-- Filius Yuliandi - Direktur Operasi & Produksi -->
                            <div class="col-lg-4 col-md-6 mb-4  d-flex justify-content-center" data-aos="flip-down">
                              <div class="card">
                                <div class="card-body text-center">
                                  <img src="{{ asset ('assets/images/direktur-operasi.jpg') }}" class="rounded-circle mb-3" alt="Filius Yuliandi" width="150">
                                  <h5 class="card-title">Filius Yuliandi</h5>
                                  <p class="card-text">Direktur Operasi & Produksi</p>
                                  <a href="#" class="btn btn-primary">More..</a>
                                </div>
                              </div>
                            </div>
                      
                            <!-- Saifullah Lasindrang - Pelaksana Tugas -->
                            <div class="col-lg-4 col-md-6 mb-4  d-flex justify-content-center" data-aos="flip-down">
                              <div class="card">
                                <div class="card-body text-center">
                                  <img src="{{ asset ('assets/images/plt-direktur-manajemen.jpg') }}" class="rounded-circle mb-3" alt="Saifullah Lasindrang" width="150">
                                  <h5 class="card-title">Saifullah Lasindrang</h5>
                                  <p class="card-text">Pelaksana Tugas Direktur Manajemen Resiko</p>
                                  <a href="#" class="btn btn-primary">More..</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>  
                      </div>
                    </section>
                    {{-- direksi --}}

                     {{-- Pengumuman --}}
                     <div class="container py-5" data-aos="fade-right">
                      <div class="row align-items-center">
                        <!-- Left Section -->
                        <div class="col-md-6 text-white bg-primary p-5">
                          <div class="d-flex align-items-center">
                            <i class="bi bi-megaphone-fill fs-1 me-3"></i>
                            <h2 class="text-light">Pengumuman</h2>
                          </div>
                          <p>Pengumuman terbaru PT Pupuk Sriwidjaja</p>
                          <a href="{{route('agenda.list')}}" class="btn btn-light">Semua <i class="bi bi-arrow-right"></i></a>
                        </div>
                  
                        <!-- Right Section -->
                        <div class="col-md-6" data-aos="fade-left">
                          <ul class="timeline">
                            <li>
                              <div class="number">1</div>
                              <div class="details">
                                <h6>Jum'at, 20 Oktober 2024</h6>
                                <p>Libur, Hari Raya Waisak</p>
                              </div>
                            </li>
                            <li>
                              <div class="number">2</div>
                              <div class="details">
                                <h6>Senin, 23 Oktober 2024</h6>
                                <p>Libur, Cuti bersama</p>
                              </div>
                            </li>
                            <li>
                              <div class="number">3</div>
                              <div class="details">
                                <h6>Rabu, 1 November 2024</h6>
                                <p>Hari Batik, memakai pakaian batik bersama</p>
                              </div>
                            </li>
                            <li>
                              <div class="number">4</div>
                              <div class="details">
                                <h6>Senin, 8 November 2024</h6>
                                <p>Ulangtahun perusahaan</p>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    {{-- Pengumuman --}}

                    {{-- Agenda --}}
                    <section class="container my-5">
                      <!-- Title Section -->
                      <h2 class="text-center mb-5">Agenda</h2>
                  
                      <!-- Event Cards -->
                      <div class="row">
                          @forelse ($agendas as $item)
                            <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center" data-aos="zoom-out">
                              <div class="card">
                                  <img src="{{ asset ('storage/'. $item->image) }}" class="card-img-top" alt="Event 1">
                                  <div class="card-body text-center">
                                      <h5 class="card-title">{{ \Str::limit($item->title, 50, '...') }}</h5>
                                      <p class="card-text">{{ \Str::limit($item->description, 80, '...') }}</p>
                                  </div>
                              </div>
                          </div>
                          @empty
                              <p class="text-center">
                                Belom ada agenda
                              </p>
                          @endforelse
                      </div>
                  
                      <!-- News Section -->
                      <div class="d-flex justify-content-between align-items-center my-4">
                          <h3>Berita</h3>
                          <a href="{{route('news.list')}}" class="btn btn-primary">Semua →</a>
                      </div>
                  
                      <!-- News Cards -->
                      <div class="row">
                          @forelse ($news as $item)
                          <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center" data-aos="zoom-in">
                            <div class="card">
                                <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="News 1" >
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->created_at->format('d F Y') }}</h5>
                                    <p class="card-text">{{ \Str::limit($item->title, 50, '...') }}</p>
                                    <a href="{{ route('news.detail', $item->slug) }}" class="btn btn-primary">Selengkapnya →</a>
                                </div>
                            </div>
                        </div>
                          @empty
                              <p class="text-center">
                                Belum ada berita
                              </p>
                          @endforelse
                      </div>
                  </section>
                    {{-- Agenda --}}

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
