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

        .destination-form-container {
            padding: 20px;
        }

        .destination-form-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all var(--transition-speed) ease;
        }

        .destination-form-card:hover {
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

    <div class="destination-form-container">
        <div class="destination-form-card card">
            <div class="card-header">
                <h4 class="mb-0 text-white">
                    <i class="fa fa-map-marker"></i> <?= !empty($destination) ? 'Edit Destinasi' : 'Tambah Destinasi Baru' ?>
                </h4>
            </div>
            <div class="card-body">
                <form action="<?= !empty($destination) ? base_url('destination/update/' . $destination->id_destination) : base_url('destination/create_destination') ?>" method="post" enctype="multipart/form-data">
                    <!-- Hidden field untuk ID -->
                    <input type="hidden" name="p[id_destination]" value="<?= !empty($destination) ? $destination->id_destination : '' ?>">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-section">
                                <h5 class="form-section-title">
                                    <i class="fa fa-info-circle"></i> Informasi Dasar
                                </h5>

                                <div class="form-group">
                                    <label for="nama" class="form-label">
                                        <i class="fa fa-tag"></i> Nama Destinasi
                                    </label>
                                    <input type="text" id="nama" name="p[name]" value="<?= !empty($destination) ? $destination->name : '' ?>"
                                        placeholder="Masukkan nama destinasi" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="price" class="form-label">
                                        <i class="fa fa-money-bill"></i> Harga
                                    </label>
                                    <input type="text" id="price" name="p[price]" value="<?= !empty($destination) ? $destination->price : '' ?>"
                                        placeholder="Masukkan harga (contoh: 500000)" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="day" class="form-label">
                                        <i class="fa fa-calendar"></i> Jumlah Hari
                                    </label>
                                    <input type="text" id="day" name="p[day]" value="<?= !empty($destination) ? $destination->day : '' ?>"
                                        placeholder="Masukkan jumlah hari" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="regency" class="form-label">
                                        <i class="fa fa-map"></i> Kabupaten
                                    </label>
                                    <input type="text" id="regency" name="p[regency]" value="<?= !empty($destination) ? $destination->regency : '' ?>"
                                        placeholder="Masukkan nama kabupaten" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-section">
                                <h5 class="form-section-title">
                                    <i class="fa fa-cog"></i> Pengaturan Destinasi
                                </h5>

                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fa fa-list-alt"></i> Tipe Destinasi
                                    </label>
                                    <div class="mt-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="p[destination_type]" id="type1"
                                                value="1" <?= !empty($destination) && $destination->destination_type == 1 ? 'checked' : (!empty($destination) ? '' : 'checked') ?>>
                                            <label class="form-check-label" for="type1">Gunung</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="p[destination_type]" id="type2"
                                                value="2" <?= !empty($destination) && $destination->destination_type == 2 ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="type2">Pantai</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="p[destination_type]" id="type3"
                                                value="3" <?= !empty($destination) && $destination->destination_type == 3 ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="type3">Alam</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fa fa-star"></i> Top Destinasi
                                    </label>
                                    <div class="mt-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="p[top_destination]" id="top1"
                                                value="1" <?= !empty($destination) && $destination->top_destination == 1 ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="top1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="p[top_destination]" id="top0"
                                                value="0" <?= !empty($destination) && $destination->top_destination == 0 ? 'checked' : (!empty($destination) ? '' : 'checked') ?>>
                                            <label class="form-check-label" for="top0">Tidak</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image" class="form-label">
                                        <i class="fa fa-image"></i> Gambar Destinasi
                                    </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*" <?= empty($destination) ? 'required' : '' ?>>
                                        <label class="custom-file-label" for="image">Pilih file gambar...</label>
                                    </div>
                                    <?php if (!empty($destination) && !empty($destination->image)): ?>
                                        <div class="mt-3">
                                            <p class="text-muted mb-2">Gambar saat ini:</p>
                                            <img src="<?= base_url('assets/template/img/destination/' . $destination->image) ?>" class="img-thumbnail img-preview" width="200" alt="Current Image">
                                            <input type="hidden" name="old_image" value="<?= $destination->image ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4 text-right">
                        <a href="<?= base_url('destination') ?>" class="btn btn-danger">
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