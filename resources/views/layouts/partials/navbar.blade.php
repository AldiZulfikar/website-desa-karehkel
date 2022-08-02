<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{asset('/frontend-assets/assets/img/logo-kabupaten.webp')}}" alt="" height="48" />
        <p style="color: #00264d;">DESA KAREHKEL</p>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PROFIL DESA
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{ route('profil-desa') }}">Profil Desa</a></li>
              <li><a class="dropdown-item" href="{{ route('data-desa') }}">Data Desa</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('agenda') }}"">AGENDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('berita') }}">BERITA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">GALERI</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PELAYANAN DESA
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">BUMDes</a></li>
              <li><a class="dropdown-item" href="#">PKK</a></li>
              <li><a class="dropdown-item" href="{{ route('kontak-desa') }}">Kontak Kami</a></li>
            </ul>
          </li>
          {{-- @guest
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
          @endguest --}}
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->