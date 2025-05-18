<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

<style>
    :root {
        --primary-color: #014b85;
        --secondary-color: #0a2e50;
        --accent-color: #3498db;
        --light-color: #f8f9fa;
        --dark-color: #343a40;
        --success-color: #28a745;
        --danger-color: #dc3545;
        --warning-color: #ffc107;
        --info-color: #17a2b8;
        --transition-speed: 0.3s;
    }

    .user-form-container {
        padding: 20px;
    }

    .user-form-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: all var(--transition-speed) ease;
    }

    .user-form-card:hover {
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .card-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        padding: 20px;
        border: none;
    }

    .card-header h4 {
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    .card-body {
        padding: 30px;
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
    }

    .form-control {
        height: 45px;
        border-radius: 8px;
        border: 1px solid #ddd;
        transition: all var(--transition-speed) ease;
    }

    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.2rem rgba(1, 75, 133, 0.25);
    }

    .form-label {
        font-weight: 500;
        color: var(--dark-color);
        display: flex;
        align-items: center;
        margin-bottom: 8px;
    }

    .form-label i {
        margin-right: 8px;
        color: var(--primary-color);
        width: 20px;
        text-align: center;
    }

    .form-select {
        height: 45px;
        border-radius: 8px;
    }

    .form-check-input {
        width: 18px;
        height: 18px;
        margin-top: 0.25rem;
    }

    .form-check-label {
        margin-left: 5px;
        font-weight: 400;
    }

    .btn {
        border-radius: 8px;
        padding: 10px 20px;
        font-weight: 500;
        letter-spacing: 0.5px;
        transition: all var(--transition-speed) ease;
    }

    .btn-primary {
        background: var(--primary-color);
        border-color: var(--primary-color);
    }

    .btn-primary:hover {
        background: var(--secondary-color);
        border-color: var(--secondary-color);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(1, 75, 133, 0.3);
    }

    .btn-danger {
        background: var(--danger-color);
        border-color: var(--danger-color);
    }

    .btn-danger:hover {
        background: #c82333;
        border-color: #bd2130;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
    }

    .form-section {
        background: #f9f9f9;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .form-section-title {
        color: var(--primary-color);
        font-size: 18px;
        font-weight: 500;
        margin-bottom: 15px;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .form-section-title i {
        margin-right: 10px;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .card-body {
            padding: 20px;
        }

        .form-label {
            margin-bottom: 0.5rem;
        }
    }

    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

<div class="user-form-container">
    <div class="user-form-card card">
        <div class="card-header">
            <h4 class="mb-0 text-white">
                <i class="fa fa-user-edit mr-2"></i>
                <?= !empty($member) ? 'Edit User' : 'Buat User Baru' ?>
            </h4>
        </div>
        <div class="card-body">
            <form action="<?= !empty($member) ? base_url('user/update/' . $member->user_id) : base_url('user/create_user') ?>" method="post">
                <!-- Hidden fields -->
                <input type="hidden" name="p[user_id]" value="<?= !empty($member) ? $member->user_id : '' ?>">
                <input type="hidden" name="p[image]" value="default.jpg">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-section">
                            <h5 class="form-section-title">
                                <i class="fa fa-user-circle"></i> Informasi Dasar
                            </h5>

                            <div class="form-group">
                                <label for="name" class="form-label">
                                    <i class="fa fa-user"></i> Nama Lengkap
                                </label>
                                <input type="text" id="name" name="p[name]" value="<?= !empty($member) ? $member->name : '' ?>"
                                    placeholder="Masukkan nama lengkap" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">
                                    <i class="fa fa-envelope"></i> Email
                                </label>
                                <input type="email" id="email" name="p[email]" value="<?= !empty($member) ? $member->email : '' ?>"
                                    placeholder="Masukkan alamat email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password" class="form-label">
                                    <i class="fa fa-lock"></i> Password
                                </label>
                                <input type="password" id="password" name="p[password]" value="<?= !empty($member) ? $member->password : '' ?>"
                                    placeholder="<?= !empty($member) ? 'Biarkan kosong jika tidak ingin mengubah' : 'Masukkan password' ?>"
                                    class="form-control" <?= empty($member) ? 'required' : '' ?>>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-section">
                            <h5 class="form-section-title">
                                <i class="fa fa-address-card"></i> Informasi Kontak
                            </h5>

                            <div class="form-group">
                                <label for="no_telpon" class="form-label">
                                    <i class="fa fa-phone"></i> Nomor Telepon
                                </label>
                                <input type="text" id="no_telpon" name="p[no_telpon]" value="<?= !empty($member) ? $member->no_telpon : '' ?>"
                                    placeholder="Masukkan nomor telepon" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="address" class="form-label">
                                    <i class="fa fa-map-marker"></i> Alamat
                                </label>
                                <input type="text" id="address" name="p[address]" value="<?= !empty($member) ? $member->address : '' ?>"
                                    placeholder="Masukkan alamat lengkap" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-6">
                        <div class="form-section">
                            <h5 class="form-section-title">
                                <i class="fa fa-cog"></i> Informasi Akun
                            </h5>

                            <div class="form-group">
                                <label for="role" class="form-label">
                                    <i class="fa fa-user-tag"></i> Role
                                </label>
                                <select name="p[role_id]" id="role" class="form-control form-select" required>
                                    <option value="">Pilih Role</option>
                                    <?php foreach ($role as $k): ?>
                                        <option value="<?php echo $k->id; ?>"
                                            <?php echo (!empty($member) && $member->role_id == $k->id) ? 'selected' : ''; ?>>
                                            <?php echo $k->role; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="supplier" class="form-label">
                                    <i class="fa fa-building"></i> Asal
                                </label>
                                <select name="p[id_supplier]" id="supplier" class="form-control form-select">
                                    <option value="">Pilih Asal</option>
                                    <?php foreach ($company as $c): ?>
                                        <option value="<?php echo $c->id_supplier; ?>"
                                            <?php echo (!empty($member) && $member->id_supplier == $c->id_supplier) ? 'selected' : ''; ?>>
                                            <?php echo $c->supplier_name; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fa fa-toggle-on"></i> Status Akun
                                </label>
                                <div class="mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p[is_active]" id="active"
                                            value="1" <?= !empty($member) && $member->is_active == 1 ? 'checked' : (!empty($member) ? '' : 'checked') ?>>
                                        <label class="form-check-label" for="active">Aktif</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p[is_active]" id="inactive"
                                            value="0" <?= !empty($member) && $member->is_active == 0 ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="inactive">Tidak Aktif</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4 text-right">
                    <a href="<?= base_url('user') ?>" class="btn btn-danger">
                        <i class="fa fa-times mr-1"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-primary ml-2">
                        <i class="fa fa-save mr-1"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>