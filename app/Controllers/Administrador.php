<?php 
    namespace App\Controllers;
    use App\Models\UsuarioModel;
    use App\Models\UsuarioServerModel;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use Config\Database;

    class Administrador extends BaseController{
        public function index(){
            if (session("id") == 1){
                $model = new UsuarioModel() -> findAll();
                $data  = ["usuarios" => $model];
                return view("/vista/administrador-usuarios", $data);
            }
        return view("/vista/error-vistas");
        }

        public function administradorvista(){
            if (session("id") == 1) {
                $db        = Database::connect();
                $query     = $db     -> query("SELECT * FROM servidor order by id_usuario asc");
                $resultado = $query  -> getResult();
                $data      = ["todo" => $resultado];
                return view("/vista/administrador", $data);
            }
            return view("/vista/error-vistas");
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

            if (!$columnas || count($columnas) == 0) {
                return "<h1>Debes seleccionar almenos una casilla</h1>";
            }

            $model   = new UsuarioModel();
            $usuarios = $model -> select($columnas) -> findAll();

            $spreadsheet = new Spreadsheet();
            $sheet       = $spreadsheet->getActiveSheet();

            $col = "A";
            foreach ($columnas as $campo) {
                $sheet -> setCellValue($col."1", ucfirst($campo));
                $col++;
            }

            $fila = 2;
            foreach ($usuarios as $u) {
                $col = "A";
                foreach ($columnas as $campo) {
                    $sheet -> setCellValue($col.$fila, $u[$campo]);
                    $col++;
                }
                $fila++;
            }

            $writer   = new Xlsx($spreadsheet);
            $filename = "Usuarios_".date("Yms_His").".xlsx";

            header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet");
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
        
            if (!$columnas || count($columnas) === 0) {
                return "Error: Debes seleccionar al menos una columna.";
            }
        
            $model = new UsuarioServerModel();
            $servidor = $model -> findAll();
        
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet -> getActiveSheet();
        
            $col = "A";
            foreach ($columnas as $c) {
                $sheet->setCellValue($col."1", strtoupper($c));
                $col++;
            }
        
            $fila = 2;
            foreach ($servidor as $s) {
                $col = "A";
                foreach ($columnas as $c) {
                    $sheet->setCellValue($col.$fila, $s[$c]);
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