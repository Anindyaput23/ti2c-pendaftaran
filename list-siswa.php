<?php include("koneksi.php"); ?>
<?php include('header.html'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | PNM</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <style>
          body {
            background-image: url('background2.jpg');
            background-size: cover;
        }
        header {
            color: black;
            padding: 20px;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }

        header h3 {
            margin: 0;
        }

        .btn-custom {
            color: white;
            background-color: #014e0a;
            font-family: 'Times New Roman', Times, serif;
        }

        .btn-custom:hover {
            color: white;
            background-color: #014e0a;
            
        }

        .btn-cstm {
            color: white;
            background-color: #014e0a;
        }

        .btn-cstm:hover {
            color: white;
            background-color: #014e0a;
        }
    </style>
</head>

<body>
        <header class="mb-4" >
            <h3 class="text-center">Siswa yang sudah mendaftar</h3>
        </header>

        <nav class="mb-4 d-flex justify-content-center">
            <a href="form-daftar.php" class="btn btn-custom">[+] Tambah Baru</a>
        </nav>
        <div class="container mt-5">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($db, $sql);
                $no = 1;

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn btn-cstm btn-sm'>Edit</a> ";
                    echo "<a href='hapus.php?id=".$siswa['id']."' class='btn btn-danger btn-sm'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>

    <script src="vendor/twbs/bootsrap/dist/js/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include('footer.html'); ?>