<?php
    namespace App\Controllers;
    use App\Models\UsuarioModel;
    use App\Models\RolModel;

    class CrearCuenta extends BaseController{
        public function index(){
            return view("/login/crearcuenta");
        }

        public function guardar() {
            $ModelUsuario = new UsuarioModel();
        
            $nombre         = $this -> request -> getPost("nombre");
            $nombreusuario  = $this -> request -> getPost("nombreusuario");
            $clave          = $this -> request -> getPost("clave");
            $correo         = $this -> request -> getPost("correo");

            $ModelUsuario -> insert([
                "nombre"        => $nombre,
                "nombreusuario" => $nombreusuario,
                "clave"         => password_hash($clave, PASSWORD_DEFAULT),
                "correo"        => $correo,
            ]);

            $ModelRol = new RolModel();
            $ModelRol -> insert([
                "id" => $ModelUsuario -> getInsertID()
            ]);
        
            return redirect() -> to("/login/crearcuenta");
        }
    }
?>