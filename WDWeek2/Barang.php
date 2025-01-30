<?php

abstract class Barang{
    // Lengkapi code berikut
    abstract public function getAllData();


function __construct($nama, $barcode, $tanggal, $jumlah) {
    $this->nama = $nama;
    $this->barcode = $barcode;
    $this->tanggal = $tanggal;
    $this->jumlah = $jumlah;
}

function getNama() {
    return $this->nama;
}
  function setNama($nama) {
    $this->nama = $nama;
}

function getBarcode() {
    return $this->barcode;
}
  function setBarcode($barcode) {
    $this->barcode = $barcode;
}

function getTanggal() {
    return $this->tanggal;
}
  function setTanggal($tanggal) {
    $this->tanggal = $tanggal;
}

function getJumlah() {
    return $this->jumlah;
}
  function setJumlah($jumlah) {
    $this->jumlah = $jumlah;
}
}
?>