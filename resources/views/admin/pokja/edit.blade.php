@extends('admin.layouts.master')
@section('content') 
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah Pokja | {{$pokja -> kelompok}}</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2"> 
                <form class="mx-4" method="post" action="{{route('admin-update-pokja-desa', $pokja->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kelompok</label>
                        <select name="kelompok" class="form-control" id="exampleFormControlSelect1">
                          <option value="POKJA I" {{$pokja->kelompok == 'POKJA I' ? 'POKJA I' : ''}}>POKJA I</option>
                          <option value="POKJA II" {{$pokja->kelompok == 'POKJA II' ? 'POKJA II' : ''}}>POKJA II</option>
                          <option value="POKJA III" {{$pokja->kelompok == 'POKJA III' ? 'POKJA III' : ''}}>POKJA III</option>
                          <option value="POKJA IV" {{$pokja->kelompok == 'POKJA IV' ? 'POKJA IV' : ''}}>POKJA IV</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Program</label>
                        <textarea maxlength="50" name="program" class="form-control summernote" id="exampleFormControlTextarea1" rows="3">{{$pokja->program}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Kegiatan</label>
                        <textarea maxlength="50" name="kegiatan" class="form-control summernote" id="exampleFormControlTextarea1" rows="3">{{$pokja->kegiatan}}</textarea>
                    </div>
                    <div class="col-12 text-end pb-4">
                        <button class="btn bg-gradient-primary mb-0" href="{{route('admin-pokja-desa')}}">Simpan</button>
                        <a class="btn bg-gradient-primary mb-0" href="{{route('admin-pokja-desa')}}">Batal</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection