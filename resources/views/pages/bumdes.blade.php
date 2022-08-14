@extends('layouts.partials.body')
@section('content')
<div class="hero">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse justify-content-center align-items-center g-5 py-5">
        <div class="col-12 col-sm-12 col-lg-6">
            <img src="{{asset('/frontend-assets/assets/img/logo_kemendesa.png')}}" class="d-block mx-lg-auto img-fluid" alt="Desa Karehkel" style="height: 250px" loading="lazy">
        </div>
        <div class="col-lg-6 col-sm-12">
            <h1 class="display-5 fw-bold lh-1 mb-3">BUMDesa karehkel</h1>
            <p class="lead">Bumdes ceria, mewujudkan mimpi dan harapan masyarakat Desa</p>
            <p>Kp. Gunung Sodong, RT.003/RW.001, Karehkel, Kec. Leuwiliang, Kabupaten Bogor, Jawa Barat 16641</p>
        </div>
        </div>
    </div>
</div>
<div>
    @include('layouts.partials.bumdes')
    @include('layouts.partials.footer')

</div>
@endsection