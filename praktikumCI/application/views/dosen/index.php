<div class="col-md-12">
    <h3>
        Daftar DOSEN Pengajar
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>GENDER</th>
                <th>NIPD</th>
                <th>pendidikan</th>
                <th>smester</th>
                <th>matkul</th>
                <th>hari</th>
                <th>ruangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_dsn as $dsn) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $dsn->nama ?></td>
                    <td><?= $dsn->tmp_lahir ?></td>
                    <td><?= $dsn->tgl_lahir ?></td>
                    <td><?= $dsn->gender ?></td>
                    <td><?= $dsn->nipd ?></td>
                    <td><?= $dsn->pendidikan ?></td>
                    <td><?= $dsn->semester ?></td>
                    <td><?= $dsn->matkul ?></td>
                    <td><?= $dsn->hari ?></td>
                    <td><?= $dsn->ruangan ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>