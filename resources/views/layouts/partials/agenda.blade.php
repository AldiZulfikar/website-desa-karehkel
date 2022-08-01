<!-- Agenda -->
<div id="agenda" class="agenda">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>AGENDA TERBARU</h2>
            </div>
        </div>
        <div class="schedule mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <img class="rounded-lg-3" src="{{asset('/frontend-assets/assets/img/agenda.jpg')}}" alt="Agenda Desa Karehkel">
                </div>
                <div class="col-lg-6">
                    @foreach($agenda as $data_agenda)
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th class="month pt-3" scope="col">{{\Carbon\Carbon::parse($data_agenda->nama_agenda)->format('d F Y')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <table>
                                <th class="date text-center rounded" scope="col"><i class="fas fa-calendar-check"></i></th>
                                <td class="ps-3">{{$data_agenda->deskripsi}}</td>
                            </table>
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
      <div class="agenda-selengkapnya text-center">
        <a href="/agenda">
          <button type="button" class="btn">Selengkapnya</button>
        </a>
      </div>
    </div>
  </div>
  <!-- Agenda End -->

  <div class="garis text-center container-fluid">
    <img src="{{asset('/frontend-assets/assets/img/logo-kabupaten.webp')}}" alt="Desa Karehkel" height="48" />
        <p>DATA PENDUDUK</p>
          <div class="row text-center mt-4">
            <div class="col-lg-4 col-md-4 col-sm-12 ">
              <i class="fas fa-male"></i>
              <h3>{{$jumlah->lk}}</h3>
              <h3>Laki-Laki</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <i class="fas fa-female"></i>
              <h3>{{$jumlah->pr}}</h3>
              <h3>Perempuan</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <i class="fas fa-users"></i>
              <h3>{{$jumlah->jumlah}}</h3>
              <h3>Total</h3>
            </div>
         </div>
  </div>