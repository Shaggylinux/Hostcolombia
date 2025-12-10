<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model {
    protected $table         = "usuarios";
    protected $primaryKey    = "id";
    protected $allowedFields = [
                                "nombre",
                                "nombreusuario",
                                "clave",
                                "correo",
                                "id_perfil",
                                "pago"];
    public $timestamps = false;

    public function VerificarUsuario($usuario, $password) { 
        return $this -> where("nombreusuario", $usuario)
                     -> where("clave", $password)
                     -> first();
        }
    }
?>