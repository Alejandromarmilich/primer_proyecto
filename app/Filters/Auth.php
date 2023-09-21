<?php
namespace Filters;

use CodeIgniter\Filters\FilterInterface as FiltersFilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\FilterInterface;
use CodeIgniter\HTTP\Response;

class Auth implements FilterFilterInterface {
    public function before( RequestInterface $request, $arguments = null ) {
        // Si el usuario no esta logueado
        if(!session()->get('logged_in')){
            // entonces redirecciona a la página de login
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){
        // Haz algo aqui
    }
}
