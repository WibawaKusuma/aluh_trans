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

        .armada-form-container {
            padding: 20px;
        }

        .armada-form-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all var(--transition-speed) ease;
        }

        .armada-form-card:hover {
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
            display: flex;
            align-items: center;
        }

        .card-header h4 i {
            margin-right: 10px;
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

        .img-preview {
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: all var(--transition-speed) ease;
        }

        .img-preview:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .custom-file-input {
            cursor: pointer;
        }

        .custom-file-label {
            border-radius: 8px;
            height: 45px;
            padding-top: 10px;
        }

        .custom-file-label::after {
            height: 43px;
            padding-top: 10px;
            background-color: var(--primary-color);
            color: white;
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

    <div class="armada-form-container">
        <div class="armada-form-card card">
            <div class="card-header">
                <h4 class="mb-0 text-white">
                    <i class="fa fa-car"></i> <?= !empty($armada) ? 'Edit Armada' : 'Tambah Armada Baru' ?>
                </h4>
            </div>
            <div class="card-body">
                <form action="<?= !empty($armada) ? base_url('armada/update/' . $armada->id_armada) : base_url('armada/create_armada') ?>" method="post" enctype="multipart/form-data">
                    <!-- Hidden field untuk ID -->
                    <input type="hidden" name="p[id_armada]" value="<?= !empty($armada) ? $armada->id_armada : '' ?>">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-section">
                                <h5 class="form-section-title">
                                    <i class="fa fa-info-circle"></i> Informasi Armada
                                </h5>

                                <div class="form-group">
                                    <label for="kode_armada" class="form-label">
                                        <i class="fa fa-barcode"></i> Kode Armada
                                    </label>
                                    <input type="text" id="kode_armada" name="p[kode_armada]" value="<?= !empty($armada) ? $armada->kode_armada : '' ?>"
                                        placeholder="Masukkan kode armada" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="nama" class="form-label">
                                        <i class="fa fa-tag"></i> Nama Armada
                                    </label>
                                    <input type="text" id="nama" name="p[nama]" value="<?= !empty($armada) ? $armada->nama : '' ?>"
                                        placeholder="Masukkan nama armada" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="type" class="form-label">
                                        <i class="fa fa-truck"></i> Tipe Kendaraan
                                    </label>
                                    <input type="text" id="type" name="p[type]" value="<?= !empty($armada) ? $armada->type : '' ?>"
                                        placeholder="Masukkan tipe kendaraan" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="tahun" class="form-label">
                                        <i class="fa fa-calendar"></i> Tahun Produksi
                                    </label>
                                    <input type="text" id="tahun" name="p[tahun]" value="<?= !empty($armada) ? $armada->tahun : '' ?>"
                                        placeholder="Masukkan tahun produksi" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fa fa-toggle-on"></i> Status Armada
                                    </label>
                                    <div class="mt-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="p[status]" id="active"
                                                value="1" <?= !empty($armada) && $armada->status == 1 ? 'checked' : (!empty($armada) ? '' : 'checked') ?>>
                                            <label class="form-check-label" for="active">Aktif</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="p[status]" id="inactive"
                                                value="0" <?= !empty($armada) && $armada->status == 0 ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="inactive">Tidak Aktif</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-section">
                                <h5 class="form-section-title">
                                    <i class="fa fa-image"></i> Foto Armada
                                </h5>

                                <div class="form-group">
                                    <label for="image" class="form-label">
                                        <i class="fa fa-upload"></i> Unggah Gambar
                                    </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*" <?= empty($armada) ? 'required' : '' ?>>
                                        <label class="custom-file-label" for="image">Pilih file gambar...</label>
                                    </div>
                                    <?php if (!empty($armada) && !empty($armada->image)): ?>
                                        <div class="mt-3">
                                            <p class="text-muted mb-2">Gambar saat ini:</p>
                                            <img src="<?= base_url('assets/template/img/armada/' . $armada->image) ?>" class="img-thumbnail img-preview" width="200" alt="Current Image">
                                            <input type="hidden" name="old_image" value="<?= $armada->image ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4 text-right">
                        <a href="<?= base_url('armada') ?>" class="btn btn-danger">
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

    <!-- Script untuk custom file input -->
    <script>
        $(document).ready(function() {
            // Menampilkan nama file yang dipilih pada custom file input
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });
        });
    </script>