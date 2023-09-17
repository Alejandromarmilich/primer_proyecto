<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = 'pagina principal';
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('front/principal');
		echo view('front/footer_view');
	}

	public function quienes_somos()
	{
		$data['title'] = 'quienes somos';
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('front/quienes_somos');
		echo view('front/footer_view');
	}
	public function acerca_de()
	{
		$data['title'] = 'acerca de';
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('front/acerca_de');
		echo view('front/footer_view');
	}
	public function registro()
	{
		$data['title'] = 'registro';
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('front/registro');
		echo view('front/footer_view');
	}
	public function login()
	{
		$data['title'] = 'login';
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('front/login');
		echo view('front/footer_view');
	}
	public function catalogo()
	{
		$data['title'] = 'catalogo';
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('front/catalogo');
		echo view('front/footer_view');
	}

}
