<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model

{

    protected $table  = "daftar_barang";

    protected $allowedFields = ["nama_barang", "harga_barang", "deskripsi_barang"];



    public function show()
    {
        return $this->join("jenis_barang", "jenis_barang.id_jenis_barang = daftar_barang.jenis_barang")->join("kategori_barang", "kategori_barang.id_kategori_barang = daftar_barang.kategori_barang")->findAll();
    }

    public function get($id)
    {
        return $this->join("jenis_barang", "jenis_barang.id_jenis_barang = daftar_barang.jenis_barang")->join("kategori_barang", "kategori_barang.id_kategori_barang = daftar_barang.kategori_barang")->find($id);
    }

    public function barang()
    {
        echo json_encode($this->show());
        exit;
    }
    public function barang_id($id)
    {
        echo json_encode($this->get($id));
        exit;
    }

    public function edit_barang_id($data)
    {

        $this->set([
            "nama_barang" => $data["nama"],
            "harga_barang" => $data["harga"],
            "deskripsi_barang" => $data["deskripsi"]
        ])->where('id', $data["id"])->update();

        echo json_encode("ok");
        exit;
    }
}
