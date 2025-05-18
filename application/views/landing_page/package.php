<style>
    /* Variabel warna dan font */
    :root {
        --primary-color: #014b85;
        --secondary-color: #ff0000;
        --accent-color: #f8f9fa;
        --text-color: #333;
        --light-text: #6c757d;
        --dark-bg: #1a2b49;
        --light-bg: #f8f9fa;
        --transition: all 0.3s ease;
        --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        --border-radius: 10px;
    }

    /* Font styling */
    .font {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        color: var(--primary-color);
    }

    /* Package section styling */
    .package-section {
        padding: 80px 0;
        background-color: #fff;
        position: relative;
    }

    .package-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgdmlld0JveD0iMCAwIDYwIDYwIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIG9wYWNpdHk9Ii4yIj48ZyBmaWxsPSIjMDE0Yjg1Ij48cGF0aCBkPSJNMzYgMzRoLTJ2LTRoMnY0em0wLTZ2LTRoLTJ2NGgyem0tNCA0aC00djJoNHYtMnptMC00aC00djJoNHYtMnptMC00aC00djJoNHYtMnoiLz48L2c+PC9nPjwvc3ZnPg==');
        opacity: 0.05;
        z-index: 0;
    }

    /* Section title styling */
    .section-title {
        position: relative;
        margin-bottom: 40px;
        z-index: 1;
    }

    .section-title span {
        font-size: 16px;
        font-weight: 500;
        color: var(--secondary-color);
        text-transform: uppercase;
        letter-spacing: 2px;
        display: block;
        margin-bottom: 10px;
    }

    .section-title h3 {
        font-size: 36px;
        font-weight: 700;
        color: var(--primary-color);
        line-height: 1.2;
        margin-bottom: 20px;
    }

    .title-separator {
        width: 80px;
        height: 3px;
        background: var(--primary-color);
        margin: 15px auto 25px;
        position: relative;
    }

    .title-separator::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 30%;
        height: 100%;
        background: var(--secondary-color);
    }

    /* Filter buttons styling */
    .filter-container {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 50px;
        flex-wrap: wrap;
        z-index: 1;
        position: relative;
    }

    .filter-btn {
        padding: 12px 25px;
        background-color: #fff;
        color: var(--text-color);
        border: 1px solid #e9e9e9;
        border-radius: 30px;
        font-weight: 500;
        font-size: 15px;
        transition: var(--transition);
        cursor: pointer;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
    }

    .filter-btn:hover {
        background-color: var(--primary-color);
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(1, 75, 133, 0.3);
    }

    .filter-btn.active {
        background-color: var(--primary-color);
        color: #fff;
        border-color: var(--primary-color);
    }

    /* Package card styling */
    .package-card {
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: var(--box-shadow);
        margin-bottom: 30px;
        background-color: #fff;
        transition: var(--transition);
        position: relative;
        z-index: 1;
    }

    .package-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .package-img {
        position: relative;
        overflow: hidden;
        height: 250px;
    }

    .package-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }

    .package-card:hover .package-img img {
        transform: scale(1.1);
    }

    .package-content {
        padding: 25px;
    }

    .package-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
        color: var(--primary-color);
    }

    .package-title a {
        color: var(--primary-color);
        text-decoration: none;
        transition: var(--transition);
    }

    .package-title a:hover {
        color: var(--secondary-color);
    }

    .package-price {
        font-size: 22px;
        font-weight: 700;
        color: var(--secondary-color);
        margin-bottom: 15px;
    }

    .package-price span {
        font-size: 14px;
        font-weight: 400;
        color: var(--light-text);
    }

    .package-meta {
        display: flex;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .package-meta-item {
        display: flex;
        align-items: center;
        margin-right: 20px;
        margin-bottom: 10px;
        color: var(--light-text);
        font-size: 14px;
    }

    .package-meta-item i {
        color: var(--primary-color);
        margin-right: 8px;
        font-size: 16px;
    }

    .book-btn {
        display: block;
        width: 100%;
        padding: 12px 25px;
        background-color: var(--primary-color);
        color: #fff;
        border: none;
        border-radius: 5px;
        font-weight: 500;
        text-align: center;
        text-decoration: none;
        transition: var(--transition);
    }

    .book-btn:hover {
        background-color: var(--secondary-color);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
    }

    /* Animations */
    .fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    .fade-in-delay {
        animation: fadeIn 1s ease-in-out 0.3s forwards;
        opacity: 0;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
        .section-title h3 {
            font-size: 28px;
        }

        .package-section {
            padding: 60px 0;
        }
    }

    @media (max-width: 767px) {
        .section-title h3 {
            font-size: 24px;
        }

        .filter-btn {
            padding: 10px 20px;
            font-size: 14px;
        }

        .package-title {
            font-size: 18px;
        }

        .package-price {
            font-size: 20px;
        }
    }

    @media (max-width: 575px) {
        .section-title span {
            font-size: 14px;
        }

        .section-title h3 {
            font-size: 22px;
        }

        .filter-btn {
            padding: 8px 15px;
            font-size: 13px;
        }

        .package-img {
            height: 200px;
        }

        .package-content {
            padding: 20px;
        }
    }
</style>

<!-- Package Section Start -->
<section class="package-section fade-in">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="font">PAKET WISATA UNGGULAN</span>
                    <h3 class="font">Jelajahi Paket Wisata Kami</h3>
                    <div class="title-separator"></div>
                    <p class="w-75 mx-auto font">Temukan berbagai paket wisata menarik yang kami tawarkan untuk pengalaman liburan tak terlupakan di Bali.</p>
                </div>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="filter-container">
            <button class="filter-btn active" id="AllBtn">Semua</button>
            <button class="filter-btn" id="MountainBtn">Pegunungan</button>
            <button class="filter-btn" id="BeachBtn">Pantai</button>
            <button class="filter-btn" id="NatureBtn">Alam</button>
        </div>

        <div class="package-container">
            <div id="All" class="row">
                <?php foreach ($destination as $k) : ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 fade-in-delay">
                        <div class="package-card">
                            <div class="package-img">
                                <img src="<?= base_url('assets/template/img/destination/' . $k->image) ?>" alt="<?= $k->name; ?>">
                            </div>
                            <div class="package-content">
                                <h3 class="package-title font"><a href="#"><?= $k->name; ?></a></h3>
                                <p class="text-muted">Mulai dari</p>
                                <div class="package-price">IDR <?= number_format($k->price, 0, ',', '.'); ?> <span>/ Per Orang</span></div>
                                <div class="package-meta">
                                    <div class="package-meta-item">
                                        <i class="far fa-clock"></i>
                                        <span><?= $k->day; ?> Hari</span>
                                    </div>
                                    <div class="package-meta-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span><?= $k->regency; ?>, Bali</span>
                                    </div>
                                </div>
                                <a href="https://wa.me/<?= @$config->company_whatsapp ?>" class="book-btn" target="_blank">
                                    PESAN SEKARANG
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div id="Mountain" class="row">
                <!-- Section Tittle -->
                <div class="col-lg-12 mb-4">
                    <div class="section-title text-center">
                        <h3>Wisata Pegunungan</h3>
                        <div class="title-separator"></div>
                    </div>
                </div>
                <?php foreach ($destination as $k) : ?>
                    <?php if ($k->destination_type == 1) { ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 fade-in-delay">
                            <div class="package-card">
                                <div class="package-img">
                                    <img src="<?= base_url('assets/template/img/destination/' . $k->image) ?>" alt="<?= $k->name; ?>">
                                </div>
                                <div class="package-content">
                                    <h3 class="package-title"><a href="#"><?= $k->name; ?></a></h3>
                                    <p class="text-muted">Mulai dari</p>
                                    <div class="package-price">IDR <?= number_format($k->price, 0, ',', '.'); ?> <span>/ Per Orang</span></div>
                                    <div class="package-meta">
                                        <div class="package-meta-item">
                                            <i class="far fa-clock"></i>
                                            <span><?= $k->day; ?> Hari</span>
                                        </div>
                                        <div class="package-meta-item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span><?= $k->regency; ?>, Bali</span>
                                        </div>
                                    </div>
                                    <a href="https://wa.me/<?= $config->company_whatsapp ?>" class="book-btn" target="_blank">
                                        PESAN SEKARANG
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php endforeach; ?>
            </div>
            <div id="Beach" class="row">
                <!-- Section Tittle -->
                <div class="col-lg-12 mb-4">
                    <div class="section-title text-center">
                        <h3>Wisata Pantai</h3>
                        <div class="title-separator"></div>
                    </div>
                </div>
                <?php foreach ($destination as $k) : ?>
                    <?php if ($k->destination_type == 2) { ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 fade-in-delay">
                            <div class="package-card">
                                <div class="package-img">
                                    <img src="<?= base_url('assets/template/img/destination/' . $k->image) ?>" alt="<?= $k->name; ?>">
                                </div>
                                <div class="package-content">
                                    <h3 class="package-title"><a href="#"><?= $k->name; ?></a></h3>
                                    <p class="text-muted">Mulai dari</p>
                                    <div class="package-price">IDR <?= number_format($k->price, 0, ',', '.'); ?> <span>/ Per Orang</span></div>
                                    <div class="package-meta">
                                        <div class="package-meta-item">
                                            <i class="far fa-clock"></i>
                                            <span><?= $k->day; ?> Hari</span>
                                        </div>
                                        <div class="package-meta-item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span><?= $k->regency; ?>, Bali</span>
                                        </div>
                                    </div>
                                    <a href="https://wa.me/<?= $config->company_whatsapp ?>" class="book-btn" target="_blank">
                                        PESAN SEKARANG
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php endforeach; ?>
            </div>
            <div id="Nature" class="row">
                <!-- Section Tittle -->
                <div class="col-lg-12 mb-4">
                    <div class="section-title text-center">
                        <h3>Wisata Alam</h3>
                        <div class="title-separator"></div>
                    </div>
                </div>
                <?php foreach ($destination as $k) : ?>
                    <?php if ($k->destination_type == 3) { ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 fade-in-delay">
                            <div class="package-card">
                                <div class="package-img">
                                    <img src="<?= base_url('assets/template/img/destination/' . $k->image) ?>" alt="<?= $k->name; ?>">
                                </div>
                                <div class="package-content">
                                    <h3 class="package-title"><a href="#"><?= $k->name; ?></a></h3>
                                    <p class="text-muted">Mulai dari</p>
                                    <div class="package-price">IDR <?= number_format($k->price, 0, ',', '.'); ?> <span>/ Per Orang</span></div>
                                    <div class="package-meta">
                                        <div class="package-meta-item">
                                            <i class="far fa-clock"></i>
                                            <span><?= $k->day; ?> Hari</span>
                                        </div>
                                        <div class="package-meta-item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span><?= $k->regency; ?>, Bali</span>
                                        </div>
                                    </div>
                                    <a href="https://wa.me/<?= $config->company_whatsapp ?>" class="book-btn" target="_blank">
                                        PESAN SEKARANG
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Favourite Places Tample Start -->
<!-- <div class="favourite-place place-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>FEATURED TOURS Packages</span>
                            <h2>Favourite Tample</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="<?= base_url('assets/template') ?>/img/service/besakih.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">Pura Besakih</a></h3>
                                    <p class="dolor">$1870 <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>1 Days</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Besakih, Karangasem</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="<?= base_url('assets/template') ?>/img/service/goagajah.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">Goa Gajah</a></h3>
                                    <p class="dolor">$1870 <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>3 Days</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Blahbatuh, Gianyar</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="<?= base_url('assets/template') ?>/img/service/ulundanu.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">Ulun Danu Beratan</a></h3>
                                    <p class="dolor">$1870 <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>1 Days</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Baturiti, Tabanan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Favourite Places End -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Fungsi untuk menangani filter
        function filterPackages(category) {
            // Sembunyikan semua kategori
            $('#All, #Mountain, #Beach, #Nature').hide();

            // Tampilkan kategori yang dipilih
            $('#' + category).fadeIn(500);

            // Perbarui status tombol aktif
            $('.filter-btn').removeClass('active');
            $('#' + category + 'Btn').addClass('active');

            // Scroll ke bagian paket
            $('html, body').animate({
                scrollTop: $('.filter-container').offset().top - 100
            }, 500);
        }

        // Event ketika tombol All diklik
        $('#AllBtn').click(function() {
            filterPackages('All');
        });

        // Event ketika tombol Mountain diklik
        $('#MountainBtn').click(function() {
            filterPackages('Mountain');
        });

        // Event ketika tombol Beach diklik
        $('#BeachBtn').click(function() {
            filterPackages('Beach');
        });

        // Event ketika tombol Nature diklik
        $('#NatureBtn').click(function() {
            filterPackages('Nature');
        });

        // Default behavior: tampilkan All dan sembunyikan yang lain
        $('#All').show();
        $('#Mountain, #Beach, #Nature').hide();
        $('#AllBtn').addClass('active');

        // Animasi untuk kartu paket
        $('.package-card').each(function(index) {
            $(this).css('animation-delay', (index * 0.1) + 's');
        });
    });
</script>