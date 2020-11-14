<?php namespace App\Controllers;

class Coba extends BaseController
{
	public function index()
	{
		echo "ini index";
	}

	public function about($nama = '', $umur = '')
	{
		echo "halo nama saya adalah $nama, saya berumur $umur";
	}
	//--------------------------------------------------------------------

}
