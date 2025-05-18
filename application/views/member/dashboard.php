<div class="row">
    <div class="col-md-12 text-center">
        <h5> Hallo, <?= $user['name'] ?> </h5>
    </div>
</div>
<table class="table table-striped table-hover table-bordered" id="example1">
    <thead class="thead-info">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Alamat</th>
            <th>No Telpon</th>
            <th>Jumlah</th>
            <th>Tanggal Reservasi</th>
            <th><i class="fa fa-gear text-center"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($reservations as $k): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $k->Nama ?></td>
                <td><?= $k->Asal ?></td>
                <td><?= $k->Alamat ?></td>
                <td><?= $k->NoTelpon ?></td>
                <td><?= $k->Jumlah ?></td>
                <td><?= $k->UntukTanggal ?></td>
                <td>
                    <a href="<?= base_url('reservation//' . $k->NoReservasi) ?>" class="btn btn-success btn-sm text-center">
                        <i class="fa fa-plus"></i> proses
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>