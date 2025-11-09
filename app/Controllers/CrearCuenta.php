<?php
    namespace App\Controllers;

    class CrearCuenta extends BaseController{
        public function index(){
            $data = ["error"         => "Error : Por favor rellene todos los campos!.",
                     "correcto"      => "Cuenta creada con exito",
                     "Nombre"        => $this -> request -> getPost('nombre'),
                     "NombreUsuario" => $this -> request -> getPost('nombreusuario'),
                     "Clave"         => $this -> request -> getPost('clave'),
                     "correo"        => $this -> request -> getPost('email'),
                     "request"       => $this -> request -> getPost('enviar') ];
            return view("/login/crearcuenta", $data);
        }
    }
?>