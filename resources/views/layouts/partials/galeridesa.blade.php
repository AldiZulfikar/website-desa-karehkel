<!-- galeri Start -->
<div id="galeri" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div
            class="section-title text-center position-relative pb-3 mb-5 mx-auto"
            style="max-width: 600px"
        >
            <h5 class="fw-bold text-primary text-uppercase">galeri desa</h5>
            <h1 class="mb-0">Karya Desa Karehkel</h1>
        </div>
        <div class="row g-5">
            @foreach ($galeri as $data)
            <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                <div class="galeri-item bg-light rounded overflow-hidden shadow-lg">
                    <div class="galeri-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{$data->gambar_galeri ? asset('upload/' .$data->gambar_galeri) : asset('/frontend-assets/assets/img/desa.png')}}" alt="" style="width: 150px; height: 200px;"/>
                        <div class="galeri-social">
                            <a
                                class="btn btn-lg btn-primary btn-lg-square rounded"
                                href="{{$data->ig}}"
                                ><i class="fab fa-instagram fw-normal"></i
                            ></a>
                            <a
                                class="btn btn-lg btn-primary btn-lg-square rounded"
                                href="{{$data->toko}}"
                                ><i class="fas fa-dumpster"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h6 class="text-dark">{{$data->judul}}</h6>
                        <span>Rp. 400.000</span>
                        <p class="text-dark text-uppercase m-0">{{$data->pemilik}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- galeri End -->