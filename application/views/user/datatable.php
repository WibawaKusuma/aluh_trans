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

        .user-datatable-container {
            padding: 20px;
        }

        .user-datatable-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: all var(--transition-speed) ease;
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            padding: 20px;
            border: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-header h4 {
            color: white;
            font-weight: 500;
            margin: 0;
            display: flex;
            align-items: center;
        }

        .card-header h4 i {
            margin-right: 10px;
        }

        .card-body {
            padding: 25px;
        }

        .btn-add {
            background: white;
            color: var(--primary-color);
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--transition-speed) ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            border: none;
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 10;
        }

        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background: white;
            color: var(--secondary-color);
        }

        .btn-add i {
            font-size: 16px;
        }

        .table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            border-radius: 8px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #f8f9fa;
            color: var(--dark-color);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
            padding: 15px;
            border-top: none;
            border-bottom: 2px solid #e9ecef;
            vertical-align: middle;
        }

        .table tbody td {
            padding: 15px;
            vertical-align: middle;
            border-top: 1px solid #f2f2f2;
            font-size: 14px;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.02);
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.03);
        }

        .status-badge {
            padding: 6px 12px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 12px;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-active {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
            border: 1px solid rgba(40, 167, 69, 0.2);
        }

        .status-inactive {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger-color);
            border: 1px solid rgba(220, 53, 69, 0.2);
        }

        .role-badge {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 12px;
        }

        .role-admin {
            background-color: rgba(1, 75, 133, 0.1);
            color: var(--primary-color);
            border: 1px solid rgba(1, 75, 133, 0.2);
        }

        .role-member {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
            border: 1px solid rgba(40, 167, 69, 0.2);
        }

        .role-vendor {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning-color);
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .btn-action {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all var(--transition-speed) ease;
            border: none;
        }

        .btn-edit {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning-color);
        }

        .btn-edit:hover {
            background-color: var(--warning-color);
            color: white;
            transform: translateY(-2px);
        }

        .btn-delete {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger-color);
        }

        .btn-delete:hover {
            background-color: var(--danger-color);
            color: white;
            transform: translateY(-2px);
        }

        .alert-custom {
            border-radius: 10px;
            border: none;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 20px;
        }

        .alert-success {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
            border-left: 4px solid var(--success-color);
        }

        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter {
            margin-bottom: 20px;
        }

        .dataTables_wrapper .dataTables_length select,
        .dataTables_wrapper .dataTables_filter input {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 6px 12px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            border-radius: 8px;
            margin: 0 3px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: white !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: var(--secondary-color);
            border-color: var(--secondary-color);
            color: white !important;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <!-- Alert for success message -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-custom alert-dismissible fade show" role="alert" id="success-alert">
            <i class="fa fa-check-circle mr-2"></i> <?= $this->session->flashdata('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="user-datatable-container">
        <div class="user-datatable-card card">
            <div class="card-header">
                <h4 class="mb-0 text-white">
                    <i class="fa fa-users"></i> Manajemen User
                </h4>
                <a href="<?= base_url('user/create') ?>" class="btn-add" title="Tambah User Baru">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="15%">Nama</th>
                                <th width="20%">Email</th>
                                <th width="12%">No Telpon</th>
                                <th width="8%">Role</th>
                                <th width="10%">Status</th>
                                <th width="15%">Tanggal Join</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($member as $k) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><?= $k->name ?></td>
                                    <td><?= $k->email ?></td>
                                    <td><?= $k->no_telpon ?></td>
                                    <td class="text-center">
                                        <?php if ($k->role_id == 1) { ?>
                                            <span class="role-badge role-admin" title="Admin">A</span>
                                        <?php } elseif ($k->role_id == 2) { ?>
                                            <span class="role-badge role-member" title="Member">M</span>
                                        <?php } else { ?>
                                            <span class="role-badge role-vendor" title="Vendor">V</span>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($k->is_active == 1) { ?>
                                            <span class="status-badge status-active">Aktif</span>
                                        <?php } else { ?>
                                            <span class="status-badge status-inactive">Non-aktif</span>
                                        <?php } ?>
                                    </td>
                                    <td><?= date('d M Y', strtotime($k->date_created)) ?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="<?= base_url('user/update/' . $k->user_id) ?>" class="btn-action btn-edit" title="Edit User">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="<?= base_url('user/delete/' . $k->user_id) ?>" class="btn-action btn-delete"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?');" title="Hapus User">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Script for the alert -->
    <script>
        $(document).ready(function() {
            // Set a timeout to hide the alert after 3 seconds
            setTimeout(function() {
                $('#success-alert').fadeOut('slow');
            }, 3000);

            // Initialize DataTable with custom options
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
                "dom": '<"top"f>rt<"bottom"ip>',
                "language": {
                    "lengthMenu": "Tampilkan _MENU_ data per halaman",
                    "zeroRecords": "Tidak ada data yang ditemukan",
                    "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tidak ada data yang tersedia",
                    "infoFiltered": "(difilter dari _MAX_ total data)",
                    "search": "Cari:",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya"
                    }
                }
            });
        });
    </script>