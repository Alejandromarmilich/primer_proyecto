<?php namespace App\Controllers;

class Home extends BaseController{
	public function index()
	{
		$data['title'] = 'Página principal';
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('front/principal');
		echo view('front/footer_view');
	}
	public function quienes_somos()
	{
		$data['title'] = 'Quienes somos';
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('front/quienes_somos');
		echo view('front/footer_view');
	}
	public function acerca_de()
	{
		$data['title'] = 'Acerca de';
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('front/acerca_de');
		echo view('front/footer_view');
	}
	public function registro()
	{
		$data['title'] = 'Registro';
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('back/usuario/registro');
		echo view('front/footer_view');
	}
	public function login()
	{
		$data['title'] = 'Login';
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('back/usuario/login');
		echo view('front/footer_view');
	}
	public function catalogo()
	{
		$data['title'] = 'Catalogo';
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('front/catalogo');
		echo view('front/footer_view');
	}
}
