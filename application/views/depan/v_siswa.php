<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Siswa</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/logo.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap"" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<body>
  <!--============================= HEADER =============================-->
  <div class="header-topbar">
      <div class="container">
          <div class="row">
              <div class="col-xs-6 col-sm-8 col-md-9">
                  <div class="header-top_address">
                      <div class="header-top_list">
                          <span class="icon-phone"></span>082225036661
                      </div>
                      <div class="header-top_list">
                          <span class="icon-envelope-open"></span>sma.museba@yahoo.com
                      </div>
                      <div class="header-top_list">
                          <span class="icon-location-pin"></span>Sewon, Bantul, Yogyakarta 55187
                      </div>
                  </div>
                  <div class="header-top_login2">
                      <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                  </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <div class="header-top_login mr-sm-3">
                      <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url().'theme/images/Museba.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Profil</a>
                                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                     <li class="nav-item"><a class="nav-link" href="<?php echo site_url('about');?>">Visi dan Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('sejarah');?>">Sejarah</a>
                                </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('guru');?>">Guru</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('siswa');?>">Siswa Berprestasi</a>
                                </li>
                            </ul>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">Artikel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>">Download</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pendaftaran');?>">PPDB</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">E-Learning</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
</section>
<!--//END HEADER -->

    <section class="our-teachers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5">Siswa Kami</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data->result() as $row) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="admission_insruction">
                          <?php if(empty($row->siswa_photo)):?>
                            <img src="<?php echo base_url().'assets/images/blank.png';?>" class="img-fluid" alt="#">
                          <?php else:?>
                            <img src="<?php echo base_url().'assets/images/'.$row->siswa_photo;?>" class="img-fluid" alt="#">
                          <?php endif;?>
                            <p class="text-center mt-3"><span><?php echo $row->siswa_nama;?></span>
                                <br>
                                <?php echo $row->kelas_nama;?></p>
                        </div>
                    </div>
                <?php endforeach;?>
              </div>
            <!-- End row -->
            <nav><?php echo $page;?></nav>
        </div>
    </section>

    <!--//End Style 2 -->
<!--============================= FOOTER =============================-->
<footer>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="foot-logo">
                <a href="<?php echo site_url();?>">
                    <img src="<?php echo base_url().'theme/images/Museba1.png'?>" class="img-fluid" width="200px;" alt="footer_logo">
                </a>
                <p><?php echo date('2017');?> © copyright by <a href="http://mfikri.com" target="_blank">M FIKRI</a>.
                    <p>2021 © Developer by <a href="https://www.elrahmajogja.net/" target="_blank">STMIK EL RAHMA</a>.
                      <br>All rights reserved.</p> 
                </div>
            </div>
            <div class="col-md-3">
                <div class="sitemap">
                    <h3>Menu Utama</h3>
                    <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li><a href="<?php echo site_url('about');?>">About</a></li>
                        <li><a href="<?php echo site_url('artikel');?>">Blog </a></li>
                        <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                        <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
              <div class="sitemap">
                  <h3>Akademik</h3>
                  <ul>
                      <li><a href="<?php echo site_url('guru');?>">Guru</a></li>
                      <li><a href="<?php echo site_url('siswa');?>">Siswa </a></li>
                      <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                      <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                      <li><a href="<?php echo site_url('download');?>">Download</a></li>
                  </ul>
              </div>
            </div>
            <div class="col-md-3">
                <div class="address">
                    <h3>Hubungi Kami</h3>
                    <p><span>Alamat: <a href="https://www.google.com/maps/dir/-7.7880945,110.3189663/sma+muhammadiyah+sewon/@-7.8220844,110.3112721,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e7a565db99dcf11:0x9166dc6b51bf1e4f!2m2!1d110.37079!2d-7.8558?hl=id"> </span> Jl Imogiri Barat Km 7.5 Bangunharjo, Sewon, Bantul Daerah Istimewa Yogyakarta</p>
                        <p>Email : sma.museba@yahoo.com
                            <br> Phone : 082225036661</p>
                            <ul class="footer-social-icons">
                                <li><a href="https://id-id.facebook.com/smamuhsewon/"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UClGWmE5FbmJL4nc5M5u15dw/featured"><i class="fa fa-youtube fa-in" aria-hidden="true"></i></a></li>
                                <li><a href="https://instagram.com/sma_muhammadiyah_sewon?utm_medium=copy_link"><i class="fa fa-instagram fa-tw" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
</body>

</html>
