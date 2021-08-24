<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulir Pendaftaran</title>
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


                                <form action="<?php echo site_url('pendaftaran/kirim_pendaftaran');?>" method="post">
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-8">
                                        <h3 class="page-header mb-4">Formulir Pendaftaran</h3>
                                        <div class="table-responsive">
                                            <div class="card-body px-3 py-3">
                                            <h5 class="card-title">Data Siswa</h5>
                                            <div class="form-group">
                                                <label class="control-label">Nama Siswa</label>
                                                <div class="">
                                                    <input type="text" class="form-control" placeholder= "Nama Siswa" name="xnama_siswa" required>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Jenis Kelamin</label>
                                                    <select class="form-control" class="custom-select" placeholder= "Silahkan Pilih" name="xjenis_kelamin" required>
                                                    <option selected>Silahkah Pilih</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Tempat Lahir</label>
                                                <div class="">
                                                    <input type="text" class="form-control" placeholder= "Tempat Lahir" name="xtempat_lahir" required>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Tanggal Lahir</label>
                                                <div class="">
                                                    <input type="date" class="form-control" placeholder= "Tanggal Lahir" name="xtanggal_lahir" required>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Agama</label>
                                                    <select class="form-control" class="custom-select" name="xagama" required>
                                                    <option selected>Silahkan Pilih</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Alamat Siswa</label>
                                                <div class="">
                                                    <input type="text" class="form-control" placeholder= "Alamat" name="xalamat_siswa" required>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">No HP Siswa</label>
                                                <div class="">
                                                    <input type="text" class="form-control" placeholder= "No Hp" name="xno_hp" required>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Prestasi Pribadi Siswa</label>
                                                <div class="">
                                                <textarea placeholder="Message" class="form-control" name="xprestasi_pribadi" required></textarea>
                                                    <h10><i>Misal : Juara 1 Olimpiade sains</i></h10>
                                                </div>
                                                </div>

                                                <h5 class="card-title mt-5">Data Orang Tua / Wali</h5>
                                                <div class="form-group">
                                                <label class="control-label">Nama Ayah</label>
                                                <div class="">
                                                    <input type="text" class="form-control" placeholder="Nama Ayah" name="xnama_ayah" required>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Pendidikan</label>
                                                    <select class="form-control" class="custom-select" name="xpendidikan_ayah" required>
                                                    <option selected>Silahkan Pilih</option>
                                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                    <option value="SD">SD</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="Diploma (D1-D3)">Diploma (D1-D3</option>
                                                    <option value="Sarjana S1">Sarjana S1</option>
                                                    <option value="Pasca Sarjana (S1-S2)">Pasca Sarjana (S1-S2)</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Pekerjaan</label>
                                                <div class="">
                                                    <input type="text" class="form-control" placeholder="Pekerjaan" name="xpekerjaan_ayah" required>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Agama</label>
                                                    <select class="form-control" class="custom-select" name="xagama_ayah" required>
                                                    <option selected>Silahkan Pilih</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Penghasilan</label>
                                                    <select class="form-control" class="custom-select" placeholder="Penghasilan" name="xpenghasilan_ayah" required>
                                                    <option selected>Silahkan Pilih</option>
                                                    <option value="Dibawah 1 Juta">Dibawah 1 Juta</option>
                                                    <option value="1 sd 2 juta">1 sd 2 juta</option>
                                                    <option value="2 sd 5 juta">2 sd 5 juta</option>
                                                    <option value="Diatas 5 juta">Diatas 5 juta</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Nama Ibu</label>
                                                <div class="">
                                                    <input type="text" class="form-control" placeholder="Nama Ibu" name="xnama_ibu" required>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Pendidikan</label>
                                                    <select class="form-control" class="custom-select" name="xpendidikan_ibu" required>
                                                    <option selected>Silahkan Pilih</option>
                                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                    <option value="SD">SD</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="Diploma (D1-D3)">Diploma (D1-D3</option>
                                                    <option value="Sarjana S1">Sarjana S1</option>
                                                    <option value="Pasca Sarjana (S1-S2)">Pasca Sarjana (S1-S2)</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Pekerjaan</label>
                                                <div class="">
                                                    <input type="text" class="form-control" placeholder="Pekerjaan" name="xpekerjaan_ibu" required>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Agama</label>
                                                    <select class="form-control" class="custom-select" name="xagama_ibu" required>
                                                    <option selected>Silahkan Pilih</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Penghasilan Ibu</label>
                                                    <select class="form-control" class="custom-select" name="xpenghasilan_ibu" required>
                                                    <option selected>Silahkan Pilih</option>
                                                    <option value="Dibawah 1 Juta ">Dibawah 1 Juta</option>
                                                    <option value="1 sd 2 juta">1 sd 2 juta</option>
                                                    <option value="2 sd 5 juta">2 sd 5 juta</option>
                                                    <option value="Diatas 5 juta">Diatas 5 juta</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">No HP Orang Tua/Wali</label>
                                                <div class="">
                                                    <input type="text" class="form-control" placeholder="No Hp Orang Tua" name="xno_hp_orang_tua" required>
                                                </div>
                                                </div>
                                                
                                            
                                            <h5 class="card-title mt-5">Data Asal Sekolah</h5>
                                            <div class="form-group">
                                                <label class="control-label">Asal Sekolah</label>
                                                <div class="">
                                                    <input type="text" class="form-control" placeholder="Asal Sekolah" name="xasal_sekolah" required>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Alamat Sekolah</label>
                                                <div class="">
                                                    <input type="text" class="form-control" placeholder="Alamat Sekolah" name="xalamat_sekolah" required>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Status Sekolah</label>
                                                    <select class="form-control" class="custom-select" name="xstatus_sekolah" required>
                                                    <option selected>Silahkan Pilih</option>
                                                    <option value="Negeri ">Negeri</option>
                                                    <option value="Swasta">Swasta</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                <label class="control-label">Model Ujian Sekolah</label>
                                                    <select class="form-control" class="custom-select" name="xmodel_ujian" required>
                                                    <option selected>Silahkan Pilih</option>
                                                    <option value="UNBK">UNBK</option>
                                                    <option value="UNKP">UNKP</option>
                                                    <option value="Tanpa Ujian/TK">Tanpa Ujian/TK</option>
                                                    </select>
                                                </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-info">Daftar</button>
                                                <div><?php echo $this->session->flashdata('msg');?></div>
                                                </div>
                                            </div>

                                            </div>
                                        </div>

                                        </div>
                                    </div>
                                    </form>             
                                    <!-- // end #js-contact-result -->
                                </form>
                            </div>
                        </div>
                        
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
            <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
            <!-- Subscribe / Contact-->
            <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
            <!-- Script JS -->
            <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
        </body>

        </html>