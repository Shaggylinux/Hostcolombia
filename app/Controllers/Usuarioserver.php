<?php
    namespace App\Controllers;
    use App\Models\UsuarioServerModel;
    use App\Models\TokenModel;
    use App\Models\FechaCreacion;

    class Usuarioserver extends BaseController{

        public function fecha_creacion($idServidor) {
            $fecha = new FechaCreacion();

            $fecha->insert([
                "id_servidor" => $idServidor
            ]);
        }
        
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
        
            $user = session()->get("usuarios");
            $id   = $user["id"];
        
            $model->insert([
                "nombre"      => $this -> request -> getPost("nombreserver"),
                "descripcion" => $this -> request -> getPost("descripcionserver"),
                "dominio"     => $this -> request -> getPost("dominioserver"),
                "id_usuario"  => $id
            ]);
        
            $idServidor = $model -> getInsertID();
        
            $this -> fecha_creacion($idServidor);
        
            return redirect()->to("/vista/usuario");
        }

        public function panelcontrol($idUrl){
            $idSesion = session("id");
        
            if (!$idSesion) {
                return view("/vista/error-vistas");
            }
        
            $ServerModel = new UsuarioServerModel();
            $TokenModel  = new TokenModel();
            $FechaModel  = new FechaCreacion();
        
            $servidor = $ServerModel
                -> where("id", $idUrl)
                -> where("id_usuario", $idSesion)
                -> first();
        
            if (!$servidor) {
                return view("/vista/error-enlace");
            }
        
            $token = $TokenModel
                -> where("id_servidor", $idUrl)
                -> first();
        
            $fecha = $FechaModel
                -> where("id_servidor", $idUrl)
                -> first();
        
            $online = $this -> checkServerStatus($servidor["dominio"]);
        
            $data = [
                "servidor" => $servidor,
                "online"   => $online,
                "token"    => $token["token"] ?? null,
                "fecha_creacion" => $fecha["fecha"] ?? null
            ];
        
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

            return view("/vista/editar-server", ["server" => $server]);
        }

        public function general_token($idUrl){
                $idSesion = session("id");
        
                if (!$idSesion) {
                    return view("vista/error-vistas");
                }
            
                $ServerModel = new UsuarioServerModel();
                $servidor = $ServerModel
                    -> where("id", $idUrl)
                    -> where("id_usuario", $idSesion)
                    -> first();
            
                if (!$servidor) {
                    return view("vista/error-enlace");
                }
            
                $tokenRandom = bin2hex(random_bytes(16));
            
                $TokenModel = new TokenModel();
            
                $TokenModel -> where("id_servidor", $idUrl) -> delete();
            
                $TokenModel -> insert([
                    "token"       => $tokenRandom,
                    "id_servidor" => $idUrl
                ]);
            
                return redirect() -> to("/usuario/panelcontrol/$idUrl");
            }
    }
?>