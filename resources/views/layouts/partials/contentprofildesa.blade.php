<section class="profil">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12">
          <h2>Tentang {{$profil->nama_desa}}</h2>
        </div>
      </div>
      <div class="row">
        <div class="picture col-lg-5">
          <img src="{{$profil->foto_desa ? asset('upload/' .$profil->foto_desa) : asset('/frontend-assets/assets/img/desa.png')}}" alt="" />
        </div>
        <div class="col-lg-7">
          <p>
            {{$profil->sejarah}}
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Profil End -->

  <!-- Visi -->
  <section class="visi">
    <div class="container visi-content rounded-3 border shadow-lg">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>VISI</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p>
            {{$profil->visi}}
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Visi End -->

  <!-- Misi -->
  <section class="misi">
    <div class="container misi-content rounded-3 border shadow-lg">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>MISI</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p>
            {{$profil->misi}}
        </div>
      </div>
    </div>
  </section>
  <!-- Misi End -->

  <!-- Struktur Desa -->
  <section class="struktur">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>STRUKTUR PENGURUS</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="text-center">
            Berikut ini merupakan struktur pengurus yang
            terdapat pada Desa Karehkel, Kecamatan Leuwiliang, Kabupaten
            Bogor.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 mb-5">
          @foreach($struktur_pemerintahan as $data)
          <div class="pengurus col-lg-3 wow slideInUp">
            <div class="rounded-3 shadow-lg overflow-hidden">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{$data->foto_pengurus ? asset('upload/' . $data->foto_pengurus) : asset('/frontend-assets/assets/img/user-foto.jpg')}}" alt="" />
              </div>
              <div class="text-center py-4">
                <h4 class="text-dark">{{$data->nama}}</h4>
                <h6 class="text-uppercase m-0">{{$data->jabatan}}</h6>
                <p class="m-0">{{$data->tempat_lahir}}, {{\Carbon\Carbon::parse($data->tanggal_lahir)->format('d F Y')}}</p>
                <p class="m-0">{{$data->pendidikan}}</p>
                <p class="m-0">{{$data->nip}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- Struktur Desa End -->