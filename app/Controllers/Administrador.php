<?php 
    namespace App\Controllers;
    use App\Models\UsuarioModel;
    use App\Models\UsuarioServerModel;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use Config\Database;

    class Administrador extends BaseController{
        public function index(){
            if (session("id") != 1){
                return view("/vista/error-vistas");
            }
        
            $busqueda = $this -> request -> getGet("busqueda");
        
            $db = Database::connect();
            $builder = $db -> table("usuarios");
        
            if (!empty($busqueda)) {
                $builder -> groupStart()
                         -> like("id", $busqueda)
                         -> orLike("nombre", $busqueda)
                         -> orLike("nombreusuario", $busqueda)
                         -> orLike("correo", $busqueda)
                         -> groupEnd();
            }
        
            $builder -> orderBy("id", "asc");
            $resultado = $builder -> get() -> getResultArray();
        
            return view("/vista/administrador-usuarios", [
                "usuarios" => $resultado,
                "busqueda" => $busqueda
            ]);
        }

        public function administradorvista(){
            if (session("id") != 1) {
                return view("/vista/error-vistas");
            }
        
            $busqueda = $this -> request -> getGet("busqueda");
        
            $db      = Database::connect();
            $builder = $db -> table("servidor");
        
            if (!empty($busqueda)) {
                $builder -> groupStart()
                         -> like("id_usuario", $busqueda)
                         -> orLike("nombre", $busqueda)
                         -> orLike("descripcion", $busqueda)
                         -> orLike("dominio", $busqueda)
                         -> groupEnd();
            }
        
            $builder -> orderBy("id_usuario", "asc");
            $resultado = $builder -> get() -> getResult();

            $data = [
                "todo"     => $resultado,
                "busqueda" => $busqueda];
        
            return view("/vista/administrador", $data);
        }

        public function eliminar_servidor($id){
            if (session("id") == 1){ 
                new UsuarioServerModel() -> delete($id);
                return redirect() -> to("/vista/administrador");
            }
        return view("/vista/error-enlace");
        }

        public function eliminar_usuario($id) {
            if (session("id") == 1){
                new UsuarioServerModel() -> where("id_usuario", $id) -> delete();
                new UsuarioModel()       -> delete($id);
                return redirect()        -> to("/vista/administrador-usuarios");
            }
        return view("/vista/error-enlace");
        }

        public function exportar_usuarios(){
            if (session("id") != 1) {
                return view("/vista/error-vistas");
            }
        
            $columnas = $this -> request -> getPost("columnas");
            $busqueda = $this -> request -> getGet("busqueda");
        
            if (!$columnas || count($columnas) == 0) {
                return "<h1>Debes seleccionar al menos una columna</h1>";
            }
        
            $db = Database::connect() -> table("usuarios");
        
            if (!empty($busqueda)) {
                $db -> groupStart()
                         -> like("id", $busqueda)
                         -> orLike("nombre", $busqueda)
                         -> orLike("nombreusuario", $busqueda)
                         -> orLike("correo", $busqueda)
                         -> groupEnd();
            }
        
            $usuarios = $db -> get() -> getResultArray();
        
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet -> getActiveSheet();
        
            $col = "A";
            foreach ($columnas as $campo) {
                $sheet -> setCellValue($col."1", strtoupper($campo));
                $col++;
            }
        
            $fila = 2;
            foreach ($usuarios as $u) {
                $col = "A";
                foreach ($columnas as $campo) {
                    $sheet -> setCellValue($col.$fila, $u[$campo] ?? "");
                    $col++;
                }
                $fila++;
            }
        
            $writer   = new Xlsx($spreadsheet);
            $filename = "Usuarios_".date("Ymd_His").".xlsx";
        
            header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
            header("Content-Disposition: attachment;filename=\"$filename\"");
            header("Cache-Control: max-age=0");
            $writer -> save("php://output");
            exit;
        }

        public function exportar_servidor(){
            if (session("id") != 1) {
                return view("/vista/error-vistas");
            }
        
            $columnas = $this -> request -> getPost("columnas");
            $busqueda = $this -> request -> getGet("busqueda");
        
            if (!$columnas || count($columnas) === 0) {
                return "Error: Debes seleccionar al menos una columna.";
            }
        
            $db = Database::connect() -> table("servidor");
        
            if (!empty($busqueda)) {
                $db -> groupStart()
                         -> like("id_usuario", $busqueda)
                         -> orLike("nombre", $busqueda)
                         -> orLike("descripcion", $busqueda)
                         -> orLike("dominio", $busqueda)
                         -> groupEnd();
            }
        
            $servidor    = $db -> get() -> getResultArray();
            $spreadsheet = new Spreadsheet();
            $sheet       = $spreadsheet -> getActiveSheet();
        
            $col = "A";
            foreach ($columnas as $c) {
                $sheet -> setCellValue($col."1", strtoupper($c));
                $col++;
            }
        
            $fila = 2;
            foreach ($servidor as $s) {
                $col = "A";
                foreach ($columnas as $c) {
                    $sheet -> setCellValue($col.$fila, $s[$c] ?? "");
                    $col++;
                }
                $fila++;
            }
        
            $writer = new Xlsx($spreadsheet);
            $filename = "Servidores_".date("Ymd_His").".xlsx";
        
            header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
            header("Content-Disposition: attachment;filename=\"$filename\"");
            header("Cache-Control: max-age=0");
            $writer -> save("php://output");
            exit;
        }
    }
?>