<div class="data-section">  
  <div class="container">
    <div class="row">
      <div class="data-tabs">
        <span class="tab-item active" data-target=".geografi">Sejarah</span>
        <span class="tab-item" data-target=".kependudukan">POKJA</span>
        <span class="tab-item" data-target=".pendidikan">Galeri PKK</span>
        <span class="tab-item" data-target=".kesehatan">Struktur</span>
      </div>
    </div>
  </div>
  <section class="pkk geografi tab-content active">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12">
          <h2>Sejarah PKK</h2>
        </div>
      </div>
      <div class="row">
        <div class="picture col-lg-4">
          <img src="{{asset('/frontend-assets/assets/img/pkk.jpg')}}" class="w-100 mb-5" alt="" />
        </div>
        <div class="col-lg-8">
          <p>
            PKK yang merupakan gerakan pembangunan masyarakat bermula dari Seminar Home Economic di Bogor pada tahun 1957, yang menghasilkan rumusan 10 Segi Kehidupan Keluarga. Kemudian ditindak lanjuti oleh Kementrian Pendidikan, Pengajaran dan Kebudayaan pada tahun 1961 yang menetapkan 10 Segi Kehidupan Keluarga sebagai Kurikulum Pendidikan Kesejahteraan Keluarga yang diajarkan di sekolah-sekolah oleh Pendidikan Masyarakat (PENMAS).
          </p>
          <p>
            Pada bulan Mei tahun 1962 di Desa Salaman Kabupaten Magelang, Provinsi Jawa Tengah, didirikan Pusat Latihan Pendidikan Masyarakat (PLPM) untuk menyebarluaskan 10 Segi Kehidupan Keluarga. Sekitar tahun 1967 kehidupan sebagian masyarakat Jawa Tengah sangat menyedihkan, khususnya di daerah Dieng Kabupaten Wonosobo diantara mereka banyak yang menderita Honger Odeem (HO). Kenyataan ini menyentuh hati Ibu Isriati Moenadi, sebagai Isteri Gubernur Jawa Tengah saat itu. Beliau merasa bertanggung jawab terhadap kesejahteraan masyarakatnya dan berinisiatif membentuk PKK di Jawa Tengah, dari tingkat Provinsi sampai ketingkat Desa dan Kelurahan, dengan susunan pengurus terdiri dari unsur-unsur Isteri Pimpinan Daerah, Tokoh-tokoh masyarakat, perempuan dan laki-laki untuk melaksanakan 10 Segi Pokok PKK secara intensif. <br>
          </p>
        </div>
        <div class="col-lg-12">
          <p>
            Dari keberhasilan PKK di Jawa Tengah, maka Presiden RI menganjurkan kepada Menteri Dalam Negeri agar PKK dilaksanakan di daerah-daerah seluruh Indonesia. Pada tanggal 27 Desember 1972 Menteri Dalam Negeri mengirimkan Surat Kawat Nomor SUS 3/6/12 tangal 27 Desember 1972 kepada Gubernur Jawa Tengah untuk merubah nama Pendidikan Kesejahteraan Keluarga menjadi Pembinaan Kesejahteraan Keluarga, tembusan disampaikan  kepada Gubernur seluruh Indonesia.
          </p>
          <p>
            Pada tahun 1993 dalam RAKERNAS IV PKK telah memutuskan untuk ”MENETAPKAN TANGGAL 27 DESEMBER SEBAGAI HARI KESATUAN GERAK PKK”, yang diperingati setiap tahun. Pada bulan Desember 1997 diselenggarakan Jambore Nasional Kader Posyandu yang pertama diikuti oleh Kader-kader PKK dari 27 provinsi, kabupaten/kota, dan desa/kelurahan.
          </p>
          <p>
            Pada tahun 2013, diterbitkan Peraturan Menteri Dalam Negeri No 1 Tahun 2013 tentang Pemberdayaan Masyarakat melalui Gerakan Pemberdayaan dan Kesejahteraan Keluarga antara lain mengatur sebutan Dewan Penyantun menjadi Pembina sehingga Menteri Dalam Negeri menjadi Ketua Pembina TP PKK Pusat, Gubernur Ketua Pembina TP PKK Provinsi sampai dengan Kepala Desa/Lurah sebagai Ketua Pembina di wilayahnya masing-masing.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="pkk kependudukan tab-content">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12">
          <h2>POKJA PKK Desa Karehkel</h2>
        </div>
      </div>
      <div class="row">
        <div class="col table-responsive">
          <table class="table table-hover table-bordered border-primary">
            <thead>
              <tr>
                <th>Kelompok</th>
                <th>Program</th>
                <th>Kegiatan</th>
              </tr>
            </thead>
            <tbody>
            @foreach($pokja as $pokja)
              <tr>
                <th>{{$pokja -> kelompok}}</th>
                <td>{{$pokja -> program}}</td>
                <td>{{$pokja -> kegiatan}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <section class="pkk pendidikan tab-content">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12">
          <h2>Galeri PKK Desa Karehkel</h2>
        </div>
      </div>
      <div class="row g-5">
        @foreach ($galeri as $data)
        <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
          <div class="galeri-item bg-light rounded overflow-hidden shadow-lg">
              <div class="galeri-img position-relative overflow-hidden">
                  <img class="img-fluid w-100" src="{{$data->gambar_galeri ? asset('upload/' .$data->gambar_galeri) : asset('/frontend-assets/assets/img/desa.png')}}" alt="" style="width: 150px; height: 200px;"/>
                  <div class="galeri-social">
                      <a
                          class="btn btn-lg btn-primary btn-lg-square rounded"
                          href="{{$data->ig}}"
                          ><i class="fab fa-instagram fw-normal"></i
                      ></a>
                      <a
                          class="btn btn-lg btn-primary btn-lg-square rounded"
                          href="{{$data->youtube}}"
                          ><i class="fas fa-dumpster"></i></a>
                  </div>
              </div>
              <div class="text-center py-4">
                  <h6 class="text-dark">{{$data->judul}}</h6>
                  <p class="text-dark text-center text-uppercase m-0">{{$data->pemilik}}</p>
              </div>
          </div>
      </div>
      @endforeach
    </div>
    </div>
  </section>
  <section class="pkk kesehatan tab-content">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12">
          <h2>Struktur PKK Desa Karehkel</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="text-center">
            Berikut ini merupakan struktur pengurus PKK yang
            terdapat pada Desa Karehkel, Kecamatan Leuwiliang, Kabupaten
            Bogor.
          </p>
        </div>
      </div>
      <div class="row">
        @foreach($struktur as $data)
        <div class="col-lg-2 mb-5">
          <div class="pengurus col-lg-10 wow slideInUp">
            <div class="rounded-3 shadow-lg overflow-hidden">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{$data->foto_pengurus ? asset('upload/' . $data->foto_pengurus) : asset('/frontend-assets/assets/img/user-foto.jpg')}}" alt="" />
              </div>
              <div class="text-center py-4">
                <h4 class="text-dark">{{$data->nama}}</h4>
                <h6 class="text-uppercase text-center m-0">{{$data->jabatan}}</h6>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- Profil End -->
</div>
  