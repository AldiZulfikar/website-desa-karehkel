@extends('admin.layouts.master')
@section('content') 
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah Agenda | {{$agenda -> nama_agenda}}</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2"> 
                <form class="mx-4" method="post" action="{{route('admin-update-agenda', $agenda->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Agenda</label>
                        <input type="date" name="nama_agenda" class="form-control" id="exampleFormControlInput1" value="{{$agenda->nama_agenda}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select name="is_active" class="form-control" id="exampleFormControlSelect1">
                          <option value="1" {{$agenda->is_active == '1' ? 'selected' : ''}}>Publish</option>
                          <option value="0" {{$agenda->is_active == '0' ? 'selected' : ''}}>Draft</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Agenda</label>
                        <textarea name="deskripsi" class="form-control summernote" id="exampleFormControlTextarea1" rows="3">{{$agenda->deskripsi}}</textarea>
                    </div>
                    <div class="col-12 text-end pb-4">
                        <button class="btn bg-gradient-primary mb-0" href="{{route('admin-agenda')}}">Simpan</button>
                        <a class="btn bg-gradient-primary mb-0" href="{{route('admin-agenda')}}">Batal</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection