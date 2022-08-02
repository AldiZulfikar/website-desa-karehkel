@extends('layouts.partials.body')
@section('content')
<body>
  <div class="container-fluid jumbotron">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1" style="color: #fcc201">Desa karehkel</h1>
        <p class="lead">Kehidupan desa yang semarak dengan berbagai keragaman, dari warisan budaya yang menyenangkan. Selamat datang!</p>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="{{asset('/frontend-assets/assets/img/desahero.avif')}}" alt="" width="720">
      </div>
    </div>
  </div>
  <marquee behavior="alternet" direction="">
    Selamat Datang di Website Resmi Desa Karehkel | 
    Karehkel adalah sebuah desa di kecamatan Leuwiliang, Kabupaten Bogor, Jawa Barat, Indonesia

  </marquee>
    @include('layouts.partials.desa')
    @include('layouts.partials.agenda')
    @include('layouts.partials.galeri')
    @include('layouts.partials.berita')
    @include('layouts.partials.hubungikami') 
</body>
@include('layouts.partials.footer')
@endsection