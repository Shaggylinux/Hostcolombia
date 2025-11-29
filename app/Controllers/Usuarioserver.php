<?php
    namespace App\Controllers;
    use App\Models\UsuarioServerModel;

    class Usuarioserver extends BaseController{
        public function index(){
            if (session() -> has("usuarios")){
                return view("/vista/usuario-server");
            }
            return view("/vista/error");
        }

        public function guardar(){
            $model = new UsuarioServerModel();

            $user = session() -> get("usuarios");
            $id   = $user["id"];

            $nombre      = $this -> request -> getPost("nombreserver");
            $descripcion = $this -> request -> getPost("descripcionserver");
            $dominio     = $this -> request -> getPost("dominioserver");
            
            $model -> insert([
                "nombre"      => $nombre,
                "descripcion" => $descripcion,
                "dominio"     => $dominio,
                "id_usuario"  => $id
            ]);

            return redirect() -> to("/vista/usuario");
        }
    }
?>