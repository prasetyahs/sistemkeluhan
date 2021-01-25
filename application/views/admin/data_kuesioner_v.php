<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Kuesioner</h1>
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
                        <div class="table-responsive" style="height: 40%; width: 100%; overflow: auto;margin-top:15px">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Pertanyaan 1</th>
                                        <th>Pertanyaan 2</th>
                                        <th>Pertanyaan 3</th>
                                        <th>Pertanyaan 4</th>
                                        <th>Pertanyaan 5</th>
                                        <th>Pesan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($kuesioner) > 0) {
                                        $i = 0;


                                        foreach ($kuesioner as $key => $row) {
                                            $i += 1;
                                    ?>
                                            <tr class="even">
                                                <td><?= $i ?>.</td>
                                                <td><?= $row['nama'] ?></td>
                                                <td><?= $row['pertanyaan_satu'] ?></td>
                                                <td><?= $row['pertanyaan_dua'] ?></td>
                                                <td><?= $row['pertanyaan_tiga'] ?></td>
                                                <td><?= $row['pertanyaan_empat'] ?> </td>
                                                <td><?= $row['pertanyaan_lima']  ?></td>
                                                <td><?= $row['pesan']  ?></td>
                                            </tr>
                                        <?php }
                                    } else { ?>
                                        <tr class='even gradeA'>
                                            <td colspan="8" class="text-center">Data Keluhan Tidak Tersedia</td>
                                        </tr>
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
            <!-- <div class="col-lg-12">
                <?= $links ?>
            </div> -->
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->