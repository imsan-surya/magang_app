<?php namespace App\Controllers;

class Donatur extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Halaman Donatur',
			'isi' => 'v_halaman',
		];
		return view('layout/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

}
