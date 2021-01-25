<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pelayanan Keluhan Pelanggan</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="<?= base_url() ?>assets/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="<?= base_url() ?>assets/css/fa_merriweathersans.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/fa_merriweather.css" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="<?= base_url() ?>assets/css/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <?php $this->session->set_flashdata('message', '');
    $this->session->set_flashdata('istrue', ''); ?>
    <input type="hidden" id="message" value="<?= $this->session->flashdata('message') ?>">
    <input type="hidden" id="istrue" value="<?= $this->session->flashdata('istrue') ?>">
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Tentang</h2>
                    <hr class="divider light my-4" />
                    <p class="text-white-50 mb-4">PT Amartha Sejahtera Metland Cibitung adalah salah satu perusahaan swasta yang berada di kabupaten Bekasi yang mendapat kepercayaan dari pemerintah kabupaten Bekasi untuk mengelolah dan menyalurkan air bersih bagi sebagian masyarakat kabupaten Bekasi pada khususnya</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0">Galeri</h2>
            <hr class="divider my-4" />
            <div class="row">
            </div>
        </div>
    </section>
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="<?= base_url() ?>assets/img/galeri1.jpg">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/galeri1.jpg" alt="" width="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Galeri</div>
                            <div class="project-name">Foto</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="<?= base_url() ?>assets/img/galeri2.jpg">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/galeri2.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Galeri</div>
                            <div class="project-name">Foto</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="<?= base_url() ?>assets/img/galeri3.jpg">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/galeri3.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Galeri</div>
                            <div class="project-name">Foto</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="<?= base_url() ?>assets/img/galeri4.jpg">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/galeri4.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Galeri</div>
                            <div class="project-name">Foto</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="<?= base_url() ?>assets/img/galeri5.jpg">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/galeri5.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Galeri</div>
                            <div class="project-name">Foto</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="<?= base_url() ?>assets/img/galeri6.jpg">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/galeri6.jpg" alt="" />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Galeri</div>
                            <div class="project-name">Foto</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Contact</h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5"></p>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 mr-auto text-center ml-auto">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <div>Hubungi Kami Melalui No Telp/Email (021) 29254819/hehe@</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-map-marker-alt fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <div>Perumahan Metland Cibitung, Wanajaya, Kec.Cibitung, Bekasi, Jawa Barat 17520</div>
                </div>
            </div>
        </div>
    </section>

    <!-- modal Keluhan -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengaduan Apa Yang Anda Ingin Ajukan?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow-x: auto;">
                    <form class="form" id="form1" method="post" action="home/sendreport">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nama Anda</label>
                            <input type="text" name="name" id="name" readonly class="form-control" value="<?= $this->session->userdata('users')['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-form-label">Alamat Anda</label>
                            <textarea class="form-control" name="alamat" readonly><?= $this->session->userdata('users')['alamat'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Jenis_Keluhan">Jenis Keluhan</label>
                            <select class="form-control" id="sel1" name="jeniskeluhan">
                                <option value="default" disabled selected>--Pilih--</option>
                                <?php
                                foreach ($jenisKeluhan as $key => $val) { ?>
                                    <option value="<?= $val['id_jnskeluhan'] ?>" selected><?= $val['jenis_keluhan'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <input type="button" id="sendreport" class="btn btn-primary" value="Kirim Keluhan">
                </div>
            </div>
        </div>
    </div>



    <!-- modal kuesioner -->
    <!-- <div id="classModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="classInfo" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form action="home/tambahKuesioner" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kuesioner Pelayanan Pelanggan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style=" overflow-x: auto;">
                        <table id="classTable" class="table table-bordered">

                            <tbody>
                                <thead>
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <td>Sangat Memuaskan</td>
                                        <td>Memuaskan</td>
                                        <td>Cukup Memuaskan</td>
                                        <td>Tidak Memuaskan</td>
                                    </tr>
                                </thead>
                                <tr>
                                    <td style="width:50%">
                                        Bagaimana kepuasan anda mengenai kualitas air yang dihasilkan ?
                                    </td>
                                    <td>
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_satu[]" id="jawaban_satu" value="Sangat Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_satu[]" id="jawaban_satu" value="Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_satu[]" id="jawaban_satu" value="Cukup Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_satu[]" id="jawaban_satu" value="Tidak Memuaskan"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:50%">Bagaimana kepuasan anda mengenai servis pada saat air bermasalah ?</td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_dua[]" id="jawaban_dua" value="Sangat Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_dua[]" id="jawaban_dua" value="Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_dua[]" id="jawaban_dua" value="Cukup Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_dua[]" id="jawaban_dua" value="Tidak Memuaskan"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:50%">Bagaimana kepuasan anda mengenai respon perusahaan terhadap komplain yang di ajukan ?</td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_tiga[]" id="jawaban_tiga" value="Sangat Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_tiga[]" id="jawaban_tiga" value="Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_tiga[]" id="jawaban_tiga" value="Cukup Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_tiga[]" id="jawaban_tiga" value="Tidak Memuaskan"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:50%">Bagaimana kepuasan anda mengenai fasilitas yang diberikan?</td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_empat[]" id="jawaban_empat" value="Sangat Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_empat[]" id="jawaban_empat" value="Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_empat[]" id="jawaban_empat" value="Cukup Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_empat[]" id="jawaban_empat" value="Tidak Memuaskan"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:50%">Bagaimana kepuasan anda mengenai harga pembayaran yang diberikan?</td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_lima[]" id="jawaban_lima" value="Sangat Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center ">
                                            <label><input type="checkbox" name="pertanyaan_lima[]" id="jawaban_lima" value="Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_lima[]" id="jawaban_lima" value="Cukup Memuaskan"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="checkbox text-center">
                                            <label><input type="checkbox" name="pertanyaan_lima[]" id="jawaban_lima" value="Tidak Memuaskan"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <h6 style="color:orangered">Pesan Anda Atas Pelayanan Kami :</h6>
                                        <textarea class="form-control" name="pesan" maxlength="100" placeholder="Masukkan Pesan anda"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Tutup
                        </button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

    <div id="modalSimulasi" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="classInfo" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Simulasi Prioritas Keluhan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body" style=" overflow-x: auto;">
                        <label for="" style="color:red;font-size:13px">* Nilai Maks 10</label>
                        <table id="classTable" class="table table-bordered">
                            <tbody>
                                <thead>
                                    <th>Attribut</th>
                                    <th>Jumlah</th>
                                </thead>
                                <?php foreach ($jenisKeluhan as $js) { ?>
                                    <tr>
                                        <td><?= $js['jenis_keluhan'] ?></td>
                                        <td>
                                            <select class="form-control" id="sel1" name="number[]">
                                                <?php for ($i = 1; $i <= 10; $i++) { ?>
                                                    <option><?= $i ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Tutup
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="ulang">
                        Ulang
                    </button>
                    <button type="submit" class="btn btn-primary" id="proses">Lihat Hasil</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="<?= base_url() ?>assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="<?= base_url() ?>assets/js/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url() ?>assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>assets/js/sweetalert.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery-3.5.1.min.js"></script>

    <script src="<?= base_url() ?>assets/js/custom.js"></script>
</body>

</html>