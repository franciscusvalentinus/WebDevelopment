<?php

require_once "Barang.php";

class Konsumsi extends Barang {
    protected $expired;

    public function __construct($nama, $barcode, $tanggal, $jumlah, $expired) {
        parent:: __construct($nama, $barcode, $tanggal, $jumlah);
        $this->expired = $expired;
    }

    function setExpired($expired) {
        $this->expired = $expired;
    }

    function getExpired() {
        return $this->expired;
    }

    public function getAllData():array {
        $data['nama'] = $this->getNama();
        $data['barcode'] = $this->getBarcode();
        $data['tanggal_masuk'] = $this->getTanggal();
        $data['jumlah'] = $this->getJumlah();
        $data['keterangan'] = $this->getExpired();
        return $data;
    }
    // tambahkan code disini
    
    // implement function getAllData()
    // masukan nilai dari property 'expired' pada array dengan definisi 'keterangan'
}