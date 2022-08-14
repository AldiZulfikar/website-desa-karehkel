@extends('admin.layouts.master')
@section('content') 
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tambah Galeri</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2"> 
                <form class="mx-4" method="post" action="{{route('admin-galeri-desa-tambah')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Gambar Galeri</label>
                      <input type="file" required name="gambar_galeri" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Judul | Maksimal 50 Karakter</label>
                        <input type="text" required maxlength="50" name="judul" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Status</label>
                      <select name="is_active" class="form-control" id="exampleFormControlSelect1">
                        <option value="1">Publish</option>
                          <option value="0">Draft</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Pemilik</label>
                      <input type="text" required maxlength="50" name="pemilik" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Link Instagram (Optional)</label>
                      <input type="text" name="ig" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Link Toko (Optional)</label>
                      <input type="text" name="toko" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="col-12 text-end pb-4">
                        <button class="btn bg-gradient-primary mb-0" href="{{route('admin-galeri-desa')}}">Simpan</button>
                        <a class="btn bg-gradient-primary mb-0" href="{{route('admin-galeri-desa')}}">Batal</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection