<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
				'title' => 'Home',
				'isi' => 'v_home',
		];
		echo view('layout/v_wrapper',$data);
	}
	public function menu2()
	{
		$data = [
			'title' => 'Judul Menu 2',
			'isi' => 'v_menu2',
	];
	echo view('layout/v_wrapper',$data);
	}

	public function menu3()
	{
		$data = [
			'title' => 'Judul Menu 3',
			'isi' => 'v_menu3',
	];
	echo view('layout/v_wrapper',$data);
	}
	
	//----------------------------------------------
}
