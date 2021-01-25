<?php   $this->session->set_flashdata('message', '');
        $this->session->set_flashdata('istrue', ''); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Pengecekan Keluhan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-table fa-fw"></i>
                        Data Pengecekan
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <div class="form-group">
                            <a href="<?= base_url()?>dashboard/cetakLaporan2" class='btn btn-primary' href=''><i class="fa fa-fw" aria-hidden="true" title="Copy to use print">&#xf02f</i> Buat Laporan</a>
                        </div>

                        <!-- <button herf="" class="btn btn-primary pull-left print">
                                <i class="fa fa-fw" aria-hidden="true" title="Copy to use print">&#xf02f</i>Cetak Laporan</button> -->

                        <div class="table-responsive" style="height: 40%; width: 100%; overflow: auto;">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Jenis Keluhan</th>
                                        <th>Keluhan</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Konfirmasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($results) > 0) {
                                        $i = 0;
                                        foreach ($results as $key => $row) {
                                            $i += 1;
                                    ?>
                                            <tr class='even gradeA'>
                                                <td><?= $i ?>.</td>
                                                <td><?= $row['nama'] ?></td>
                                                <td><?= $row['jenis_keluhan'] ?></td>
                                                <td><?= $row['nama_keluhanplgn'] ?></td>
                                                <td><?= $row['tanggal'] ?></td>
                                                <td><?= $row['status'] ?></td>
                                                <?php if($row['status'] != "Selesai diperbaiki"){?>
                                                <td style='text-align:center;'><a class='btn btn-primary' href='<?= base_url()?>dashboard/statusSelesaiDiperbaiki/<?= $row['id_keluhan'] ?>'>
                                                        <i class='fa fa-check fa-fw' aria-hidden='true' title='Copy to use eye'></i></a></td>
                                                <?php }else{?>
                                                    <td style='text-align:center;'><a class='btn btn-success'>
                                                        <i class='fa fa-check fa-fw' aria-hidden='true' title='Copy to use eye'></i></a></td>
                                                <?php }; ?>
                                            </tr>
                                        <?php } ?>
                                    <?php } else {  ?>
                                        <td colspan="8" class="text-center">Data Tidak Tersedia</td>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <div class="col-lg-12">
                <?= $links ?>
            </div>
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->