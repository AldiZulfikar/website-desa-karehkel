  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" ">
        <img src="{{ asset('/frontend-assets/assets/img/logo-kabupaten.webp') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Desa Karehkel</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('/')) ? 'active bg-gradient-primary' : '' }} " href="{{route('/')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-globe-americas"></i>
            </div>
            <span class="nav-link-text ms-1">Lihat Websites</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-dashboard')) ? 'active bg-gradient-primary' : '' }} " href="{{route('admin-dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-agenda')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-agenda')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Agenda</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-profil-desa')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-profil-desa')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-hotel"></i>
            </div>
            <span class="nav-link-text ms-1">Profil Desa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-geografi')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-geografi')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-atlas"></i>
            </div>
            <span class="nav-link-text ms-1">Letak Geografi Desa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-pendidikan-desa')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-pendidikan-desa')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-graduation-cap"></i>
            </div>
            <span class="nav-link-text ms-1">Data Pendidikan Desa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-tenaga-kesehatan')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-tenaga-kesehatan')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-briefcase-medical"></i>
            </div>
            <span class="nav-link-text ms-1">Data Kesehatan Desa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-penduduk')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-penduduk')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-user-friends"></i>
            </div>
            <span class="nav-link-text ms-1">Data Penduduk Desa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-peribadatan')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-peribadatan')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-mosque"></i>
            </div>
            <span class="nav-link-text ms-1">Data Peribadatan Desa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-pemerintahan-desa')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-pemerintahan-desa')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-sitemap"></i>
            </div>
            <span class="nav-link-text ms-1">Struktur Pemerintahan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-berita-desa')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-berita-desa')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-newspaper"></i>
            </div>
            <span class="nav-link-text ms-1">Berita Desa</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>