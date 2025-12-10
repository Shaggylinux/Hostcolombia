<?php
    namespace App\Controllers;

    use App\Models\UsuarioModel;
    use App\Models\UsuarioServerModel;
    use Config\Database;

    class Usuario extends BaseController{
        private function checkServerStatus($url, $port = 443, $timeout = 2) {
            $fp = @fsockopen($url, $port, $errno, $errstr, $timeout);
            if ($fp) {
                fclose($fp);
                return true;
            } else
                return false;
        }

        public function usuariovista(){
            if (session("id") != 1) {
                $usuario       = session() -> get("usuarios");
                $idusuario     = $usuario["id"];
                $UsuarioServer = new UsuarioServerModel();

                $servidores    = $UsuarioServer
                    -> where("id_usuario", $idusuario)
                    -> findAll();
                
                foreach ($servidores as &$s) {
                    $s["online"]  = $this -> checkServerStatus($s["dominio"]);
                }
                $db    = Database::connect();
                $query = $db -> query("SELECT nombre, dominio FROM servidor") -> getResult();
                
                $data = [
                    "nombreserver" => $query,
                    "Userid"       => $idusuario,
                    "servidores"   => $servidores,
                    "usuario"      => new UsuarioModel() -> find(session("id"))
                ];
            return view('/vista/usuario', $data);
            }
        return view("/vista/error-vistas");
        }

        public function editar_usuario($idUrl) {
            $idSesion = session() -> get("id");
        
            if (!$idSesion) {
                return view("vista/error-enlace");
            }
        
            if ($idSesion != $idUrl) {
                return view("vista/error-enlace");
            }
        
            $UsuarioModel = new UsuarioModel() -> find($idSesion);
        return view("vista/editar-usuario", ["usuario" => $UsuarioModel]);
        }

        public function actualizar_usuario($id){
            if (session("id") != 1){
                new UsuarioModel() -> update($id, $this -> request -> getPost());
                session()          -> destroy();
            return view("/vista/usuario-update");
            }
            return view("/vista/error-vistas");
        }
    }
?>