<?php $this->session->set_flashdata('message', '');
$this->session->set_flashdata('istrue', ''); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Keluhan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-table fa-fw"></i>
                        Data Keluhan
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <div class="form-group">
                            <a class='btn btn-primary' href='<?= base_url(); ?>dashboard/cetaklaporan'><i class="fa fa-fw" aria-hidden="true" title="Copy to use print">&#xf02f</i> Buat Laporan</a>
                        </div>


                        <div class="table-responsive" style="height: 40%; width: 100%; overflow: auto;margin-top:15px">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Jenis Keluhan</th>
                                        <th>Keluhan</th>
                                        <th>Tanggal</th>
                                        <th>Pesan</th>
                                        <th>Nilai Alternatif</th>
                                        <th>Label</th>
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
                                                <td><?= $row['keluhan'] ?></td>
                                                <td><?= $row['tanggal'] ?></td>
                                                <td><?= $row['pesan'] ?> </td>
                                                <td><?= $row['nilai_alternatif']  ?></td>
                                                <?php if ($row['nilai_alternatif'] == $max) { ?>
                                                    <td><span class="badge badge-pill badge-primary" style="background-color: green;">Prioritas Utama</span></td>
                                                <?php } else { ?>
                                                    <td><span class="badge badge-pill badge-warning" style="background-color: blue;">Non Prioritas</span></td>
                                                <?php } ?>
                                                <td style='text-align:center;'><a class='btn btn-primary' href='<?= base_url() ?>dashboard/processstatus/<?= $row['id_keluhan'] ?>'>
                                                        <i class='fa fa-fw' aria-hidden='true' title='Copy to use eye'>&#xf06e</i></a></td>
                                            </tr>
                                        <?php } ?>
                                    <?php } else {  ?>
                                        <td colspan="9" class="text-center">Data Keluhan Tidak Tersedia</td>
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