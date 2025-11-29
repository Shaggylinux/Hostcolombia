<?php
    namespace App\Controllers;
    use App\Models\UsuarioModel;

    class CrearCuenta extends BaseController{
        public function index(){
            return view("/login/crearcuenta");
        }

        public function guardar() {
            $model = new UsuarioModel();
        
            $nombre         = $this -> request -> getPost('nombre');
            $nombreusuario  = $this -> request -> getPost('nombreusuario');
            $clave          = $this -> request -> getPost('clave');
            $correo         = $this -> request -> getPost('correo');

            $model -> insert([
                'nombre'        => $nombre,
                'nombreusuario' => $nombreusuario,
                'clave'         => password_hash($clave, PASSWORD_DEFAULT),
                'correo'        => $correo,
            ]);
        
            return redirect() -> to('/login/crearcuenta');
        }
    }
?>