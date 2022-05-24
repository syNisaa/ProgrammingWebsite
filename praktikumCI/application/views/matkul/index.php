<div class="col-md-12">
    <h3>
        Daftar MATAKULIAH Pembelajaran
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>KODE</th>
                <th>smester</th>
                <th>DOSEN</th>
                <th>matkul</th>
                <th>hari</th>
                <th>ruangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_mt as $mt) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $mt->nama ?></td>
                    <td><?= $mt->sks ?></td>
                    <td><?= $mt->kode ?></td>
                    <td><?= $mt->semester ?></td>
                    <td><?= $mt->dosen ?></td>
                    <td><?= $mt->matkul ?></td>
                    <td><?= $mt->hari ?></td>
                    <td><?= $mt->ruangan ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>