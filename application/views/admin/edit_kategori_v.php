<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Kategori Keluhan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-table fa-fw"></i>
                        Edit Kategori Keluhan
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="<?= base_url(); ?>dashboard/updateKatagoriKeluhan/" method="POST">
                                    <div class="form-group">
                                        <label> Nama Keluhan</label>
                                        <input class="form-control" type="text" name="nama" value="<?= $report['nama_keluhanplgn']  ?>">
                                        <input class="form-control" type="hidden" name="id" value="<?= $report['id_keluhanplgn']  ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Jenis_Keluhan">Jenis Keluhan</label>
                                        <select class="form-control" id="sel2" name="jeniskeluhan">
                                            <option value="default" disabled selected>--Pilih--</option>
                                            <?php
                                            foreach ($kategori as $key => $val) { ?>
                                                <option value="<?= $val['id_jnskeluhan'] ?>" selected><?= $val['jenis_keluhan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary" style="margin-top: 30px;" name="submit">Simpan</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->