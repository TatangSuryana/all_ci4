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
}
