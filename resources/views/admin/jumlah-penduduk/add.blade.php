@extends('admin.layouts.master')
@section('content') 
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tambah Data Penduduk Desa</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2"> 
                <form class="mx-4" method="post" action="{{route('admin-penduduk-tambah')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tahun</label>
                        <input type="text" name="tahun" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Pria</label>
                      <input type="number" name="lk" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Wanita</label>
                      <input type="number" name="pr" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Jumlah Kartu Keluarga</label>
                      <input type="number" name="jumlah_kk" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Laju Pertumbuhan</label>
                      <input type="number" name="laju_pertumbuhan" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="col-12 text-end pb-4">
                        <button class="btn bg-gradient-primary mb-0"">Simpan</button>
                        <a class="btn bg-gradient-primary mb-0" href="{{route('admin-penduduk')}}">Batal</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection