<?php
    namespace App\Controllers;
    use App\Models\UsuarioServerModel;

    class Usuarioserver extends BaseController{
        private function checkServerStatus($url, $port = 443, $timeout = 2) {
            $fp = @fsockopen($url, $port, $errno, $errstr, $timeout);
            if ($fp) {
                fclose($fp);
                return true;
            } else
                return false;
        }

        public function index(){
            if (session() -> has("usuarios")){
                return view("/vista/usuario-server");
            }
            return view("/vista/error-vistas");
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

        public function panelcontrol($idUrl){
            $idSesion = session("id");
        
            if (!$idSesion) {
                return view("/vista/error-vistas");
            }
        
            $ServerModel = new UsuarioServerModel();
        
            $servidor = $ServerModel
                            -> where("id", $idUrl)
                            -> where("id_usuario", $idSesion)
                            -> first();
        
            if (!$servidor) {
                return view("/vista/error-enlace");
            }
        
            $online = $this -> checkServerStatus($servidor["dominio"]);
            $data = [
                "servidor" => $servidor,
                "online"   => $online];
            return view("/vista/panel-control", $data);
        }

        public function actualizar_server($id){
            if(session("id") != 1){
                new UsuarioServerModel() -> update($id, $this -> request -> getPost());
                return redirect() -> to("/vista/usuario");
            }
            return view("/vista/error-vistas");
        }

        public function editar_server($idUrl){
            $idSesion = session("id");
        
            if (!$idSesion) {
                return view("/vista/error-enlace");
            }
        
            $ServerModel = new UsuarioServerModel();
        
            $server = $ServerModel
                        -> where("id", $idUrl)
                        -> where("id_usuario", $idSesion)
                        -> first();
        
            if (!$server) {
                return view("/vista/error-enlace");
            }

            $data = ["server" => $server];
        
            return view("/vista/editar-server", $data);
        }
    }
?>