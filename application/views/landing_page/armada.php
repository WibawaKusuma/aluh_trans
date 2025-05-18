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

    /* Armada section styling */
    .armada-section {
        padding: 80px 0;
        background-color: #fff;
        position: relative;
    }

    .armada-section::before {
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
        margin-bottom: 50px;
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

    /* Armada card styling */
    .armada-card {
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: var(--box-shadow);
        margin-bottom: 30px;
        background-color: #fff;
        transition: var(--transition);
        position: relative;
        z-index: 1;
    }

    .armada-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .armada-card::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.5s ease;
        z-index: 2;
    }

    .armada-card:hover::before {
        transform: scaleX(1);
    }

    .armada-img {
        position: relative;
        overflow: hidden;
        height: 220px;
        background-color: var(--light-bg);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .armada-img::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(1, 75, 133, 0), rgba(1, 75, 133, 0.1));
        opacity: 0;
        transition: var(--transition);
    }

    .armada-card:hover .armada-img::after {
        opacity: 1;
    }

    .armada-img img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        transition: var(--transition);
        filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.1));
    }

    .armada-card:hover .armada-img img {
        transform: scale(1.05);
    }

    .armada-content {
        padding: 20px;
        text-align: center;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        position: relative;
        z-index: 1;
        background-color: #fff;
    }

    .armada-content::before {
        content: '';
        position: absolute;
        top: -1px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 3px;
        background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        transition: var(--transition);
        opacity: 0;
    }

    .armada-card:hover .armada-content::before {
        opacity: 1;
        width: 80px;
    }

    .armada-title {
        font-size: 18px;
        font-weight: 600;
        color: var(--primary-color);
        margin-bottom: 10px;
        transition: var(--transition);
    }

    .armada-card:hover .armada-title {
        color: var(--secondary-color);
    }

    .armada-specs {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 15px;
    }

    .armada-spec-item {
        display: flex;
        align-items: center;
        margin: 0 10px 10px;
        color: var(--light-text);
        font-size: 14px;
        padding: 5px 10px;
        border-radius: 20px;
        background-color: var(--accent-color);
        transition: var(--transition);
    }

    .armada-card:hover .armada-spec-item {
        background-color: rgba(1, 75, 133, 0.05);
    }

    .armada-spec-item i {
        color: var(--primary-color);
        margin-right: 5px;
        font-size: 16px;
        transition: var(--transition);
    }

    .armada-card:hover .armada-spec-item i {
        color: var(--secondary-color);
    }

    /* Animations */
    .fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    .fade-in-delay {
        animation: fadeIn 1s ease-in-out 0.3s forwards;
        opacity: 0;
    }

    .slide-in-left {
        animation: slideInLeft 1s ease-in-out;
    }

    .slide-in-right {
        animation: slideInRight 1s ease-in-out;
    }

    .zoom-in {
        animation: zoomIn 1s ease-in-out;
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

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
        .section-title h3 {
            font-size: 28px;
        }

        .armada-section {
            padding: 60px 0;
        }
    }

    @media (max-width: 767px) {
        .section-title h3 {
            font-size: 24px;
        }

        .armada-title {
            font-size: 16px;
        }
    }

    @media (max-width: 575px) {
        .section-title span {
            font-size: 14px;
        }

        .section-title h3 {
            font-size: 22px;
        }

        .armada-img {
            height: 180px;
        }
    }
</style>

<section class="armada-section fade-in">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="font">ARMADA KAMI</span>
                    <h3 class="font">Pilihan Kendaraan Terbaik</h3>
                    <div class="title-separator"></div>
                    <p class="w-75 mx-auto font">Kami menyediakan berbagai pilihan kendaraan berkualitas dan terawat untuk memastikan perjalanan Anda nyaman dan aman.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($armada as $k) : ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 fade-in-delay">
                    <div class="armada-card">
                        <div class="armada-img">
                            <img src="<?= base_url('assets/template/img/armada/' . $k->image) ?>" alt="<?= $k->nama ?>">
                        </div>
                        <div class="armada-content">
                            <h3 class="armada-title"><?= $k->nama ?></h3>
                            <div class="armada-specs">
                                <?php if (isset($k->kapasitas)) : ?>
                                    <div class="armada-spec-item">
                                        <i class="fas fa-users"></i>
                                        <span><?= $k->kapasitas ?> Orang</span>
                                    </div>
                                <?php else: ?>
                                    <div class="armada-spec-item">
                                        <i class="fas fa-users"></i>
                                        <span>4-6 Orang</span>
                                    </div>
                                <?php endif; ?>
                                <?php if (isset($k->tahun)) : ?>
                                    <div class="armada-spec-item">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>Tahun <?= $k->tahun ?></span>
                                    </div>
                                <?php else: ?>
                                    <div class="armada-spec-item">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>Terawat</span>
                                    </div>
                                <?php endif; ?>
                                <div class="armada-spec-item">
                                    <i class="fas fa-car"></i>
                                    <span>AC & Nyaman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <p class="text-muted">Semua kendaraan kami terawat dengan baik dan dilengkapi dengan AC untuk kenyamanan perjalanan Anda.</p>
                <p class="text-muted">Untuk informasi lebih lanjut tentang armada kami, silakan hubungi kami melalui kontak yang tersedia.</p>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        // Animasi untuk kartu armada
        $('.armada-card').each(function(index) {
            $(this).css('animation-delay', (index * 0.1) + 's');
        });

        // Animasi saat scroll
        $(window).scroll(function() {
            var windowTop = $(window).scrollTop();

            // Animasi untuk section title
            if ($('.section-title').length && windowTop > $('.section-title').offset().top - 600) {
                $('.section-title').addClass('zoom-in');
            }

            // Animasi untuk armada cards
            $('.armada-card').each(function() {
                if (windowTop > $(this).offset().top - 600) {
                    $(this).addClass('fade-in-delay');
                }
            });
        });

        // Hover effect untuk armada cards
        $('.armada-card').hover(
            function() {
                $(this).find('.armada-title').css('color', 'var(--secondary-color)');
            },
            function() {
                $(this).find('.armada-title').css('color', 'var(--primary-color)');
            }
        );
    });
</script>