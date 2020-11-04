<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <meta name="twitter:description" content="Perusahaan ini bergerak di bidang pendidikan yang menawarkan jasa belajar online dan ujian online kepada siswa-siswi seluruh Indonesia">
    <meta name="twitter:title" content="FisPedia">
    <meta name="twitter:image" content="<?= base_url(''); ?>/template/web/assets/img/fispedia/logo.png">
    <meta property="og:image" content="<?= base_url(''); ?>/template/web/assets/img/fispedia/logo.png?h=eb91f16cbe1dff9861444ae460539d41">
    <meta name="description" content="Perusahaan ini bergerak di bidang pendidikan yang menawarkan jasa belajar online dan ujian online kepada siswa-siswi seluruh Indonesia">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta property="og:title" content="FisPedia">
    <meta property="og:description" content="Perusahaan ini bergerak di bidang pendidikan yang menawarkan jasa belajar online dan ujian online kepada siswa-siswi seluruh Indonesia">
    <link rel="icon" type="image/png" sizes="1671x1672" href="<?= base_url(''); ?>/template/web/assets/img/fispedia/logo.png?h=eb91f16cbe1dff9861444ae460539d41">
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/web/assets/bootstrap/css/bootstrap.min.css?h=a31503da461822ff2d18e13426a5691f">
    <link rel="manifest" href="manifest.json?h=eed4d16da80411bc190c3c04527f71d5">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/web/assets/fonts/simple-line-icons.min.css?h=03ab36d1dde930b7d44a712f19075641">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/web/assets/css/styles.min.css?h=b4499fa83df1fc5ab1145f33930d2210">
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/fontawesome/css/fontawesome.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><img id="logo" src="<?= base_url(''); ?>/template/web/assets/img/fispedia/logo.png" style="height: 50px;"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="<?= base_url(''); ?>">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url(''); ?>/tentang-kami">TENTANG KAMI</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url(''); ?>">MULAI</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url(''); ?>features.html">LAYANAN</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url(''); ?>/kontak">KONTAK</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url(''); ?>contact-us.html">DISCLAMER</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url(''); ?>contact-us.html">ARSIP</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url(''); ?>contact-us.html">IKLAN</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>


    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5><strong>FisPEDIA</strong></h5>
                    <p class="text-white-50">Kendari, Sulawesi Tenggara</p>
                    <p class="text-white-50">Email :&nbsp;</p>
                    <p class="text-white-50">Whatsapp :&nbsp;082271357722</p>
                </div>
                <div class="col-sm-3">
                    <h5>Tautan</h5>
                </div>
                <div class="col-sm-3">
                    <h5>Sosial Media</h5>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Youtube</a></li>
                    </ul>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2020 Copyright&nbsp;<br>All rights reserved |&nbsp;FisPEDIA<br></p>
        </div>
    </footer>
    <script src="<?= base_url(''); ?>/template/web/assets/js/jquery.min.js?h=83e266cb1712b47c265f77a8f9e18451"></script>
    <script src="<?= base_url(''); ?>/template/web/assets/bootstrap/js/bootstrap.min.js?h=63715b63ee49d5fe4844c2ecae071373"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="<?= base_url(''); ?>/template/web/assets/js/script.min.js?h=a600b8e7e9619265383470da5f98b4f6"></script>
</body>

</html>