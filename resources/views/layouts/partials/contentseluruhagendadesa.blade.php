<!-- Agenda -->
<div id="agenda" class="agenda">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Agenda</h2>
            </div>
        </div>
        @foreach($agenda as $data_agenda)
        <div class="schedule mb-5">
            <div class="row">
                <div class="col">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th class="month" scope="col">{{\Carbon\Carbon::parse($data_agenda->nama_agenda)->format('d F Y')}}</th>
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
            </div>
        </div>
        @endforeach
    </div>
  </div>
  <!-- Agenda End -->
