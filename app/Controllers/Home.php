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
}
