<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{asset('/frontend-assets/assets/img/logo-kabupaten.webp')}}" alt="" height="48" />
        <p>DESA KAREHKEL</p>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('/') }}"
              >BERANDA</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('profil-desa') }}">PROFIL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('agenda') }}"">AGENDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('berita') }}">BERITA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('data-desa') }}">DATA DESA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('kontak-desa') }}">KONTAK KAMI</a>
          </li>
          @guest
          @if (Route::has('login'))
              <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">MASUK</a></li>
          @endif
          @else
          <li class="nav-item"><a class="nav-link" href="{{route('admin-dashboard')}}">DASHBOARD ADMIN</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('KELUAR') }}
              </a>
          </li class="nav-item">
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
              </form>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
  <section class="jumbotron">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="{{asset('/frontend-assets/assets/img/Home.webp')}}" class="w-100" alt="...">
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3 welcome" style="max-width: 900px">
              <h4 class="d-flex justify-content-center">
                Selamat Datang di Website Resmi
              </h4>
              <h1 class="d-flex justify-content-center">
                Desa Karehkel
              </h1>
              <a href="/profil-desa">
                <button type="button" class="btn">Lihat Desa!</button>
              </a>
            </div>
          </div> 
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="{{asset('/frontend-assets/assets/img/Home.webp')}}" class="w-100" alt="...">
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3 welcome" style="max-width: 900px">
              <h4 class="d-flex justify-content-center">
                Selamat Datang di Website Resmi
              </h4>
              <h1 class="d-flex justify-content-center">
                Desa Karehkel
              </h1>
              <a href="/profil-desa">
                <button type="button" class="btn">Lihat Desa!</button>
              </a>
            </div>
          </div> 
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <marquee behavior="alternet" direction="">
    Selamat Datang di Website Resmi Desa Karehkel | 
    Karehkel adalah sebuah desa di kecamatan Leuwiliang, Kabupaten Bogor, Jawa Barat, Indonesia

  </marquee>