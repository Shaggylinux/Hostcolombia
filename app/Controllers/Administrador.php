<?php 
    namespace App\Controllers;
    use App\Models\UsuarioModel;
    use Config\Database;
    use App\Models\UsuarioServerModel;
use PhpParser\Node\Expr\FuncCall;

    class Administrador extends BaseController{
        public function index(){
            $model = new UsuarioModel();
            $db = Database::connect();
            $query = $db -> query("SELECT * FROM usuarios");
            $resultado = $query -> getResult();
            $data = ["usuarios" => $resultado];
            return view("/vista/administrador-usuarios", $data);
        }

        public function eliminar($id) {
        
            $servidores = new UsuarioServerModel();
            $servidores->where('id_usuario', $id)->delete();
        
            $usuarios = new UsuarioModel();
            $usuarios->delete($id);
        
            return redirect()->to("/vista/administrador-usuarios");
        }
    }
?>