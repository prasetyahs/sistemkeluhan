            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tambah Data Keluhan</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    + Tambah Data Keluhan
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                        
                                            <form role="form" action="../proses/cektambah_kar.php" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Jabatan</label>
                                                    <select class="form-control" name="id_jabatan" id="jabatan" onchange="changeValue()">
                                                        <option>--- Pilih Jabatan ---</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input class="form-control" type="text" name="nama">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <select class="form-control" name="jk">
                                                        <option>--- Pilih Jenis Kelamin ---</option>
                                                        <option>Laki - laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" rows="3" name="alamat"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>No Telp</label>
                                                    <input class="form-control" type="number" min="0" name="no_telp" placeholder="08xxx">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tempat lahir</label>
                                                    <input class="form-control" type="text" name="tmp_lahir">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal lahir</label>
                                                    <input class="form-control" type="date" id="tgl_lahir" name="tgl_lahir" min="1994-12-31" max="2002-12-31">
                                                </div>
                                                <div class="form-group">
                                                    <label>Awal Kontrak</label>
                                                    <input class="form-control" type="date" id="awal_kontrak" name="awal_kontrak">
                                                </div>
                                                <div class="form-group">
                                                    <label>Foto</label>
                                                    <input type="file" name="foto">
                                                </div>

                                                <br>
                                                <br>

                                                <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
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