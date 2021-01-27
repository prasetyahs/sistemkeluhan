<?php   $this->session->set_flashdata('message', '');
        $this->session->set_flashdata('istrue', ''); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Jenis Keluhan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-table fa-fw"></i>
                        Data Jenis Keluhan
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="form-group">
                        <a class="nav-link js-scroll-trigger btn btn-primary" href="" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>
                        </div>
                        <div class="table-responsive" style="height: 40%; width: 100%; overflow: auto;margin-top:15px">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama keluhan</th>
                                        <th>Jenis Keluhan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($keluhan) > 0) {
                                        $i = 0;
                                        foreach ($keluhan as $key => $row) {
                                            $i += 1;
                                    ?>
                                            <tr class='even gradeA'>
                                                <td><?= $i ?>.</td>
                                                <td><?= $row['nama_keluhanplgn'] ?></td>
                                                <td><?= $row['jenis_keluhan'] ?></td>
                                                <td>
                                                    <div class="form-group">
                                                        <a class="btn btn-primary"  href="<?= base_url()."dashboard/editform/".$row['id_keluhanplgn']?>"><i class="fa fa-edit"></i></a>
                                                        <a class="btn btn-danger" href="<?= base_url()."dashboard/deleteReport/".$row['id_keluhanplgn']?>"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
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
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">  
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow-x: auto;">
                    <form class="form" id="form1" method="post" action="addkeluhan">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nama Keluhan</label>
                            <input type="text" name="namakeluhan" id="name" class="form-control">
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
                    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <input type="button" id="sendreport" class="btn btn-primary" value="Tambah Keluhan">
                </div>
            </div>
        </div>
    </div>  