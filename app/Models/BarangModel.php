<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model

{

    protected $table  = "daftar_barang";



    public function show()
    {
        return $this->join("jenis_barang", "jenis_barang.id_jenis_barang = daftar_barang.jenis_barang")->join("kategori_barang", "kategori_barang.id_kategori_barang = daftar_barang.kategori_barang")->findAll();
    }

    public function get($id)
    {
        return $this->join("jenis_barang", "jenis_barang.id_jenis_barang = daftar_barang.jenis_barang")->join("kategori_barang", "kategori_barang.id_kategori_barang = daftar_barang.kategori_barang")->find($id);
    }
}
