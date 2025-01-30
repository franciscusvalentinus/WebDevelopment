<?php

require_once "Barang.php";

class Elektronik extends Barang {
    protected $daya;
    function __construct($nama, $barcode, $tanggal, $jumlah, $daya) {
        parent::__construct($nama, $barcode, $tanggal, $jumlah);
        $this->daya = $daya;
    }

    function getDaya() {
        return $this->daya;
    }

    function setDaya($daya) {
        $this->daya = $daya;
    }

    public function getAllData():array {
        $data['nama'] = $this->getNama();
        $data['barcode'] = $this->getBarcode();
        $data['tanggal_masuk'] = $this->getTanggal();
        $data['jumlah'] = $this->getJumlah();
        $data['keterangan'] = $this->getDaya();
        return $data;
    }
    // tambahkan code disini
    
    // implement function getAllData()
    // masukan nilai dari property 'daya' pada array dengan definisi 'keterangan'
    
}