<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Halaman Admin',
			'isi' => 'v_halaman',
		];
		return view('layout/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

}
