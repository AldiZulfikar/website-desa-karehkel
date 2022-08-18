@extends('admin.layouts.master')
@section('content')  
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tabel Galeri PKK Desa Karehkel</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
            <div class="col-12 text-end pb-4">
                <a class="btn bg-gradient-primary mb-0" href="{{route('admin-tambah-galeri-pkk-desa')}}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Galeri PKK</a>
            </div>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Gambar Galeri</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Judul</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Pemilik</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Instagram</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Youtube</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Pembuat</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($galeri as $item => $data)
                    <tr>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-center mb-0 text-sm">{{ $item+1 }}</h6>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div>
                          <img src="{{ asset('upload/' . $data->gambar_galeri) }}" width=100 alt="" center>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-center mb-0 text-sm">{{ $data->judul }}</h6>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-center text-secondary text-xs font-weight-bold">{{ $data->is_active == 1 ? "Aktif" : "Tidak Aktif" }}</span>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-center mb-0 text-sm">{{ $data->pemilik }}</h6>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-center mb-0 text-sm"><a href="{{ $data->ig }}" target="blank">Lihat Instagram</a></h6>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-center mb-0 text-sm"><a href="{{ $data->youtube }}" target="blank">Lihat youtube</a></h6>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-center mb-0 text-sm">{{ $data->users->name }}</h6>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <a href="/desa/galeri-pkk/{{$data->id}}" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                          Ubah
                        </a>
                        <form onsubmit="return confirm('apakah kamu yakin ingin menghapus galeri pkk ini?')" action="{{route('admin-galeri-pkk-desa-delete', $data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <input type="text" hidden value="{{ $data->id }}" name="id">
                            <button class="badge badge-sm bg-gradient-warning" data-toggle="tooltip" data-original-title="Edit user" type="submit">Hapus</button>
                        </form>
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