<!-- Berita -->
<section id="berita" class="berita">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Berita</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($berita as $data_berita)
            <div class="col-md-4 mb-4">
                <div class="card p-3 rounded-3 shadow-lg">
                    <img
                    src="{{$data_berita->gambar_berita ? asset('upload/' .$data_berita->gambar_berita) : asset('/frontend-assets/assets/img/berita.png')}}"
                    class="card-img-top"
                    alt="..."
                    />
                    <div class="card-body">
                    <a href="/baca-berita/{{$data_berita->slug}}">
                        <h5 class="card-title">
                            {{$data_berita->judul}}
                        </h5>
                    </a>
                    <h6 class="date">{{\Carbon\Carbon::parse($data_berita->created_at)->format('d F Y')}}</h6>
                    <p class="card-text">
                        {!!Str::limit($data_berita->konten, 94)!!}
                    </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
  </section>
  <!-- Berita End -->