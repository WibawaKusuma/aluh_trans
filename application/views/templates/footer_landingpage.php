</main>
<!-- Back to top button -->
<!-- <a href="#" class="btn-back-to-top"><i class="fas fa-chevron-up"></i></a> -->

<!-- Footer Start -->
<footer class="modern-footer mt-5">
    <!-- <div class="footer-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <defs>
                <linearGradient id="wave-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#4b6cb7;stop-opacity:0.3" />
                    <stop offset="100%" style="stop-color:#8e9efc;stop-opacity:0.3" />
                </linearGradient>
            </defs>
            <path fill="url(#wave-gradient)" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,224C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div> -->
    <div class="footer-content">
        <div class="container">
            <div class="row g-4">
                <!-- Logo and company info -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget">
                        <div class="footer-logo mb-4">
                            <a href="<?= base_url('Landing_page') ?>">
                                <img src="<?= base_url('assets/template') ?>/img/logo/logo-aluh-trans.png" alt="Aluh Trans Logo" class="img-fluid" style="max-height: 100px;">
                            </a>
                        </div>
                        <p class="footer-text font">Layanan transportasi premium dengan pengalaman perjalanan yang nyaman, aman, dan memuaskan untuk setiap kebutuhan perjalanan Anda.</p>
                        <div class="footer-social-icons">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="<?= @$config->company_whatsapp ?>" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Quick links -->
                <!-- <div class="col-lg-2 col-md-5 col-sm-12">
                    <div class="footer-widget">
                        <h4 class="widget-title">Tautan Cepat</h4>
                        <ul class="footer-links">
                            <li><a href="#home"><i class="fas fa-chevron-right"></i> Beranda</a></li>
                            <li><a href="#about"><i class="fas fa-chevron-right"></i> Tentang Kami</a></li>
                            <li><a href="#services"><i class="fas fa-chevron-right"></i> Layanan</a></li>
                            <li><a href="#contact"><i class="fas fa-chevron-right"></i> Kontak</a></li>
                        </ul>
                    </div>
                </div> -->

                <!-- Why choose us -->
                <div class="col-lg-4 col-md-7 col-sm-12">
                    <div class="footer-widget">
                        <h4 class="widget-title font">Keunggulan</h4>
                        <ul class="footer-features">
                            <li><i class="fas fa-check-circle"></i> Profesional</li>
                            <li><i class="fas fa-check-circle"></i> Tepat Waktu</li>
                            <li><i class="fas fa-check-circle"></i> Nyaman</li>
                            <li><i class="fas fa-check-circle"></i> Harga Terjangkau</li>
                        </ul>
                    </div>
                </div>

                <!-- Contact info -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget">
                        <h4 class="widget-title font">Hubungi Kami</h4>
                        <ul class="contact-info">
                            <li class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <p class="font"><?= isset($config['company_address']) ? $config['company_address'] : '' ?></p>
                            </li>
                            <li class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <p class="font"><?= isset($config['company_email']) ? $config['company_email'] : '' ?></p>
                            </li>
                            <li class="contact-item">
                                <i class="fas fa-phone"></i>
                                <p class="font"><?= isset($config['company_whatsapp']) ? $config['company_whatsapp'] : '' ?></p>
                            </li>
                            <li class="contact-item">
                                <i class="fas fa-clock"></i>
                                <p class="font">Senin - Minggu: 24 Jam</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>
                            &copy; <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <span>Aluh Trans</span>. Hak Cipta Dilindungi.
                            <span class="d-none d-sm-inline-block"> | </span>
                            <span class="d-block d-sm-inline-block mt-1 mt-sm-0">Dibuat oleh <a href="#">Ajikpo</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Footer End-->
<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="<?= base_url('assets/template') ?>/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="<?= base_url('assets/template') ?>/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?= base_url('assets/template') ?>/js/popper.min.js"></script>
<script src="<?= base_url('assets/template') ?>/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="<?= base_url('assets/template') ?>/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="<?= base_url('assets/template') ?>/js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/template') ?>/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="<?= base_url('assets/template') ?>/js/wow.min.js"></script>
<script src="<?= base_url('assets/template') ?>/js/animated.headline.js"></script>
<script src="<?= base_url('assets/template') ?>/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="<?= base_url('assets/template') ?>/js/jquery.scrollUp.min.js"></script>
<script src="<?= base_url('assets/template') ?>/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/template') ?>/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="<?= base_url('assets/template') ?>/js/contact.js"></script>
<script src="<?= base_url('assets/template') ?>/js/jquery.form.js"></script>
<script src="<?= base_url('assets/template') ?>/js/jquery.validate.min.js"></script>
<script src="<?= base_url('assets/template') ?>/js/mail-script.js"></script>
<script src="<?= base_url('assets/template') ?>/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="<?= base_url('assets/template') ?>/js/plugins.js"></script>
<script src="<?= base_url('assets/template') ?>/js/main.js"></script>


<!-- Font Roboto -->
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">


<!-- Custom CSS for Modern Footer -->
<style>
    /* Modern Footer Styling */
    .modern-footer {
        position: relative;
        overflow: hidden;
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }

    /* Wave SVG at top of footer */
    .footer-wave {
        position: relative;
        width: 100%;
        margin-bottom: -10px;
    }

    /* Main footer content */
    .footer-content {
        background: linear-gradient(135deg, #4b6cb7 0%, #182848 50%, #0a1128 100%);
        padding: 70px 0 40px;
        position: relative;
        z-index: 1;
    }

    .footer-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgdmlld0JveD0iMCAwIDYwIDYwIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIG9wYWNpdHk9Ii4yIj48ZyBmaWxsPSIjRkZGIj48cGF0aCBkPSJNMzYgMzRoLTJ2LTRoMnY0em0wLTZ2LTRoLTJ2NGgyem0tNCA0aC00djJoNHYtMnptMC00aC00djJoNHYtMnptMC00aC00djJoNHYtMnoiLz48L2c+PC9nPjwvc3ZnPg==');
        opacity: 0.05;
        z-index: -1;
    }

    /* Widget styling */
    .footer-widget {
        margin-bottom: 30px;
        padding: 20px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
    }

    .footer-widget:hover {
        background: rgba(255, 255, 255, 0.05);
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .widget-title {
        position: relative;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 25px;
        padding-bottom: 10px;
        color: #fff;
    }

    .widget-title::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 50px;
        height: 2px;
        background: linear-gradient(90deg, #4b6cb7, #8e9efc);
        transition: width 0.3s ease;
    }

    .footer-widget:hover .widget-title::after {
        width: 80px;
    }

    /* Footer text */
    .footer-text {
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 25px;
        font-size: 15px;
        line-height: 1.8;
    }

    /* Social icons */
    .footer-social-icons {
        display: flex;
        gap: 15px;
    }

    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        font-size: 16px;
        transition: all 0.3s ease;
        backdrop-filter: blur(5px);
    }

    .social-icon:hover {
        background: linear-gradient(135deg, #4b6cb7 0%, #182848 100%);
        color: #fff;
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(75, 108, 183, 0.4);
    }

    /* Footer links */
    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .footer-links a i {
        font-size: 12px;
        margin-right: 8px;
        color: #8e9efc;
        transition: transform 0.3s ease;
    }

    .footer-links a:hover {
        color: #fff;
        transform: translateX(5px);
    }

    .footer-links a:hover i {
        transform: translateX(3px);
    }

    /* Features list */
    .footer-features {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-features li {
        margin-bottom: 12px;
        color: rgba(255, 255, 255, 0.7);
        display: flex;
        align-items: flex-start;
    }

    .footer-features li i {
        color: #8e9efc;
        margin-right: 10px;
        font-size: 14px;
        min-width: 14px;
        text-align: center;
        margin-top: 3px;
    }

    /* Contact info */
    .contact-info {
        margin-top: 15px;
        padding-left: 0;
        list-style: none;
    }

    .contact-item {
        display: flex;
        margin-bottom: 15px;
        align-items: flex-start;
    }

    .contact-item i {
        color: #8e9efc;
        font-size: 18px;
        margin-right: 15px;
        min-width: 18px;
        text-align: center;
    }

    .contact-item p {
        color: rgba(255, 255, 255, 0.7);
        margin: 0;
        font-size: 14px;
    }

    /* Footer bottom / copyright */
    .footer-bottom {
        background: rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        padding: 20px 0;
        text-align: center;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .copyright-text {
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
    }

    .copyright-text span {
        color: #8e9efc;
        font-weight: 600;
    }

    .copyright-text a {
        color: #8e9efc;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .copyright-text a:hover {
        color: #fff;
    }

    /* Back to top button */
    .btn-back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #4b6cb7 0%, #182848 100%);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        z-index: 99;
        opacity: 0;
        visibility: hidden;
        box-shadow: 0 5px 15px rgba(75, 108, 183, 0.4);
        transition: all 0.5s ease;
        transform: translateY(20px);
    }

    .btn-back-to-top.active {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .btn-back-to-top:hover {
        background: linear-gradient(135deg, #5d7ec9 0%, #263b6a 100%);
        color: #fff;
        transform: translateY(-5px);
    }

    /* Responsive styles */
    @media (max-width: 991px) {
        .footer-content {
            padding: 50px 0 30px;
        }
    }

    @media (max-width: 767px) {
        .widget-title {
            text-align: center;
        }

        .widget-title::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .footer-text {
            text-align: center;
        }

        .footer-social-icons {
            justify-content: center;
        }

        .footer-links li {
            text-align: center;
            justify-content: center;
        }

        /* Khusus untuk keunggulan dan kontak, tetap rata kiri */
        .footer-features li,
        .contact-item {
            justify-content: flex-start;
            text-align: left;
        }

        .footer-widget .contact-info,
        .footer-widget .footer-features {
            display: inline-block;
            text-align: left;
            width: auto;
            margin: 0 auto;
        }

        /* Pastikan widget title untuk keunggulan dan kontak tetap rata kiri di mobile */
        .footer-widget:nth-child(3) .widget-title,
        .footer-widget:last-child .widget-title {
            text-align: left;
        }

        .footer-widget:nth-child(3) .widget-title::after,
        .footer-widget:last-child .widget-title::after {
            left: 0;
            transform: none;
        }
    }

    .roboto {
        font-family: "Roboto", cursive !important;
    }
</style>

<!-- Back to top script -->
<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.btn-back-to-top').addClass('active');
        } else {
            $('.btn-back-to-top').removeClass('active');
        }
    });

    $('.btn-back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800, 'easeInOutExpo');
        return false;
    });

    // Add hover animations to footer widgets
    $('.footer-widget').hover(
        function() {
            $(this).find('.widget-title').css('transform', 'translateY(-5px)');
        },
        function() {
            $(this).find('.widget-title').css('transform', 'translateY(0)');
        }
    );

    // Script untuk menu aktif di mobile dan header sticky
    $(document).ready(function() {
        // Menunggu slicknav selesai diinisialisasi
        setTimeout(function() {
            // Cari item menu yang aktif di desktop
            var activeItem = $('#navigation li.active');

            if (activeItem.length > 0) {
                // Dapatkan teks menu yang aktif
                var activeText = activeItem.find('a').text();

                // Cari item yang sama di menu mobile dan tambahkan class active
                $('.slicknav_nav li').each(function() {
                    if ($(this).find('a').text() === activeText) {
                        $(this).addClass('active');
                    }
                });
            }
        }, 500); // Tunggu 500ms untuk memastikan slicknav sudah diinisialisasi

        // Header sticky pada scroll
        $(window).on('scroll', function() {
            var scroll = $(window).scrollTop();
            if (scroll < 100) {
                $(".header-sticky").removeClass("sticky");
            } else {
                $(".header-sticky").addClass("sticky");
            }
        });

        // Animasi smooth scroll untuk menu
        $('#navigation a').on('click', function(e) {
            var target = $(this.hash);
            if (target.length) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800);
            }
        });
    });
</script>

</body>

</html>