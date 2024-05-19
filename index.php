<!DOCTYPE html>
<html lang="en">
<?php include('header.html'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru </title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
        }
        header {
            color: #fff;
            padding: 20px;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        header h3 {
            margin: 0;
            font-size: 1.5em;
        }

        h5 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }

        .nav-pills .nav-link.active {
            background-color: #f4978e;
        }

        .nav-pls .nav-link.active {
            background-color: #f4978e;
        }

        .menu-container {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .menu-container h4 {
            margin-bottom: 10px;
            font-family: 'Times New Roman', Times, serif;
            background-color:#014e0a;
        }

        .menu-container .nav-pills {
            margin-bottom: 20px;
        }

        .menu-container .nav-pills .nav-link {
            font-family: 'Times New Roman', Times, serif;
            background-color:#014e0a;
        }

        .menu-container .nav-pls {
            margin-top: 10px;
        }

        .alert {
            margin-bottom: 20px; /* Jarak antara alert dan menu */
        }
    </style>
</head>

<body>
<header class="text-center mb-4">
    <h1>Pendaftaran Siswa Baru</h1>
</header>

<div class="container mt-5">
    <?php if(isset($_GET['status'])): ?>
        <div class="alert <?php echo ($_GET['status'] == 'sukses') ? 'alert-success' : 'alert-danger'; ?>" role="alert">
            <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
            ?>
        </div>
    <?php endif; ?>

    <div class="menu-container">
        <h5>Silahkan Pilih Menu dibawah ini!</h5>
        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="form-daftar.php" style="font-family: 'Times New Roman', Times, serif;">Daftar Baru</a>
            </li>
        </ul>

        <ul class="nav nav-pills mx-4 justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="list-siswa.php" style="font-family: 'Times New Roman', Times, serif;">Pendaftar</a>
            </li>
        </ul>
    </div>
</div>
<script src="vendor/twbs/bootsrap/dist/js/jquery.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include('footer.html'); ?>