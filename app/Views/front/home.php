<?= $this->extend('front/layout/template'); ?>

<?= $this->section('content'); ?>


<main class="page landing-page">
    <section class="clean-block clean-hero" style="background-image:url(<?= base_url(''); ?>/template/web/assets/img/tech/image4.jpg?h=0adc0de9a17a7caea6b8641f5d6ae02c&quot;);color:rgba(9, 162, 255, 0.85);">
        <div class="text">
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p><button class="btn btn-outline-light btn-lg" type="button">Learn More</button>
        </div>
    </section>
    <section class="clean-block clean-info dark">
        <div class="container-fluid">
            <!-- <div class="block-heading">
                <h2 class="text-info">Info</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div> -->
            <div class="row align-items-center">
                <div class="col-md-6"><img class="img-thumbnail" src="<?= base_url(''); ?>/template/web/assets/img/scenery/image5.jpg?h=5a16d46fccd884924ce66752802d76c5"></div>
                <div class="col-md-6">
                    <h3>FISPEDIA</h3>
                    <div class="getting-started-info">
                        <p>telah tumbuh pesat sejak 2016 sebagai platform informasi pendidikan terlengkap dan terpercaya</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-address-book-o" aria-hidden="true"></i>

                    </div>
                    <div class="col-md-3">
                        <h3>FISPEDIA</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea blanditiis nostrum ratione, illo cupiditate placeat nulla possimus quo, sed error, hic distinctio rem vero quas quidem expedita dolores autem in?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block features">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Layanan Kami</h2>
                <p>temukan yang paling pas buat kamu!</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                    <h4>Webinar Masuk Kampus</h4>
                    <p>Seminar online yang digarap secara profesional dan dipersiapkan dengan matang via ZOOM bertujuan meningkatkan semangat adik-adik dalam meraih kesuksesan SNMPTN dan SBMPTN. </p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                    <h4>Try Out Online UTBK SBMPTN</h4>
                    <p>Simulasi UTBK SBMPTN dengan fitur terlengkap!. Analisis mendalam, soal akurat, pembahasan lengkap!. Yuk berjuang bareng ratusan ribu pengguna lainnya!</p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                    <h4>Try Out Online PKN STAN</h4>
                    <p>adilah yang paling siap menghadapi rangkaian seleksi PKN STAN! </p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                    <h4>Masuk Kampus News</h4>
                    <p>Portal berita terkini dan terlengkap seputar dunia pendidikan</p>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block slider dark">
        <div class="container-fluid">
            <div class="block-heading">
                <h2 class="text-info">Galeri</h2>
                <p>Kegiatan Try Out</p>
            </div>
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"><img class="w-100 d-block" src="<?= base_url(''); ?>/template/web/assets/img/scenery/image1.jpg?h=323a7e5d8e12e9b60d93996156594f41" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?= base_url(''); ?>/template/web/assets/img/scenery/image4.jpg?h=ae7b4d25adfdfa1581297908235a949d" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?= base_url(''); ?>/template/web/assets/img/scenery/image6.jpg?h=26f762ae21fd9cce95e86763ac6154ca" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
    <section class="clean-block about-us">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="<?= base_url(''); ?>/template/web/assets/img/avatars/avatar1.jpg?h=2bf47f2c2deaed837d2490a2db0a7175">
                        <div class="card-body info">
                            <h4 class="card-title">John Smith</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="<?= base_url(''); ?>/template/web/assets/img/avatars/avatar2.jpg?h=4178f5c706118a93c77520b6d0b30713">
                        <div class="card-body info">
                            <h4 class="card-title">Robert Downturn</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="<?= base_url(''); ?>/template/web/assets/img/avatars/avatar3.jpg?h=4c77b34bb68eaede08fdd5dfec8752b0">
                        <div class="card-body info">
                            <h4 class="card-title">Ally Sanders</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>