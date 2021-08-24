<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- Meta Tag Start -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8' />
    <meta content='SMA Muhhammadiyah Sewon Bantul sekolah murah di Yogyakarta' name='description' />
    <meta content='SMA Muhammadiyah Sewon Bantul, Sewon Bantul, Sekolah Murah, Sekolah Bantul' name='keywords' />
    <meta content='Indonesia' name='geo.placename' />
    <meta name="language" content="id" />
    <meta content='SMA Muhammadiyah Sewon Bantul' name='subject' />
    <meta content='SMA Muhammadiyah Sewon Bantul' name='Author' />
    <meta content='all' name='audience' />
    <meta content='general' name='rating' />
    <title>Cetak Pendaftaran</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/logo.png'?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="d-flex align-items-center my-4">
                    <div class="p-5">
                        <img src="<?php echo base_url('assets/images/logo.png'); ?>" style="width:100px;height:100px;" />
                    </div>
                    <div class="d-flex flex-column w-100 justify-content-center align-items-center">
                        <h3><b>SMA MUHAMMADIYAH SEWON</h3></b>
                        <p class="m-0">Jl. Imogiri Barat KM 7.5, Mredo, Bangunharjo, Sewon, Bantul, DI Yogyakarta</p>
                    </div>
                </div>
                <h3 class ="my-3 text-bold">
                    Formulir Pendaftaran
                </h3>

                <h4 class="my-3 text-bold">
                    Identitas Siswa
                </h4>
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="row">
                            <div class="col-4">
                                <strong>Nama Siswa</strong>
                            </div>
                            <div class="col-8">
                                <?php echo ": ". $detail->nama_siswa; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Jenis Kelamin</strong>
                            </div>
                            <div class="col-8">
                                <?php echo ": ". $detail->jenis_kelamin; ?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Tempat Tanggal Lahir</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->tempat_lahir . ", " . date("d-m-Y", strtotime($detail->tanggal_lahir)); ?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Agama</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->agama; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Alamat</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->alamat_siswa; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>No. Telepon / HP</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->no_hp; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Prestasi Siswa</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->prestasi_pribadi; ?>
                            </div>
                        </div>


                    </div>
                </div>

                <h4 class="my-3 text-bold">
                    Identitas Orang Tua/Wali
                </h4>
                <div class="row">
                    <div class="col-10 offset-1">

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Nama Ayah</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->nama_ayah; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Pendidikan</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->pendidikan_ayah; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Pekerjaan</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->pekerjaan_ayah; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Agama</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->agama_ayah; ?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Penghasilan</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->penghasilan_ayah; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Nama Ibu</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->nama_ibu; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Pekerjaan</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->pekerjaan_ibu; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Agama</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->agama_ibu; ?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>No. Telepon / HP</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->no_hp_orang_tua; ?>
                            </div>
                        </div>

                    </div>
                </div>


                <h4 class="my-3 text-bold">
                    Data Asal Sekolah
                </h4>
                <div class="row">
                    <div class="col-10 offset-1">

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Asal Sekolah</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->asal_sekolah; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Alamat Sekolah</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->alamat_sekolah; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Status Sekolah</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->status_sekolah; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 text-bold">
                                <strong>Model Ujian</strong>
                            </div>
                            <div class="col-8">
                                <?php echo": ". $detail->model_ujian; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        window.print();
    </script>
</body>

</html>