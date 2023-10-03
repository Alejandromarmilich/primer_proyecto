<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model{
    protected $table = 'usuarios'; //nombre de la tabla
    protected $primaryKey = 'id_usuario'; //identificador de la tabla
    protected $allowedFields = [
        'nombre',
        'apellido',
        'usuario',
        'email',
        'pass',
        'perfil_id',
        'direccion',
        'ciudad',
        'provincia',
        'cp',
        'baja',
        'created_at'
    ];
}