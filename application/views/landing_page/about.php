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

    /* Styling untuk section */
    .about-section {
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .about-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgdmlld0JveD0iMCAwIDYwIDYwIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIG9wYWNpdHk9Ii4yIj48ZyBmaWxsPSIjMDE0Yjg1Ij48cGF0aCBkPSJNMzYgMzRoLTJ2LTRoMnY0em0wLTZ2LTRoLTJ2NGgyem0tNCA0aC00djJoNHYtMnptMC00aC00djJoNHYtMnptMC00aC00djJoNHYtMnoiLz48L2c+PC9nPjwvc3ZnPg==');
        opacity: 0.05;
        z-index: -1;
    }

    /* Styling untuk gambar */
    .about-image {
        position: relative;
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: var(--box-shadow);
        transition: var(--transition);
    }

    .about-image:hover {
        transform: translateY(-10px);
    }

    .about-image img {
        width: 100%;
        height: auto;
        transition: var(--transition);
    }

    .about-image:hover img {
        transform: scale(1.05);
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(1, 75, 133, 0.1), rgba(1, 75, 133, 0.3));
        opacity: 0;
        transition: var(--transition);
    }

    .about-image:hover .image-overlay {
        opacity: 1;
    }

    .title-separator {
        width: 80px;
        height: 3px;
        background: var(--primary-color);
        margin: 15px 0 25px;
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

    /* Styling untuk konten */
    .about-content {
        padding: 20px;
    }

    .section-title {
        position: relative;
        margin-bottom: 30px;
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

    .about-text p {
        font-size: 16px;
        line-height: 1.8;
        color: var(--text-color);
        margin-bottom: 20px;
    }

    /* Styling untuk video */
    .video-container {
        position: relative;
        overflow: hidden;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
        margin-bottom: 10px;
        transition: var(--transition);
        background-color: #fff;
    }

    .video-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .static-video {
        width: 100%;
        height: auto;
        max-height: 400px;
        border-radius: var(--border-radius) var(--border-radius) 0 0;
        transition: var(--transition);
        display: block;
    }

    .video-title {
        padding: 15px;
        background-color: #fff;
        border-radius: 0 0 var(--border-radius) var(--border-radius);
    }

    .video-title h5 {
        font-size: 18px;
        font-weight: 600;
        color: var(--primary-color);
        margin-bottom: 5px;
    }

    .video-title p {
        font-size: 14px;
        color: var(--light-text);
        margin-bottom: 0;
    }

    .feature-item {
        padding: 10px 15px;
        border-radius: 5px;
        transition: var(--transition);
        background-color: rgba(248, 249, 250, 0.5);
        margin-bottom: 10px;
    }

    .feature-item:hover {
        background-color: rgba(1, 75, 133, 0.05);
    }

    .feature-item i {
        color: var(--primary-color);
        font-size: 18px;
        margin-right: 10px;
    }

    .feature-item span {
        font-weight: 500;
    }

    /* Media query untuk responsivitas */
    @media (max-width: 991px) {
        .section-title h3 {
            font-size: 28px;
        }

        .about-section {
            padding: 60px 0;
        }

        .about-image {
            margin-bottom: 30px;
        }
    }

    @media (max-width: 767px) {
        .section-title h3 {
            font-size: 24px;
        }

        .static-video {
            max-height: 300px;
        }
    }

    @media (max-width: 575px) {
        .section-title span {
            font-size: 14px;
        }

        .section-title h3 {
            font-size: 22px;
        }

        .about-text p {
            font-size: 14px;
        }

        .static-video {
            max-height: 200px;
        }
    }

    /* Animasi */
    .fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    .fade-in-delay {
        animation: fadeIn 1s ease-in-out 0.3s forwards;
        opacity: 0;
    }

    .fade-in-delay-2 {
        animation: fadeIn 1s ease-in-out 0.6s forwards;
        opacity: 0;
    }

    .slide-in-left {
        animation: slideInLeft 1s ease-in-out;
    }

    .slide-in-right {
        animation: slideInRight 1s ease-in-out;
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

    /* Hover effects */
    .hover-zoom {
        transition: var(--transition);
    }

    .hover-zoom:hover {
        transform: scale(1.05);
    }
</style>
<!-- About Section Start -->
<section class="about-section fade-in">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="about-image mb-md-4 slide-in-left">
                    <img src="<?= base_url('assets/template') ?>/img/service/image1.jpg" alt="Aluh Trans Company Image" class="img-fluid">
                    <div class="image-overlay"></div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="about-content slide-in-right">
                    <div class="section-title">
                        <span class="font">Tentang Perusahaan Kami</span>
                        <h3 class="font" style="font-size: 24px;">Kami adalah Aluh Trans <br>Perusahaan Travel Terpercaya</h3>
                        <div class="title-separator"></div>
                    </div>
                    <div class="about-text">
                        <p class="font">Perusahaan travel kami adalah pilihan terbaik bagi Anda yang menginginkan
                            pengalaman perjalanan yang berkesan. Dengan lebih dari 10 tahun pengalaman, kami telah
                            membangun reputasi yang kuat dalam menyediakan layanan travel yang unggul dan
                            berkelas.</p>

                        <p class="font">Kunci kesuksesan kami adalah staf yang berkompeten dan berpengalaman. Mereka tidak
                            hanya ahli dalam destinasi dan layanan travel, tetapi juga memiliki keterampilan
                            interpersonal yang baik untuk memberikan pelayanan personal yang Anda butuhkan.</p>

                        <p class="font">Kami fokus pada detail dan memastikan setiap aspek perjalanan Anda terorganisir
                            dengan baik. Dukungan jaringan mitra yang luas memungkinkan kami menyediakan paket
                            perjalanan yang sesuai dengan preferensi dan anggaran Anda.</p>

                        <p class="font">Dengan kami, Anda dapat menikmati perjalanan tanpa khawatir dan merasakan pengalaman
                            wisata yang tak terlupakan.</p>

                        <div class="row mt-4">
                            <div class="col-md-6 col-sm-6">
                                <div class="feature-item d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-primary mr-2"></i>
                                    <span>Staf Profesional</span>
                                </div>
                                <div class="feature-item d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-primary mr-2"></i>
                                    <span>Pengalaman 10+ Tahun</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="feature-item d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-primary mr-2"></i>
                                    <span>Jaringan Mitra Luas</span>
                                </div>
                                <div class="feature-item d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-primary mr-2"></i>
                                    <span>Paket Terorganisir</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Company End-->
<!-- Our Services Start -->
<!-- <div class="our-services place-padding">
        <div class="container">
            <div class="row d-flex justify-contnet-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30 shadow">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5>Staf yang berkompeten <br> dan berpengalaman</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30 shadow">
                        <div class="services-ion">
                            <span class="flaticon-pay"></span>
                        </div>
                        <div class="services-cap">
                            <h5>Terjangkau untuk <br> semua kalangan </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30 shadow">
                        <div class="services-ion">
                            <span class="flaticon-experience"></span>
                        </div>
                        <div class="services-cap">
                            <h5>Jaringan Mitra Luas <br>&nbsp;</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30 shadow">
                        <div class="services-ion">
                            <span class="flaticon-good"></span>
                        </div>
                        <div class="services-cap">
                            <h5>Paket Perjalanan <br> yang Terorganisir</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<!-- Video Gallery Section Start -->
<section class="video-gallery-section fade-in" style="background-color: var(--light-bg); padding: 80px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <div class="section-title text-center">
                    <span class="font">PENGALAMAN PERJALANAN</span>
                    <h3 class="font">Cerita Perjalanan Kami</h3>
                    <div class="title-separator mx-auto mt-3 mb-4" style="width: 80px; height: 3px; background: var(--primary-color); margin: 0 auto;"></div>
                    <p class="w-75 mx-auto font">Lihat pengalaman perjalanan bersama Aluh Trans melalui video-video berikut yang menampilkan momen-momen tak terlupakan dari perjalanan kami.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="video-container mb-4 fade-in-delay hover-zoom">
                    <video class="static-video" controls poster="<?= base_url('assets/template') ?>/img/service/video-thumb1.jpg">
                        <source src="<?= base_url('assets/videos/video1.mp4'); ?>" type="video/mp4">
                        Browser Anda tidak mendukung pemutaran video.
                    </video>
                    <div class="video-title mt-2">
                        <h5 class="font">Perjalanan ke Pantai Kuta</h5>
                        <p class="text-muted font">Menikmati keindahan pantai Kuta bersama Aluh Trans</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="video-container mb-4 fade-in-delay hover-zoom">
                    <video class="static-video" controls poster="<?= base_url('assets/template') ?>/img/service/video-thumb2.jpg">
                        <source src="<?= base_url('assets/videos/video2.mp4'); ?>" type="video/mp4">
                        Browser Anda tidak mendukung pemutaran video.
                    </video>
                    <div class="video-title mt-2">
                        <h5 class="font">Wisata Gunung Batur</h5>
                        <p class="text-muted font">Petualangan mendaki Gunung Batur dengan pemandu terbaik</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="video-container mb-4 fade-in-delay-2 hover-zoom">
                    <video class="static-video" controls poster="<?= base_url('assets/template') ?>/img/service/video-thumb3.jpg">
                        <source src="<?= base_url('assets/videos/video1.mp4'); ?>" type="video/mp4">
                        Browser Anda tidak mendukung pemutaran video.
                    </video>
                    <div class="video-title mt-2">
                        <h5 class="font">Pura Tanah Lot</h5>
                        <p class="text-muted font">Mengunjungi tempat wisata ikonik di Bali</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="video-container mb-4 fade-in-delay-2 hover-zoom">
                    <video class="static-video" controls poster="<?= base_url('assets/template') ?>/img/service/video-thumb4.jpg">
                        <source src="<?= base_url('assets/videos/video2.mp4'); ?>" type="video/mp4">
                        Browser Anda tidak mendukung pemutaran video.
                    </video>
                    <div class="video-title mt-2">
                        <h5 class="font">Ubud Cultural Tour</h5>
                        <p class="text-muted font">Menjelajahi kebudayaan Bali di Ubud</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Gallery Section End -->

<!-- Our Services End -->
<!-- Video Start Arera -->
<!-- <div class="video-area video-bg pt-200 pb-200" data-background="<?= base_url('assets/template') ?>/img/service/video-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-caption text-center">
                            <div class="video-icon">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"
                                    tabindex="0"><i class="fas fa-play"></i></a>
                            </div>
                            <p class="pera1">Love where you're going in the perfect time</p>
                            <p class="pera2">Tripo is a World Leading Online</p>
                            <p class="pera3"> Tour Booking Platform</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Video Start End -->
<!-- Testimonial Start -->
<div class="testimonial-area testimonial-padding" hidden>
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-11 col-lg-11 col-md-9">
                <div class="h1-testimonial-active">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <!-- Testimonial Content -->
                        <div class="testimonial-caption ">
                            <div class="testimonial-top-cap">
                                <img src="<?= base_url('assets/template') ?>/img/icon/testimonial.png" alt="">
                                <p>koment koment customer 1.</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                <div class="founder-img">
                                    <img src="<?= base_url('assets/template') ?>/img/testmonial/Homepage_testi.png" alt="">
                                </div>
                                <div class="founder-text founder-text2">
                                    <span>Jessya Inn</span>
                                    <p>Co Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <!-- Testimonial Content -->
                        <div class="testimonial-caption ">
                            <div class="testimonial-top-cap">
                                <img src="<?= base_url('assets/template') ?>/img/icon/testimonial.png" alt="">
                                <p>koment koment customer 2.</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                <div class="founder-img">
                                    <img src="<?= base_url('assets/template') ?>/img/testmonial/Homepage_testi.png" alt="">
                                </div>
                                <div class="founder-text founder-text2">
                                    <span>Jessya Inn</span>
                                    <p>Co Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>