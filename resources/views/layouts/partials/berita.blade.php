<!-- Berita -->
<section id="berita" class="berita">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>BERITA TERKINI</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($berita as $data_berita)
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg p-3 rounded-3">
                    <img
                    src="{{$data_berita -> gambar_berita ? asset('upload/' .$data_berita->gambar_berita) : asset('/frontend-assets/assets/img/berita.png')}}"
                    class="card-img-top"
                    alt="..."
                    />
                    <div class="card-body">
                    <a href="/baca-berita/{{$data_berita->slug}}">
                        <h5 class="card-title">
                            {{$data_berita->judul}}
                        </h5>
                    </a>
                    <h6 class="date"><i class="far fa-user"></i> {{ $data_berita->users->name }} &nbsp;<i class="far fa-calendar-alt"></i> {{\Carbon\Carbon::parse($data_berita->created_at)->format('d F Y')}}</h6>
                    <p class="card-text">
                        {!!Str::limit($data_berita->konten, 94)!!}
                    </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      <div class="berita-selengkapnya text-center mt-4">
        <a href="/berita">
          <button type="button" class="btn">Selengkapnya</button>
        </a>
      </div>
    </div>
  </section>
  <!-- Berita End -->