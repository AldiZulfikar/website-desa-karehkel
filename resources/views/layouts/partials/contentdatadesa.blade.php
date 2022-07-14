<section class="struktur">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Data Pendidikan Desa</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Nama Sekolah</th>
                <th scope="col">JUmlah Guru</th>
                <th scope="col">Jumlah Murid</th>
              </tr>
            </thead>
            <tbody>
            @foreach($data_pendidikan as $data_pendidikan)
              <tr>
                <th>{{$data_pendidikan -> nama_sekolah}}</th>
                <td>{{$data_pendidikan -> jumlah_guru}}</td>
                <td>{{$data_pendidikan -> lokasi}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>