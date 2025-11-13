<?php
    namespace App\Controllers;
    use App\Models\UsuarioModel;

    class CrearCuenta extends BaseController{
        public function index(){
            $data = ["error"         => "Error : Por favor rellene todos los campos!.",
                     "correcto"      => "Cuenta creada con exito",
                     "Nombre"        => $this -> request -> getPost('nombre'),
                     "NombreUsuario" => $this -> request -> getPost('nombreusuario'),
                     "Clave"         => password_hash($this -> request -> getPost("clave"),PASSWORD_DEFAULT),
                     "Correo"        => $this -> request -> getPost('correo'),
                     "request"       => $this -> request -> getPost('enviar') ];
            return view("/login/crearcuenta", $data);
        }

        public function guardar() {
            $model = new UsuarioModel();
        
            $nombre         = $this->request->getPost('nombre');
            $nombreusuario  = $this->request->getPost('nombreusuario');
            $clave          = $this->request->getPost('clave');
            $correo         = $this->request->getPost('correo');
        
            $model->insert([
                'nombre'        => $nombre,
                'nombreusuario' => $nombreusuario,
                'clave'         => password_hash($clave, PASSWORD_DEFAULT),
                'correo'        => $correo,
            ]);
        
            return redirect()->to('/login/crearcuenta');
        }
    }
?>