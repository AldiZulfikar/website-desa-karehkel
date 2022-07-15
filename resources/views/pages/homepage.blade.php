@extends('layouts.partials.body')
@section('content')

<body>
    <header class="container-fluid position-relative p-0">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="active">
              <img src="{{asset('/frontend-assets/assets/img/Home.webp')}}" class="w-100" alt="...">
              <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px">
                  <h4 class="text-white text-uppercase mb-3 animated slideInDown">
                    Selamat Datang di Websites Resmi
                  </h4>
                  <h1 class="display-1 text-uppercase text-warning mb-md-4 animated zoomIn">
                    Desa Karehkel
                  </h1>
                  <a
                    href="/kontak-desa"
                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                    >Hubungi Kami</a
                  >
                </div>
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
    </header>
    @include('layouts.partials.agenda')
    @include('layouts.partials.berita')
    @include('layouts.partials.footer')

</body>
@endsection