<?php
    namespace App\Controllers;
    use App\Models\UsuarioServerModel;

    class Usuarioserver extends BaseController{
        public function index(){
            return view("/vista/usuario-server");
        }

        public function guardar(){
            $model = new UsuarioServerModel();
            
            $nombre = $this -> request -> getPost("nombreserver");
            $descripcion = $this -> request -> getPost("descripcionserver");
            $dominio = $this -> request -> getPost("dominioserver");
            $dns1 = $this -> request -> getPost("dns1");
            $dns2 = $this -> request -> getPost("dns2");
            $dns3 = $this -> request -> getPost("dns3");
            $dns4 = $this -> request -> getPost("dns4");
            $dns = $dns1.".".$dns2.".".$dns3.".".$dns4;
            
            $model -> insert([
                "nombre" => $nombre,
                "descripcion" => $descripcion,
                "dominio" => $dominio,
                "dns" => $dns
            ]);

            return redirect() -> to("/vista/usuario");
        }
    }
?>