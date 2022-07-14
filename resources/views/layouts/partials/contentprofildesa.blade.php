<section class="profil">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>{{$profil->nama_desa}}</h2>
        </div>
      </div>
      <div class="row">
        <div class="picture col">
          <img src="{{asset('upload/' .$profil->foto_desa)}}" alt="" />
        </div>
        <div class="col">
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
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>Visi Desa</h2>
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
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>Misi Desa</h2>
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
          <h2>Struktur Desa</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p>
            Berikut ini merupakan struktur desa periode 2022-2027 yang
            terdapat pada Desa Karehkel, Kecamatan Leuwiliang, Kabupaten
            Bogor.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Foto Pengurus</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Tempat, Tanggal Lahir</th>
                <th scope="col">Pendidikan</th>
                <th scope="col">NIP</th>
              </tr>
            </thead>
            <tbody>
            @foreach($struktur_pemerintahan as $data)
              <tr>
                <th><img src="{{asset('upload/' . $data->foto_pengurus)}}" alt=""></th>
                <td>{{$data->nama}}</td>
                <td>{{$data->jabatan}}</td>
                <td>{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</td>
                <td>{{$data->pendidikan}}</td>
                <td>{{$data->nip}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- Struktur Desa End -->