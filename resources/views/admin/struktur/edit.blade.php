@extends('admin.layouts.master')
@section('content') 
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah Agenda | {{$struktur -> nama}}</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2"> 
                <form class="mx-4" method="post" action="{{route('admin-update-pemerintahan-desa', $struktur->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="form-group">
                      <img src="{{ asset('upload/' . $struktur->foto_pengurus) }}" width="200" alt=""><br>
                      <label for="exampleFormControlFile1">Foto Pengurus</label>
                      <input type="file" name="foto_pengurus" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Pengurus</label>
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="{{$struktur->nama}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Jabatan</label>
                      <input type="text" name="jabatan" class="form-control" id="exampleFormControlInput1" value="{{$struktur->jabatan}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Tempat Lahir</label>
                      <input type="text" name="tempat_lahir" class="form-control" id="exampleFormControlInput1" value="{{$struktur->tempat_lahir}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Tanggal Lahir</label>
                      <input type="date" name="tanggal_lahir" class="form-control" id="exampleFormControlInput1" value="{{$struktur->tanggal_lahir}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Pendidikan</label>
                      <input type="text" name="pendidikan" class="form-control" id="exampleFormControlInput1" value="{{$struktur->pendidikan}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">NIP</label>
                      <input type="number" name="nip" class="form-control" id="exampleFormControlInput1" value="{{$struktur->nip}}">
                    </div>
                    <div class="col-12 text-end pb-4">
                        <button class="btn bg-gradient-primary mb-0">Simpan</button>
                        <a class="btn bg-gradient-primary mb-0" href="{{route('admin-pemerintahan-desa')}}">Batal</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection