<section class="bumdes">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12">
          <h2>BUMDes Ceria</h2>
        </div>
      </div>
      <div class="row">
        <div class="picture col-lg-7">
          <img src="{{asset('/frontend-assets/assets/img/bumdes.jpg')}}" alt="" />
        </div>
        <div class="col-lg-5">
          <p>
            BUMDes adalah badan hukum yang didirikan oleh desa dan/atau bersama desa-desa guna mengelola usaha, memanfaatkan aset, mengembangkan investasi dan produktivitas, menyediakan jasa pelayanan, dan/atau menyediakan jenis usaha lainnya untuk sebesar-besarnya kesejahteraan masyarakat Desa. 
            BUMDes bersama dapat menjalankan usaha di bidang ekonomi dan/atau pelayanan umum sesuai dengan ketentuan peraturan perundang-undangan. 
            Dalam peraturan tentang BUMDes ini, dijelaskan bahwa terdapat dua jenis BUMDes yang terdiri atas: <br>
            1. BUMDesa <br>
            2. BUMDesa bersama
          </p>
        </div>
      </div> 
    </div>
  </section>

  <div class="garis-bumdes text-center container-fluid">
      <h3>Pelayanan</h3>
      <span>Pelayanan dari BUMDes Ceria</span>
      <div class="row content-pelayanan">
        <div class="col-lg-3 mb-5"></div>
        <div class="col-lg-3 mb-5">
          <div class="pengurus col-lg-10 wow slideInUp bg-light rounded shadow-lg">
            <div class="rounded-3 shadow-lg overflow-hidden">
              <div class="position-relative overflow-hidden">
                <i class="fas fa-wifi"></i>
              </div>
              <div class="text-center py-4">
                <h4>Internet Desa</h4>
                <p class="m-0">Penanggung Jawab : Ahmad</p>
                <p class="m-0 p-0 cp"><i class="fab fa-whatsapp"></i> <span>+62 812-9769-9963</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-5">
          <div class="pengurus col-lg-10 wow slideInUp bg-light rounded shadow-lg">
            <div class="rounded-3 shadow-lg overflow-hidden">
              <div class="position-relative overflow-hidden">
                <i class="fas fa-money-check"></i>
              </div>
              <div class="text-center py-4">
                <h4>Pajak Desa</h4>
                <p class="m-0">Penanggung Jawab : Ahmad</p>
                <p class="m-0 p-0 cp"><i class="fab fa-whatsapp"></i> <span>+62 812-9769-9963</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

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
        @foreach($struktur as $data)
        <div class="col-lg-2 mb-5">
          <div class="pengurus col-lg-10 wow slideInUp">
            <div class="rounded-3 shadow-lg overflow-hidden">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{$data->foto_pengurus ? asset('upload/' . $data->foto_pengurus) : asset('/frontend-assets/assets/img/user-foto.jpg')}}" alt="" />
              </div>
              <div class="text-center py-4">
                <h4 class="text-dark">{{$data->nama}}</h4>
                <h6 class="text-uppercase m-0">{{$data->jabatan}}</h6> 
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- Struktur Desa End -->