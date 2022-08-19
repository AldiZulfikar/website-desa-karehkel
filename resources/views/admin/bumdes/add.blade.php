@extends('admin.layouts.master')
@section('content') 
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tambah Struktur BUMDES</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2"> 
                <form class="mx-4" method="post" action="{{route('admin-struktur-bumdes-tambah')}}" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Foto Pengurus</label>
                    <input type="file" required name="foto_pengurus" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Nama Pengurus</label>
                      <input type="text" required name="nama" class="form-control" id="exampleFormControlInput1"">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Jabatan</label>
                    <input type="text" required name="jabatan" class="form-control" id="exampleFormControlInput1"">
                  </div>
                    <div class="col-12 text-end pb-4">
                        <button class="btn bg-gradient-primary mb-0" href="{{route('admin-struktur-bumdes')}}">Simpan</button>
                        <a class="btn bg-gradient-primary mb-0" href="{{route('admin-struktur-bumdes')}}">Batal</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection