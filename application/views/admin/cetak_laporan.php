    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Keluhan</th>
                <th>Keluhan</th>
                <th>Tanggal</th>
                <th>Pesan</th>
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
                    </tr>
                <?php } ?>
            <?php } else {  ?>
                <td colspan="9" class="text-center">Data Keluhan Tidak Tersedia</td>
            <?php } ?>
        </tbody>
    </table>
<script>
    window.print();
    console.log("saas");
</script>