<style>
    #reset_button {
        border: 1px solid lightgray;
        border-radius: 0.25rem;
    }

    /* #reset_button:hover {
        background-color: #e9ecef;
    } */
</style>
<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
        <?= $this->session->flashdata('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-header text-right">
        <a href="<?= base_url('reservation/create') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
    </div>
    <div class="card-body">
        <form id="reservationForm" method="POST" action="<?= base_url('reservation') ?>">
            <div class="form-inline mb-3">
                <input type="date" name="start_date" id="start_date" class="form-control mr-3 col-sm-2" value="<?= isset($_POST['start_date']) ? $_POST['start_date'] : date('Y-m-d') ?>">
                <label for=""> <i class="fa fa-arrow-right" aria-hidden="true"></i></label>
                <input type="date" name="end_date" id="end_date" class="form-control ml-3 col-sm-2" value="<?= isset($_POST['end_date']) ? $_POST['end_date'] : date('Y-m-d') ?>">
                <button type="button" id="reset_button" class="btn ml-3"><i class="fas fa-undo"></i></button>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered text-center" id="example1">
                <thead class="thead-info">
                    <tr>
                        <th>No Reservasi</th>
                        <th>No Passport</th>
                        <th>Nama</th>
                        <th>No Telpon</th>
                        <th>Tanggal Reservasi</th>
                        <th><i class="fa fa-gear"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reservations as $k): ?>
                        <tr>
                            <td><?= $k->NoReservasi ?></td>
                            <td><?= $k->NoPassport ?></td>
                            <td><?= $k->Nama ?></td>
                            <td><?= $k->NoTelpon ?></td>
                            <td><?= $k->UntukTanggal ?></td>
                            <td>
                                <a href="<?= base_url('reservation/update/' . $k->NoReservasi) ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <a href="<?= base_url('reservation/delete/' . $k->NoReservasi) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this reservation?');">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#success-alert').fadeOut('slow');
        }, 3000); // 5000 milliseconds = 5 seconds

        $('#start_date, #end_date').on('change', function() {
            $('#reservationForm').submit();
        });

        $('#reset_button').on('click', function() {
            let today = new Date().toISOString().split('T')[0];
            $('#start_date').val(today);
            $('#end_date').val(today);
            $('#reservationForm').submit();
        });
    });
</script>