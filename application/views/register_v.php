<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="<?= base_url() ?>assets/register/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/register/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="<?= base_url() ?>assets/register/css/fa_poppins.css" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= base_url() ?>assets/register/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/register/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url() ?>assets/register/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <?php   $this->session->set_flashdata('message', '');
        $this->session->set_flashdata('istrue', ''); ?>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <input type="hidden" id="message" value="<?= $this->session->flashdata('message') ?>">
                    <input type="hidden" id="istrue" value="<?= $this->session->flashdata('istrue') ?>">
                    <h2 class="title">Buat Akun Pelanggan</h2>
                    <div role="alert" style="color:red">
                        <h4><?= $this->session->flashdata("daftar_gagal"); ?></h4>
                    </div>
                    &nbsp;
                    <form class="login-form" class="register-form" method="post" action="register/buatAkun">

                        <div class="col-2" style="width: 100%;">
                            <div class="input-group">
                                <label class="label">Username</label>
                                <input class="input--style-4" type="text" name="username">
                            </div>
                        </div>
                        <div class="col-2" style="width: 100%;">
                            <div class="input-group">
                                <label class="label">Nama Lengkap</label>
                                <input class="input--style-4" type="text" name="nama">
                            </div>
                        </div>
                        <div class="col-2" style="width: 100%;">
                            <div class="input-group">
                                <label class="label">Alamat</label>
                                <input class="input--style-4" type="text" name="alamat">
                            </div>
                        </div>
                        <div class="col-2" style="width: 100%;">
                            <div class="input-group">
                                <label class="label">No Telp</label>
                                <input class="input--style-4" type="text" name="no_telp">
                            </div>
                        </div>
                        <div class="col-2" style="width: 100%;">
                            <div class="input-group">
                                <label class="label">Password</label>
                                <input class="input--style-4" type="password" name="password">
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Daftar</button>
                                              <a href="<?=base_url() ?>" class="btn btn--radius-2 btn--danger" style="background-color: #f55a42;text-decoration:none;">Keluar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url() ?>assets/register/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url() ?>assets/register/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url() ?>assets/register/vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/register/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url() ?>assets/js/sweetalert.min.js"></script>
    <script src="<?= base_url() ?>assets/register/js/global.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>

</body>

</html>
<!-- end document-->