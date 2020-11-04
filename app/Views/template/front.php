<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/b4t/assets/css/bootsrap/bootstrap.min.css" >
    <link rel="stylesheet" href="<?= base_url()?>/b4t/assets/css/style.css" >
    <title>SMP DIPONEGORO TUMPANG MALANG</title>
  </head>
  <body>
      <div class="container-fluid bg-warning py-1">
          <marquee> <b> Info Kilat </b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga non sed minima doloremque consequatur quo vitae sit doloribus in, nesciunt, dolores repellendus quos deleniti laboriosam rem, quod sapiente. Iusto, hic?</marquee>
      </div>
      <div class="container">
        
      </div>
      <div class=" py-2">
        <div class="container">
            <img src="<?= base_url()?>/b4t/assets/image/logosekolah.png" class="rounded" alt="Cinque Terre" id="logosekolah"> 
        </div>
    </div>
    <nav id="navbar_top" class="navbar navbar-expand-lg  ">
    <div class="container">
      
        <nav class="navbar navbar-expand-lg ">            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link " href="index.html">Beranda </a>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="sejarah.html">Sejarah</a>
                      <a class="dropdown-item" href="visimisi.html">Visi & Misi</a>
                      <a class="dropdown-item" href="prestasi.html">Prestasi</a>
                      <a class="dropdown-item" href="sarana.html">Sarana & Prasarana</a>
                      <a class="dropdown-item" href="ektrakulikuler.html">Ektrakulikuler</a>
                      <a class="dropdown-item" href="prakata.html">Prakata Kepala Sekolah</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Berita
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="artikel.html">Artikel</a>
                      <a class="dropdown-item" href="agenda.html">Agenda Sekolah</a>
                      <a class="dropdown-item" href="pengumuman.html">Pengumuman</a>
                      
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Galeri
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="foto.html">Foto</a>
                      <a class="dropdown-item" href="video.html">Video</a>                     
                      
                    </div>
                  </li>
                  <!-- <a class="nav-item nav-link" href="#">Guru & Karyawan</a>
                  <a class="nav-item nav-link" href="#">Siswa</a> -->
                  <a class="nav-item nav-link" href="materiajar.html">Materi Ajar</a>
                  <a class="nav-item nav-link" href="ppdb.html">PPDB</a>
              </div>
            </div>
          </nav>
    </div> <!-- container.// -->
    </nav>

        <?= $this->renderSection('content'); ?>   
    <div class="footer ">
      <div class="container">
        <div class="row ">
            <div class="col-md-6 mt-4">
                <h5>SMP DIPONEGORO TUMPANG</h5>
                <p>Alamat : Jln Tunggul Ametung No 20 Kecamatan Tumpang Kabupaten Malang <br>
                Kode Pos : 65156 <br>
                Telepon : 0858-5553-0788 <br>
                Email : smpdiponegorotumpang9@gmail.com <br>
                Website : smpdiponegorotumpang.sch.id</Email>
            </div>
            <div class="col-md-6 mt-4">
                <h5>Link Terkait</h5>
                <a href="dispendik.malangkab.go.id">Dinas Pendidikan Kab Malang</a>
                <a href="http://"></a>
                <a href="http://"></a>
                <a href="http://"></a>
            </div>
        </div>
    </div>
  </div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <script src="<?= base_url()?>/b4t/js/bootsrap/bootstrap.min.js" ></script>
    <script >
        ///////////////// fixed menu on scroll for desktop
if ($(window).width() > 768) {
  $(window).scroll(function(){  
     if ($(this).scrollTop() > 40) {
        $('#navbar_top').addClass("fixed-top");
        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
      }else{
        $('#navbar_top').removeClass("fixed-top");
         // remove padding top from body
        $('body').css('padding-top', '0');
      }   
  });
} // end if
    </script>
  </body>
</html>