<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aluh Trans | <?= $title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Google Font: Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/dist/css/adminlte.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #014b85 0%, #0a2e50 100%);
            height: 100vh;
            overflow-x: hidden;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            max-width: 500px;
            width: 100%;
            transition: all 0.3s ease;
        }

        /* .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        } */

        .login-header {
            padding: 30px 20px 0;
            text-align: center;
        }

        .login-header img {
            max-height: 120px;
            width: auto;
            transition: transform 0.3s ease;
        }

        .login-header img:hover {
            transform: scale(1.05);
        }

        .login-body {
            padding: 20px 40px 40px;
        }

        .login-title {
            color: #333;
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 25px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-control {
            height: 50px;
            border-radius: 25px;
            padding-left: 45px;
            font-size: 16px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #014b85;
            box-shadow: 0 0 0 0.2rem rgba(1, 75, 133, 0.25);
        }

        .form-icon {
            position: absolute;
            left: 15px;
            top: 15px;
            color: #014b85;
            font-size: 20px;
        }

        .btn-login {
            background: #014b85;
            border: none;
            border-radius: 25px;
            color: white;
            font-size: 16px;
            font-weight: 500;
            height: 50px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            color: #ffffff;
            background: #013b69;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(1, 75, 133, 0.4);
        }

        .login-footer {
            margin-top: 20px;
            text-align: center;
        }

        .login-footer a {
            color: #014b85;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .login-footer a:hover {
            color: #013b69;
            text-decoration: none;
        }

        @media (max-width: 576px) {
            .login-body {
                padding: 20px 25px 30px;
            }

            .login-card {
                border-radius: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <img src="<?= base_url('assets/template') ?>/img/logo/logo_login2.png" alt="Aluh Trans Logo" class="img-fluid">
            </div>
            <div class="login-body">
                <h1 class="login-title">Masuk ke Akun Anda</h1>

                <?= $this->session->flashdata('message'); ?>

                <form method="post" action="<?= base_url('auth') ?>">
                    <div class="form-group">
                        <i class="fas fa-envelope form-icon"></i>
                        <input type="text" class="form-control" name="email" id="email"
                            placeholder="Alamat Email" value="<?= set_value('email') ?>">
                        <?= form_error('email', '<small class="text-danger pl-4">', '</small>') ?>
                    </div>

                    <div class="form-group">
                        <i class="fas fa-lock form-icon"></i>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Password">
                        <?= form_error('password', '<small class="text-danger pl-4">', '</small>') ?>
                    </div>

                    <button type="submit" class="btn btn-login btn-block">
                        Masuk
                    </button>
                </form>

                <div class="login-footer">
                    <a href="<?= base_url('auth/registration') ?>">Belum punya akun? Daftar sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>