<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Home | Web Programming Fik",
			'tes' => ['satu', 'dua', 'tiga']
			];
		return view('pages/home', $data);
	}

	public function about()
	{
		$data = [
			'title' => "About | Web Programming Fik"
			];
		return view('pages/about', $data);
	}

	public function contact()
	{
		$data = [
			'title' => "Contact | Web Programming Fik",
			'alamat' => [
				[
					'tipe' => 'Rumah',
					'alamat' => 'Ds 1 Jajaran Baru',
					'kota' => 'Musi Rawas'
				],
				[
					'tipe' => 'Kos',
					'alamat' => 'Bandar Lampung sukarame',
					'kota' => 'Bandar Lampung'
				]
			]
		];

		return view('pages/contact', $data);
	}

	//--------------------------------------------------------------------

}
