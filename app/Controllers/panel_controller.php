<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class panel_controller extends Controller{
    public function index(){
        $session = session();
        $nombre = $session->get('usuario');
        $perfil = $session->get('perfil_id');

        $data['perfil_id']=$perfil;

        $dato['titulo']='Panel de usuario';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('back/usuario/usuario_logueado',$data);
        echo view('front/footer_view');
    }
}