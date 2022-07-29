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