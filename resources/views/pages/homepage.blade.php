@extends('layouts.partials.body')
@section('content')
<body>
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
    @include('layouts.partials.desa')
    @include('layouts.partials.agenda')
    @include('layouts.partials.berita') 
</body>
  @include('layouts.partials.footer')
@endsection