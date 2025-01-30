<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();

require "Elektronik.php";
require "Konsumsi.php";
require "Perabotan.php";

$list = unserialize($_SESSION["data"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Data</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-8">
                <a href="Hapus.php" class="btn btn-danger btn-block" role="button" aria-pressed="true">Hapus</a>
            </div>
            <div class="col-md-2">
                <a href="Form_Barang.php" class="btn btn-primary btn-block" role="button" aria-pressed="true">Tambah</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_SESSION["data"])){
                    foreach ($list as $data) {
                        $barang = $data->getAllData();
                        ?>
                        
                        <tr>
                            <td><?= $barang['nama'] ?></td>
                            <td><?= $barang['barcode'] ?></td>
                            <td><?= $barang['tanggal_masuk'] ?></td>
                            <td><?= $barang['jumlah'] ?></td>
                            <td><?= $barang['keterangan'] ?></td>
                        </tr>
                    <?php } }?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>