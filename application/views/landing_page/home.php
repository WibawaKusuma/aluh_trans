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

    .font {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        color: var(--primary-color);
    }

    /* Destination card styling */
    .destination-card {
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: var(--box-shadow);
        margin-bottom: 30px;
        background-color: #fff;
        transition: var(--transition);
        position: relative;
        z-index: 1;
        height: 100%;
    }

    /* .destination-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    } */

    .destination-img {
        position: relative;
        overflow: hidden;
        height: 250px;
    }

    .destination-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }

    .destination-card:hover .destination-img img {
        transform: scale(1.05);
    }

    .destination-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        font-weight: 600;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 14px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        z-index: 2;
    }

    .destination-content {
        padding: 25px;
    }

    .destination-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .destination-title a {
        color: var(--primary-color);
        text-decoration: none;
        transition: var(--transition);
    }

    .destination-title a:hover {
        color: var(--secondary-color);
    }

    .destination-price {
        font-size: 22px;
        font-weight: 700;
        color: var(--secondary-color);
        margin-bottom: 15px;
    }

    .destination-price span {
        font-size: 14px;
        font-weight: 400;
        color: var(--light-text);
    }

    .destination-meta {
        display: flex;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .destination-meta-item {
        display: flex;
        align-items: center;
        margin-right: 20px;
        margin-bottom: 10px;
        color: var(--light-text);
        font-size: 14px;
    }

    .destination-meta-item i {
        color: var(--primary-color);
        margin-right: 8px;
        font-size: 16px;
    }

    .booking-btn {
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

    .booking-btn:hover {
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

    /* Media query untuk tampilan mobile */
    @media (max-width: 575px) {

        /* Styling untuk service cards */
        .col-sm-6 {
            margin-bottom: 25px;
        }

        .single-services {
            margin-bottom: 0;
            height: 100%;
            padding: 15px 10px;
            position: relative;
        }

        /* Menambahkan jarak antar service cards */
        .our-services .row>div {
            margin-bottom: 20px;
        }

        /* Menambahkan garis pemisah antar service cards */
        /* .our-services .row>div:not(:last-child) .single-services::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 20%;
            width: 60%;
            height: 1px;
            background: rgba(0, 0, 0, 0.1);
        } */

        /* Styling untuk destination cards */
        .col-sm-12 {
            margin-bottom: 30px;
        }

        .destination-card {
            margin-bottom: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Menambahkan garis pemisah antar kartu */
        .col-sm-12:not(:last-child) {
            position: relative;
            padding-bottom: 15px;
        }

        .col-sm-12:not(:last-child)::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 15%;
            width: 70%;
            height: 1px;
            background: rgba(0, 0, 0, 0.1);
        }

        .destination-img {
            height: 180px;
        }

        .destination-content {
            padding: 15px;
        }

        .destination-title {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .destination-price {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .destination-meta {
            margin-bottom: 15px;
        }

        .booking-btn {
            padding: 10px 15px;
            font-size: 14px;
        }

        .favourite-place {
            padding: 30px 0;
        }

        /* Perbaikan untuk service section */
        .our-services {
            padding: 40px 0 20px;
        }

        .services-cap h5 {
            font-size: 14px;
            margin-top: 10px;
        }

        .services-ion {
            margin-bottom: 10px;
        }

        .services-ion span {
            font-size: 40px;
        }

        /* Tambahan untuk spacing */
        .servic-padding {
            padding-top: 30px;
            padding-bottom: 10px;
        }
    }
</style>

<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider hero-overly  slider-height d-flex align-items-center"
            data-background="<?= base_url('assets/template') ?>/img/hero/hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="hero__caption">
                            <h1>Find your <span>Next tour!</span> </h1>
                            <h2 class="display-6">explore and discover Bali with us.</h2 class="display-6">
                            <h2 class="display-6" style="color: #00d285;"> see the beauty of Bali</h2
                                class="display-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- Our Services Start -->
<div class="our-services servic-padding">
    <div class="container">
        <div class="row d-flex justify-contnet-center">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="single-services text-center shadow mb-4">
                    <div class="services-ion">
                        <span class="flaticon-tour"></span>
                    </div>
                    <div class="services-cap">
                        <h5>10+ Our Local<br>Guides</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="single-services text-center shadow mb-4">
                    <div class="services-ion">
                        <span class="flaticon-pay"></span>
                    </div>
                    <div class="services-cap">
                        <h5>100% Trusted Tour<br>Agency</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="single-services text-center shadow mb-4">
                    <div class="services-ion">
                        <span class="flaticon-experience"></span>
                    </div>
                    <div class="services-cap">
                        <h5>30+ Years of Travel<br>Experience</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="single-services text-center shadow mb-4">
                    <div class="services-ion">
                        <span class="flaticon-good"></span>
                    </div>
                    <div class="services-cap">
                        <h5>98% Our Travelers<br>are Happy</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Services End -->


<!-- <div class="col-lg-12 d-flex justify-content-center text-center" style="margin-top: 100px; gap: 20px;">
    <div class="col-md-2 btn" id="MountainBtn">Mountain</div>
    <div class="col-md-2 btn" id="BeachBtn">Beach</div>
    <div class="col-md-2 btn" id="TempleBtn">Temple</div>
</div> -->


<!-- Favourite Places Start -->
<div class="favourite-place place-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12 mb-5">
                <div class="section-tittle text-center">
                    <span>FEATURED TOURS Packages</span>
                    <h3 class="font">explore top destinations</h3>
                </div>
            </div>
        </div>
        <div id="Mountain" class="row">
            <?php foreach (@$destination as $k) : ?>
                <?php if (@$k->top_destination == 1) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 fade-in-delay">
                        <div class="destination-card">
                            <div class="destination-img">
                                <img src="<?= base_url('assets/template/img/destination/' . @$k->image) ?>" alt="<?= @$k->name; ?>">
                                <!-- Badge penghargaan -->
                                <div class="destination-badge">
                                    <i class="fas fa-award"></i> top
                                </div>
                            </div>
                            <div class="destination-content">
                                <h3 class="destination-title font"><a href="#"><?= @$k->name; ?></a></h3>
                                <p class="text-muted">Mulai dari</p>
                                <div class="destination-price">IDR <?= number_format(@$k->price, 0, ',', '.'); ?> <span>/ Per Orang</span></div>
                                <div class="destination-meta">
                                    <div class="destination-meta-item">
                                        <i class="far fa-clock"></i>
                                        <span><?= @$k->day; ?> Hari</span>
                                    </div>
                                    <div class="destination-meta-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span><?= @$k->regency; ?>, Bali</span>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" onclick="bookDestination(<?= @$k->id; ?>, '<?= @$k->name; ?>')" class="booking-btn">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        // Event ketika tombol Mountain diklik
        $('#MountainBtn').click(function() {
            // Sembunyikan semua bagian
            $('#Mountain').show();
            $('#Beach').hide();
            $('#Nature').hide();

            // Tambahkan kelas aktif
            $(this).addClass('active');
            $('#BeachBtn, #TempleBtn').removeClass('active');
        });

        // Event ketika tombol Beach diklik
        $('#BeachBtn').click(function() {
            $('#Mountain').hide();
            $('#Beach').show();
            $('#Nature').hide();

            // Tambahkan kelas aktif
            $(this).addClass('active');
            $('#MountainBtn, #TempleBtn').removeClass('active');
        });

        // Event ketika tombol Nature diklik
        $('#TempleBtn').click(function() {
            $('#Mountain').hide();
            $('#Beach').hide();
            $('#Nature').show();

            // Tambahkan kelas aktif
            $(this).addClass('active');
            $('#MountainBtn, #BeachBtn').removeClass('active');
        });

        // Default behavior: sembunyikan semua kecuali salah satu
        $('#Mountain').show(); // Atur untuk tampilan default

        // Animasi untuk kartu destinasi
        $('.destination-card').each(function(index) {
            $(this).css('animation-delay', (index * 0.1) + 's');
        });
    });

    // Fungsi untuk menangani booking destinasi
    function bookDestination(id, name) {
        Swal.fire({
            title: 'Booking Paket Wisata',
            html: `
                <div class="text-left">
                    <p>Anda akan memesan paket wisata <strong>${name}</strong></p>
                    <form id="bookingForm">
                        <div class="form-group mb-3">
                            <label for="bookingName" class="float-left">Nama Lengkap</label>
                            <input type="text" class="form-control" id="bookingName" placeholder="Masukkan nama lengkap Anda">
                        </div>
                        <div class="form-group mb-3">
                            <label for="bookingPhone" class="float-left">Nomor Telepon</label>
                            <input type="text" class="form-control" id="bookingPhone" placeholder="Masukkan nomor telepon Anda">
                        </div>
                        <div class="form-group mb-3">
                            <label for="bookingDate" class="float-left">Tanggal Perjalanan</label>
                            <input type="date" class="form-control" id="bookingDate">
                        </div>
                        <div class="form-group mb-3">
                            <label for="bookingPeople" class="float-left">Jumlah Orang</label>
                            <input type="number" class="form-control" id="bookingPeople" min="1" value="1">
                        </div>
                    </form>
                </div>
            `,
            showCancelButton: true,
            confirmButtonText: 'Pesan Sekarang',
            cancelButtonText: 'Batal',
            confirmButtonColor: '#014b85',
            cancelButtonColor: '#6c757d',
            focusConfirm: false,
            preConfirm: () => {
                const name = document.getElementById('bookingName').value;
                const phone = document.getElementById('bookingPhone').value;
                const date = document.getElementById('bookingDate').value;
                const people = document.getElementById('bookingPeople').value;

                if (!name || !phone || !date || !people) {
                    Swal.showValidationMessage('Silakan lengkapi semua data');
                    return false;
                }

                return {
                    name,
                    phone,
                    date,
                    people
                };
            }
        }).then((result) => {
            if (result.isConfirmed) {
                // Di sini Anda bisa menambahkan logika untuk mengirim data ke server
                // Untuk sementara, kita hanya menampilkan pesan sukses
                Swal.fire({
                    title: 'Booking Berhasil!',
                    text: 'Terima kasih telah memesan paket wisata kami. Tim kami akan menghubungi Anda segera.',
                    icon: 'success',
                    confirmButtonColor: '#014b85'
                }).then(() => {
                    // Redirect atau lakukan aksi lain setelah booking berhasil
                    // window.location.href = '<?= base_url('landing_page/booking_success') ?>';

                    // Untuk sementara, kita hanya menampilkan alert
                    console.log('Booking berhasil:', {
                        destination_id: id,
                        destination_name: name,
                        customer_name: result.value.name,
                        customer_phone: result.value.phone,
                        travel_date: result.value.date,
                        number_of_people: result.value.people
                    });
                });
            }
        });
    }
</script>