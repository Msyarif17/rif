@extends('template')
@section('title','SalurkanDana')
@section('into-header')
<main class="page landing-page">

    <section class="clean-block parralax" >
    </section>
        <div data-bs-parallax-bg="true" style="height:500px;background-image:url(https://unsplash.it/1800/900?image=1051);background-position:center;background-size:cover;"></div>

@endsection
@section('main')
<section class="clean-block clean-info dark" >
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Penyaluran Dana</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>

            <div class="carousel slide" data-ride="carousel" id="carousel-2">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="jumbotron hero-nature carousel-hero">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-6"><img class="img-thumbnail" src="assets/img/homeless-845752.jpg"></div>
                                <div class="col-md-6">
                                    <h3>Korban Bencana Alam</h3>
                                    <div class="getting-started-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div><button class="btn btn-outline-primary btn-lg" type="button">Mari Berdonasi</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="jumbotron hero-nature carousel-hero">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-6"><img class="img-thumbnail" src="assets/img/homeless-845752.jpg"></div>
                                <div class="col-md-6">
                                    <h3>Anaka Yatim</h3>
                                    <div class="getting-started-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div><button class="btn btn-outline-primary btn-lg" type="button">Mari Berdonasi</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="jumbotron hero-nature carousel-hero">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-6"><img class="img-thumbnail" src="assets/img/homeless-845752.jpg"></div>
                                <div class="col-md-6">
                                    <h3>Anaka Yatim</h3>
                                    <div class="getting-started-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div><button class="btn btn-outline-primary btn-lg" type="button">Mari Berdonasi</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="jumbotron hero-nature carousel-hero">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-6"><img class="img-thumbnail" src="assets/img/homeless-845752.jpg"></div>
                                <div class="col-md-6">
                                    <h3>Anaka Yatim</h3>
                                    <div class="getting-started-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div><button class="btn btn-outline-primary btn-lg" type="button">Mari Berdonasi</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
                <ol
                    class="carousel-indicators">
                    <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-2" data-slide-to="1"></li>
                    <li data-target="#carousel-2" data-slide-to="2"></li>
                    <li data-target="#carousel-2" data-slide-to="3"></li>
                    <li data-target="#carousel-2" data-slide-to="4"></li>
                    </ol>
            </div>

    </div>
</section>
<section class="clean-block features">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Tentang Kami</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5 feature-box"><i class="icon-check icon"></i>
                <h4>Jujur</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
            <div class="col-md-5 feature-box"><i class="icon-heart icon"></i>
                <h4>Amanah</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
            <div class="col-md-5 feature-box"><i class="icon-calendar icon"></i>
                <h4>Penyaluran Dana Terjadwal</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
            <div class="col-md-5 feature-box"><i class="icon-target icon"></i>
                <h4>Tepat Sasaran</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
        </div>
    </div>
</section>
<section class="clean-block slider dark">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Foto Kegiatan Penyaluran Dana</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/scenery/image1.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/image4.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/image6.jpg" alt="Slide Image"></div>
            </div>
            <div>
                <!-- Start: Previous --><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>
                <!-- End: Previous -->
                <!-- Start: Next --><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
                <!-- End: Next -->
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</section>
</main>
@endsection
