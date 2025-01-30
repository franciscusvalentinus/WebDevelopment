<?php
session_start();

require "Elektronik.php";
require "Konsumsi.php";
require "Perabotan.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty($_POST["nama"]) &&
        !empty($_POST["barcode"]) &&
        !empty($_POST["tanggal"]) &&
        !empty($_POST["jumlah"]) &&
        !empty($_POST["exampleRadios"])
    ) {
        if (isset($_SESSION["data"])) {
            $list = unserialize($_SESSION["data"]);
        } else {
            $list = array();
        }

        if($_POST["exampleRadios"] == "Konsumsi"){
            $listBarang = new Konsumsi($_POST['nama'], $_POST['barcode'], $_POST['tanggal'], $_POST['jumlah'], $_POST['expired']);
            array_push($list, $listBarang);
            // Code here
            // Push object to array

        }else if($_POST["exampleRadios"] == "Elektronik"){
            $listBarang = new Elektronik($_POST['nama'], $_POST['barcode'], $_POST['tanggal'], $_POST['jumlah'], $_POST['daya']);
            array_push($list, $listBarang);
            // Code here
            // Push object to array

        }else if($_POST["exampleRadios"] == "Perabotan"){
            $listBarang = new Perabotan($_POST['nama'], $_POST['barcode'], $_POST['tanggal'], $_POST['jumlah'], $_POST['bahan']);
            array_push($list, $listBarang);
            // Code here
            // Push object to array

        }

        $_SESSION["data"] = serialize($list);
        header("Location: index.php");
        exit();
    }else{
        header("Location: Form_Barang.php");
        exit();
    }
}
