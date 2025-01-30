<?php
include("cek.php");
if (!empty($_SESSION['daftar'])) {
    $serialized = $_SESSION['daftar'];
    $_SESSION['daftar1'] = $serialized;
    $users = unserialize($serialized);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>List Data</title>
</head>
<body>
    <div >
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <div class="row">
        <div class="col">
        <h1>List Data</h1>
            <a class="btn btn-primary"href="form_pendaftaran.php" role="button">Tambah</a>
            <a class="btn btn-danger" href="hapus.php" role="button">Hapus</a>
        </div>
        </div>
        </div>
        </div>
        <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($_SESSION['daftar'])) {
                    for ($x = 0; $x < count($users); $x++) {
                        echo "<tr>";
                        echo "<td>" . $users[$x]->get_name() . "</td>";
                        echo "<td>" . $users[$x]->get_address() . "</td>";
                        echo "<td>" . $users[$x]->get_phone() . "</td>";
                        echo "<td>" . $users[$x]->get_birthday() . "</td>";
                        echo "<td>" . $users[$x]->get_email(). "</td>";
                    }
                }
                ?>
            </tbody>
        </table>
        </div>
    </div></body>
</html>