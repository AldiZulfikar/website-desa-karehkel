<!-- Agenda -->
<div id="agenda" class="agenda">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Agenda Desa</h2>
            </div>
        </div>
        <div class="schedule mb-5">
            <div class="row">
                @foreach($agenda as $data_agenda)
                <div class="col-md-6">
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
                </div>
                @endforeach
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

  <div class="garis text-center">
    <img src="{{asset('/frontend-assets/assets/img/logo-kabupaten.webp')}}" alt="" height="48" />
        <p>Desa Karehkel, Kecamatan Leuwiliang, Bogor</p>
  </div>