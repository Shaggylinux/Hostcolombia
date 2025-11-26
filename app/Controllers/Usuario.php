<?php
    namespace App\Controllers;
    use Config\Database;
    use App\Models\UsuarioServerModel;

    class Usuario extends BaseController{
        public function usuariovista(){
            if (session() -> has("usuarios")) {

                $usuario = session() -> get("usuarios");
                $idusuario = $usuario["id"];

                $UsuarioServer = new UsuarioServerModel();

                $servidores = $UsuarioServer
                    -> where("id_usuario", $idusuario)
                    -> findAll();

                $db = Database::connect();
                $query = $db->query("SELECT nombre FROM servidor");
                $resultado = $query->getResult();

                $data = [
                    "nombreserver" => $resultado,
                    "Userid"       => $idusuario,
                    "servidores"   => $servidores
                ];

                return view('/vista/usuario', $data);
            }
            return view("/vista/error");
        }

        public function administradorvista() {
            if (session("perfil") == 1) {
                $db        = Database::connect();
                $query     = $db    -> query("SELECT * FROM servidor order by id_usuario asc");
                $resultado = $query -> getResult();
                $data      = ["todo" => $resultado];
                return view('/vista/administrador', $data);
            }
            return view("/vista/error");
        }

        public function eliminar($id) {
            $model = new UsuarioServerModel();
            $model -> delete($id);
            return redirect()->to("/vista/administrador");
        }

        public function editar($id) {
            $model = new UsuarioServerModel() -> find($id);
            $data  = ["server" => $model];
            return view("/vista/editar-server", $data);
        }

        public function actualizar($id) {
            $model = new UsuarioServerModel();
            $model -> update($id, $this -> request -> getPost());
            return redirect() -> to("/vista/usuario");
        }

        private function checkServerStatus($url, $port = 443, $timeout = 5) {
            $fp = @fsockopen($url, $port, $errno, $errstr, $timeout);
            if ($fp) {
                fclose($fp);
                return true;
            } else
                return false;
        }

        public function panelcontrol($id) {
            $db       = Database::connect();
            $query    = $db    -> query("SELECT * FROM servidor WHERE id = ?", [$id]);
            $servidor = $query -> getRow();
            $online   = $this  -> checkServerStatus($servidor -> dominio);

            return view("vista/panel-control", [
                "servidor" => $servidor,
                "online"   => $online
            ]);
        }
}
