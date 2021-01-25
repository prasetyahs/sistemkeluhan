<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PT Amartha Sejahtera Metland Cibitung</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Tentang</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Galeri</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Kontak</a></li>
                <?php if (!empty($users)) { ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="" data-toggle="modal" data-target="#exampleModal">Pengaduan</a></li>
                    <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="" data-toggle="modal" data-target="#classModal">Kuesioner</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="" data-toggle="modal" data-target="#modalSimulasi">Simulasi</a></li>
                <?php } ?>
                <?php if (empty($users)) { ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login">Login</a></li>
                <?php } else { ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login"><?= $users['nama'] ?></a></li>
                <?php } ?>
                <?php if (!empty($users)) { ?>
                    <li class="nav-item"><a href="home/logout" title="Keluar"><i class="fas fa-sign-out-alt fa-lg"></i></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>