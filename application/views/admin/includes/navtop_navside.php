    <body style="background-color: #343a40;">

        <div id="wrapper">

            <nav class="navbar navbar-fixed-top bg-primary" role="navigation">
                <!-- Navbar Top-Start -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="">
                        <font color='white'>PT Amartha Sejahtera Metland Cibitung</font>
                    </a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">
                            <i class="fa fa-user fa-fw"></i>
                            <font color='white'><?= $this->session->userdata('users')["nama"]; ?></font><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?= base_url() ?>dashboard/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Navbar Top-End -->

                <!-- Navbar Side-Start -->
                <div class="navbar-default sidebar" role="navigation" style="background-color: #343a40;">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <img src="">
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?= base_url() ?>dashboard/index" class="active" style="background-color: #343a40; color:white"><i class="fa fa-fw" aria-hidden="true" style="color:white">&#xf015</i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>dashboard/dataKeluhan" style="background-color: #343a40; color:white"><i class="fa fa-table fa-fw" aria-hidden="true" style="color:white padding-right: 23px;"></i> Data Keluhan</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>dashboard/datapengecekan" style="background-color: #343a40; color:white"><i class="fa fa-check fa-fw" aria-hidden="true" style="color: white; padding-right: 23px;"></i>Data Pengecekan</a>
                            </li>
                            <?php if($this->session->userdata('users')["tipe"] =="admin"){?>
                            <li>
                                <a href="<?= base_url() ?>dashboard/dataPelanggan" style="background-color: #343a40; color:white"><i class="fa fa-users fa-fw" aria-hidden="true" style="color:white padding-right: 23px;"></i> Data Pelanggan</a>
                            </li>
                            <!-- <li>
                                <a href="<?= base_url() ?>dashboard/dataKuesioner" style="background-color: #343a40; color:white"><i class="fa fa-book fa-fw" aria-hidden="true" style="color:white padding-right: 23px;"></i> Data Kuesioner</a>
                            </li> -->
                            <li>
                                <a href="<?= base_url() ?>dashboard/dataCategory" style="background-color: #343a40; color:white"><i class="fa fa-list-alt fa-fw" aria-hidden="true" style="color:white padding-right: 23px;"></i> Data Jenis Keluhan</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <!-- Navbar Side-End -->
            </nav>