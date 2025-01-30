<?php

require_once "Barang.php";

class Perabotan extends Barang{
    protected $bahan;

    public function __construct($nama, $barcode, $tanggal, $jumlah, $bahan) {
        parent:: __construct($nama, $barcode, $tanggal, $jumlah);
        $this->bahan = $bahan;
    }

    function setBahan($bahan){
        $this->bahan = $bahan;
    }

    function getBahan(){
        return $this->bahan;
    }

    public function getAllData():array{
        $data['nama'] = $this->getNama();
        $data['barcode'] = $this->getBarcode();
        $data['tanggal_masuk'] = $this->getTanggal();
        $data['jumlah'] = $this->getJumlah();
        $data['keterangan'] = $this->getBahan();
        return $data;
    }
    // tambahkan code disini
    
    // implement function getAllData()
    // masukan nilai dari property 'bahan' pada array dengan definisi 'keterangan'
}