<?php
    namespace App\Controllers;
    use Config\Database;
    use App\Models\UsuarioModel;
    use App\Models\UsuarioServerModel;

    class Usuario extends BaseController{
            public function usuariovista(){
        if (session()->has("usuarios")) {
        
            $usuario = session()->get("usuarios");
            $idusuario = $usuario["id"]; 
        
            $UsuarioServer = new UsuarioServerModel();
            
            $servidores = $UsuarioServer
                            ->where("id_usuario", $idusuario)
                            ->findAll();
            
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


        public function administradorvista(){
            if (session("perfil") == 1){
                $db = Database::connect();
                $query = $db -> query("SELECT * FROM servidor order by id_usuario asc");
                $resultado = $query->getResult();
                $data = ["todo" => $resultado];
                return view('/vista/administrador', $data);
            }
                return view("/vista/error");
            }

    }
?>