@extends('admin.layouts.master')
@section('content')  
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tabel Profil Desa</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Desa</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Foto Desa</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Pembuat</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($profil_desa as $item => $data)
                    <tr>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-center mb-0 text-sm">{{ $item+1 }}</h6>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-center mb-0 text-sm">{{ $data->nama_desa }}</h6>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div>
                          <img src="{{ asset('upload/' . $data->foto_desa) }}" width=100 alt="" center>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-center mb-0 text-sm">{{ $data->users->name }}</h6>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <a href="/desa/profil-desa/{{$data->id}}" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                          Ubah
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection