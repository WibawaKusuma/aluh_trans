<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><?= !empty($reservation) ? 'Edit Reservation' : 'Create Reservation' ?></h5>
        </div>

        <div class="card-body">
            <form action="<?= isset($reservation) ? base_url('reservation/update/' . $reservation->NoReservasi) : base_url('reservation/store') ?>" method="post">
                <div class="form-group row" hidden>
                    <input type="text" id="NoReservasi" name="p[NoReservasi]" class="form-control" value="<?= isset($reservation) ? $reservation->NoReservasi : $NoReservasi ?>" readonly>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Name*</label>
                            <div class="col-sm-9">
                                <input type="text" id="nama" name="p[Nama]" value="<?= isset($reservation) ? $reservation->Nama : '' ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row" hidden>
                            <label for="asal" class="col-sm-3 col-form-label">Asal</label>
                            <div class="col-sm-9">
                                <input type="text" id="asal" name="p[Asal]" value="<?= isset($reservation) ? $reservation->Asal : '' ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row" hidden>
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" id="alamat" name="p[Alamat]" value="<?= isset($reservation) ? $reservation->Alamat : '' ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="noTelpon" class="col-sm-3 col-form-label">No WhatsApp*</label>
                            <div class="col-sm-9">
                                <input type="text" id="noTelpon" name="p[NoTelpon]" value="<?= isset($reservation) ? $reservation->NoTelpon : '' ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="NoPassport" class="col-sm-3 col-form-label">No Passport*</label>
                            <div class="col-sm-9">
                                <input type="text" id="NoPassport" name="p[NoPassport]" value="<?= isset($reservation) ? $reservation->NoPassport : '' ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-3 col-form-label">Jumlah Pax</label>
                            <div class="col-sm-9">
                                <input type="text" id="jumlah" name="p[Jumlah]" value="<?= isset($reservation) ? $reservation->Jumlah : '' ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="package" class="col-sm-3 col-form-label">Package*</label>
                            <div class="col-sm-9">
                                <select name="p[id_package]" id="package" class="form-control">
                                    <option value="">Choose Package</option>
                                    <?php foreach ($package as $k): ?>
                                        <option value="<?php echo $k->id_package; ?>"
                                            <?php echo (!empty($reservation) && $reservation->id_package == $k->id_package) ? 'selected' : ''; ?>>
                                            <?php echo $k->name; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="product-category" class="col-sm-3 col-form-label">Destination*</label>
                            <div class="col-sm-9">
                                <select id="product-category" name="p[product-category]" class="form-control">
                                    <option value="" disabled selected>Choose Destination</option>
                                    <option value="ubud">Ubud</option>
                                    <option value="badung">Badung</option>
                                    <option value="bangli">Bangli</option>
                                    <option value="singaraja">Singaraja</option>
                                </select>
                            </div>
                        </div> -->
                        <!-- <div class="form-group row">
                            <label for="role" class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <select name="p[role_id]" id="role" class="form-control">
                                    <option value="">Pilih Role</option>
                                    <?php foreach ($role as $k): ?>
                                        <option value="<?php echo $k->id; ?>"
                                            <?php echo (!empty($member) && $member->role_id == $k->id) ? 'selected' : ''; ?>>
                                            <?php echo $k->role; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="DPPayment" class="col-sm-3 col-form-label">DP Payment*</label>
                            <div class="col-sm-9">
                                <input type="text" id="DPPayment" name="p[DPPayment]" value="<?= isset($reservation) ? $reservation->DPPayment : '' ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="UntukTanggal" class="col-sm-3 col-form-label">For Date*</label>
                            <div class="col-sm-9">
                                <input type="date" id="UntukTanggal" name="p[UntukTanggal]" value="<?= isset($reservation) ? $reservation->UntukTanggal : '' ?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-11 offset-sm-1 d-flex justify-content-end">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> <?= isset($reservation) ? 'Update' : 'Save' ?></button>
                        <a href="<?= base_url('reservation') ?>" class="btn btn-danger ml-2"><i class="fa fa-arrow-left"></i> Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>