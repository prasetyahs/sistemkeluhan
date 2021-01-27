<?php   $this->session->set_flashdata('message', '');
        $this->session->set_flashdata('istrue', ''); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Pelanggan</h1>
                
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-table fa-fw"></i>
                        Data Pelanggan
                    </div>
                    <div class="panel-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Data</button>
                        <div class="table-responsive" style="height: auto; width:auto;margin-top:10px">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Alamat Pelanggan</th>
                                        <th>No telp</th>
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
                                                <td><?= $i ?> </td>
                                                <td><?= $row['username'] ?></td>
                                                <td><?= $row['nama'] ?></td>
                                                <td><?= $row['alamat'] ?></td>
                                                <td><?= $row['no_telp'] ?></td>
                                                <td style='text-align:center;'>
                                                    <a class='btn btn-primary' href="<?= base_url()?>dashboard/getEditPelangganById/<?= $row['id_pengguna']?>">
                                                        <i class='fa fa-edit' aria-hidden='true' title='Copy to use eye'></i></a>
                                                    <a class='btn btn-danger'  href='<?=base_url() ?>dashboard/deleteUsers/<?= $row['id_pengguna']?>'>
                                                        <i class='fa fa-trash' aria-hidden='true' title='Copy to use eye'></i></a>

                                                </td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <?= $links ?>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Pelanggan</h4>
            </div>
            <form action="saveCustomer" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" class="form-control" name="username" required placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="nama" required placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="nama">No Telepon</label>
                    <input type="text" class="form-control" name="no_telp" required placeholder="No telepon">
                </div>
                <div class="form-group">
                    <label for="nama">Password</label>
                    <input type="password" name="password" class="form-control" required placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Pelanggan</label>
                    <textarea class="form-control" rows="3" placeholder="Alamat" required name="alamat" style="resize:none"></textarea>
                </div>
            </div>

            <div class="modal-footer">
            
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
            </div>
            </form>
        </div>

    </div>
</div>

<!-- Modal Edit Pelanggan-->
<div id="myModal_EditPelanggan" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Data Pelanggan</h4>
            </div>
            <form action="" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" class="form-control" name="username" required placeholder="Username" value="">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="nama" required placeholder="Nama" value="">
                </div>
                <div class="form-group">
                    <label for="nama">No Telepon</label>
                    <input type="text" class="form-control" name="notelp" required placeholder="No telepon">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Pelanggan</label>
                    <textarea class="form-control" rows="3" placeholder="Alamat" required name="alamat" style="resize:none"></textarea>
                </div>
            </div>

            <div class="modal-footer">
            
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
            </div>
            </form>
        </div>

    </div>
</div>

<script></script>