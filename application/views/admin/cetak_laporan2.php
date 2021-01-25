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
                                                    <td><?= $row['nama_keluhanplgn'] ?></td>
                                                    <td><?= $row['tanggal'] ?></td>
                                                    <td><?= $row['pesan'] ?> </td>
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