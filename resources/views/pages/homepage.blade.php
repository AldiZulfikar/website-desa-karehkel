@extends('layouts.partials.body')
@section('content')

<body>
    <!-- Jumbotron -->
    <header>
        <section class="jumbotron">
          <!-- <img src="assets/img/Home.webp" alt="" class="img-fluid" /> -->
          <div class="welcome">
            <h4 class="d-flex justify-content-center">
              SELAMAT DATANG DI WEBSITE RESMI
            </h4>
            <h1 class="d-flex justify-content-center">DESA KAREHKEL</h1>
          </div>
        </section>
      </header>
      <!-- Jumbotron End -->
    @include('layouts.partials.agenda')
    @include('layouts.partials.berita')
    @include('layouts.partials.footer')

</body>
@endsection