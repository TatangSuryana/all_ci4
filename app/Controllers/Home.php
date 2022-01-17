<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			"judul" => "All with Ci4",
			"barang" => new \App\Models\BarangModel()
		];


		return view('home', $data);
	}

	public function edit($id = null)
	{
		if ($id == null) {

			return redirect()->to('/');
		}

		$barang = new \App\Models\BarangModel();

		$data = [
			"judul" => "edit Barang",
			"detail_barang" => $barang->get($id)
		];

		return view("edit", $data);
	}

	public function barang()
	{
		$barang = new \App\Models\BarangModel();

		return $barang->barang();
	}
	public function editjson($id)
	{
		$barang = new \App\Models\BarangModel();

		return $barang->barang_id($id);
	}

	public function saveedit()
	{
		$barang = new \App\Models\BarangModel();
		$data = $this->request->getVar();
		$datai = $this->request->getFile("gambar");
		if ($datai->getError() == 4) {
			$barang->edit_barang_id($data);
		} else {
			$barang->edit_barang_upload_id($data, $datai);
		}
	}
}
