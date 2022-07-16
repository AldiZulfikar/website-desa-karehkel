<section class="profil-home">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7">
          <div class="row text-left">
            <div class="col">
              <h2>Desa {{$profil->nama_desa}}</h2>
            </div>
          </div>
          <p>
            {{$profil->sejarah}}
          </p>
          <div class="text-left">
            <a href="/profil-desa">
              <button type="button" class="btn">Telusuri Desa</button>
            </a>
          </div>
        </div>
        <div class="picture col-lg-5 col-md-5">
          <img src="{{$profil->foto_desa ? asset('upload/' .$profil->foto_desa) : asset('/frontend-assets/assets/img/desa.png')}}" alt="" />
        </div>
      </div>   
    </div>
</section>