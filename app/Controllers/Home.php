<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'HOME - FisPEDIA',
		];
		return view('front/home', $data);
	}

	public function tentangkami()
	{
		$data = [
			'title' => 'TENTANG KAMI - FisPEDIA',
		];
		return view('front/tentangkami', $data);
	}

	public function layanan()
	{
		$data = [
			'title' => 'LAYANAN - FisPEDIA',
		];
		return view('front/layanan', $data);
	}
	public function kontak()
	{
		$data = [
			'title' => 'KONTAK - FisPEDIA',
		];
		return view('front/kontak', $data);
	}

	public function disclamer()
	{
		$data = [
			'title' => 'DISCLAMER - FisPEDIA',
		];
		return view('front/disclamer', $data);
	}

	public function arsip()
	{
		$data = [
			'title' => 'ARSIP - FisPEDIA',
		];
		return view('front/arsip', $data);
	}

	public function iklan()
	{
		$data = [
			'title' => 'IKLAN - FisPEDIA',
		];
		return view('front/iklan', $data);
	}

	public function section()
	{
		
		$ss = session();

		dd($ss->logged_in);

	}

	//--------------------------------------------------------------------

}
