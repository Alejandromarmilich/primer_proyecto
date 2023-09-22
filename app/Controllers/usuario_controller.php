<?php
namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;
class usuario_controller extends Controller{
    public function __construct(){
        helper(['form','url']);
    }
    public function create() {
        $dato['titulo']='registro';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }
    public function formValidation(){
        $input = $this->validate([
            'nombre'=> 'required|min_length[3]',
            'apellido'=> 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]|is_unique[usuarios.usuario]',
            'email' => 'required|min_length[3]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[25]',
            'pass_confirm' => 'required_with[pass]|matches[pass]',
            'direccion'=> 'required|min_length[3]|max_length[100]',
            'ciudad'=> 'required|min_length[3]|max_length[50]',
            'cp'=> 'required|min_length[4]|max_length[4]',
        ]);
        $formModel = new usuario_Model();
        if (!$input) {
            $data['titulo'] = 'registro';
            echo view('front/head_view',$data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro',['validation'=>$this->validator, 'titulo' => $data['titulo']]);
            echo view('front/footer_view');
        } else {
            $formModel->save([
                'nombre'=> $this-> request -> getVar ('nombre'),
                'apellido'=> $this-> request -> getVar ('apellido'),
                'usuario'=> $this-> request -> getVar ('usuario'),
                'email'=> $this-> request -> getVar ('email'),
                'pass'=>password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT), //password_hash crea un nuevo hash de contraseña usando un algoritmo de hash de unico sentido                
                'direccion'=> $this-> request -> getVar ('direccion'),
                'ciudad'=> $this-> request -> getVar ('ciudad'),
                'cp'=> $this-> request -> getVar ('cp'),
            ]);

            //Flashdata funciona solo en redirigir la funcion en el controlador en la vista de carga
            session()->setFlashdata('success','Usuario registrado con éxito');
            return redirect()->to(base_url('/registro'));
        }
    }
}