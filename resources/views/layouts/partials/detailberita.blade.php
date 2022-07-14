<section class="profil">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>{{$berita->judul}}</h2>
        </div>
      </div>
      <div class="row">
        <div class="picture">
          <img src="{{ asset('upload/' . $berita->gambar_berita) }}" alt="" />
        </div>
        <div class="">
          <p>
            {{$berita->konten}}
          </p>
          <small><i class="far fa-user"></i> {{ $berita->users->name }}</small> <br>
          <small> <i class="far fa-calendar-alt"></i> {{\Carbon\Carbon::parse($berita->created_at)->format('d F Y')}}</small>
        </div>
      </div>
    </div>
  </section>

