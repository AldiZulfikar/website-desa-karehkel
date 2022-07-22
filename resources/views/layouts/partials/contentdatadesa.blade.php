<div class="data-section">  
  <div class="row">
    <div class="data-tabs">
      <span class="tab-item active" data-target=".geografi">Geografi</span>
      <span class="tab-item" data-target=".kependudukan">Kependudukan</span>
      <span class="tab-item" data-target=".pendidikan">Pendidikan</span>
      <span class="tab-item" data-target=".kesehatan">Kesehatan</span>
      <span class="tab-item" data-target=".peribadatan">Peribadatan</span>
    </div>
  </div>
  <section class="struktur geografi tab-content active">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h3>Letak Geografi Desa Karehkel</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 maps text-center">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31710.26355576858!2d106.61715536824669!3d-6.54906714684211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69dc00d5e2f791%3A0xc668c0ec1c0a2903!2sKarehkel%2C%20Kec.%20Leuwiliang%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1657591953001!5m2!1sid!2sid"
            width="100%"
            height="300"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p>Desa Karehkel luas wilayahnya 420 Ha, terdiri dari 13 RW, 42 RT dan 5
            Dusun. Jarak dari Desa Karehkel ke ibu kota Kecamatan Leuiliang 5 Km, jarak ke
            ibu kota Kabupaten Bogor 60 Km, jarak ke ibu kota Provinsi di Bandung
            150 Km dan jarak ke ibu kota Negara di Jakarta 120 Km.
            Dengan batas-batas wilayah sebagai berikut:</p>
        </div>
      </div>
      <div class="row">
        <div class="col table-responsive">
          <table class="table table-striped table-hover table-bordered border-primary">
            <thead>
              <tr>
                <th scope="col">Batas</th>
                <th scope="col">Desa</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Kabupaten</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Sebelah Selatan</th>
                <td>Leuwiliang</td>
                <td>Leuwiliang</td>
                <td>Bogor</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <section class="struktur kependudukan tab-content">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h3>Data Kependudukan Desa</h3>
        </div>
      </div>
      <div class="row">
        <div class="col table-responsive">
          <table class="table table-striped table-hover table-bordered border-primary">
            <thead>
              <tr>
                <th scope="col" rowspan="2">Tahun</th>
                <th scope="col" colspan="3">Jumlah Penduduk</th>
                <th scope="col" rowspan="2">Jumlah KK</th>
                <th scope="col" rowspan="2">Laju Pertumbuhan</th>
              </tr>
              <tr>
                <th scope="col">Pria</th>
                <th scope="col">Wanita</th>
                <th scope="col">Jumlah</th>
              </tr>
            </thead>
            <tbody class="data-table">
              <tr>
                <th>2000</th>
                <td>20</td>
                <td>10</td>
                <td>30</td>
                <td>26</td>
                <td>40%</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p>Proyeksi Jumlah penduduk di Desa Karehkel Tahun 2020 berjumlah Jiwa,
          Tahun 2021 berjumlah 13.512 jiwa</p>
      </div>
    </div>
  </section>
  <section class="struktur pendidikan tab-content">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h3>Data Pendidikan Desa</h3>
          </div>
        </div>
        <div class="row">
          <div class="col table-responsive">
            <table class="table table-striped table-hover table-bordered border-primary">
              <thead>
                <tr>
                  <th scope="col">Nama Sekolah</th>
                  <th scope="col">Jumlah Guru</th>
                  <th scope="col">Jumlah Murid</th>
                </tr>
              </thead>
              <tbody class="data-table">
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
          <p>Pendidikan merupakan salah satu modal dasar pembangunan, sehingga
            Pendidikan adalah sebuah investasi (modal) dimasa yang akan datang. Di
            Desa Karehkel Jumlah Guru untuk Tahun 2021 berjumlah 146 Orang.
          </p>
        </div>
      </div>
    </section>
    <section class="struktur kesehatan tab-content">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h3>Data Tenaga Kesehatan Desa</h3>
          </div>
        </div>
        <div class="row">
          <div class="col table-responsive">
            <table class="table table-striped table-hover table-bordered border-primary">
              <thead>
                <tr>
                  <th colspan="2" scope="col">Tenaga Kesehatan</th>
                  <th scope="col">Jumlah</th>
                </tr>
              </thead>
              <tbody class="data-table">
                <tr>
                  <th>Medis</th>
                  <td>Dokter Umum</td>
                  <td>20</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <section class="struktur peribadatan tab-content">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h3>Tempat Peribadatan Desa</h3>
          </div>
        </div>
        <div class="row">
          <div class="col table-responsive">
            <table class="table table-striped table-hover table-bordered border-primary">
              <thead>
                <tr>
                  <th scope="col">Tempat Ibadah</th>
                  <th scope="col">Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Masjid</th>
                  <td>20</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>