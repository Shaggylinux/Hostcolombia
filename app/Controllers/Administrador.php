<?php 
    namespace App\Controllers;
    use App\Models\UsuarioModel;
    use App\Models\UsuarioServerModel;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    class Administrador extends BaseController{
        public function index(){
            if (session("id") == 1){
                $model = new UsuarioModel() -> findAll();
                $data  = ["usuarios" => $model];
                return view("/vista/administrador-usuarios", $data);
            }
        return view("/vista/error");
        }

        public function eliminar_servidor($id){
            if (session("id") == 1){ 
                new UsuarioServerModel() -> delete($id);
                return redirect() -> to("/vista/administrador");
            }
        return view("/vista/error");
        }

        public function eliminar_usuario($id) {
            if (session("id") == 1){
                new UsuarioServerModel() -> where('id_usuario', $id) -> delete();
                new UsuarioModel()       -> delete($id);
                return redirect()        -> to("/vista/administrador-usuarios");
            }
        return view("/vista/error");
        }

        public function exportar_usuarios(){
            if(session("id") == 1){
                $model   = new UsuarioModel();
                $usuario = $model -> findAll();

                $spreadsheet = new Spreadsheet;
                $sheet       = $spreadsheet -> getActiveSheet();

                $lista = ["ID", "Nombre", "NombreUsuario", "Correo"];
                $columna = "A";
                foreach($lista as $l){
                    $sheet -> setCellValue($columna."1", $l);
                    $columna++;
                }

                $fila = 2;
                foreach($usuario as $u){
                    $sheet -> setCellValue("A".$fila, $u["id"]);
                    $sheet -> setCellValue("B".$fila, $u["nombre"]);
                    $sheet -> setCellValue("C".$fila, $u["nombreusuario"]);
                    $sheet -> setCellValue("D".$fila, $u["correo"]);
                    $fila++;
                }

                $write = new Xlsx($spreadsheet);

                $filename = "Usuarios_".date("Yms_His").".xlsx";

                header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet");
                header("Content-Disposition: attachment;filename=\"$filename\"");
                header("Cache-Control: max-age=0");
                $write -> save("php://output");
                exit;
            }
        return view("/vista/error");
        }

        public function exportar_servidor(){
            if(session("id") == 1){
            $model    = new UsuarioServerModel();
            $servidor = $model -> findAll();

            $spreadsheet = new Spreadsheet;
            $sheet       = $spreadsheet -> getActiveSheet();

            $lista   = ["ID", "Nombre", "Descripcion", "Dominio", "ID USUARIO"];
            $columna = 'A';
            foreach ($lista as $l) {
                $sheet -> setCellValue($columna.'1', $l);
                $columna++;
            }

            $fila = 2;
            foreach($servidor as $s){
                $sheet -> setCellValue("A".$fila, $s["id"]);
                $sheet -> setCellValue("B".$fila, $s["nombre"]);
                $sheet -> setCellValue("C".$fila, $s["descripcion"]);
                $sheet -> setCellValue("D".$fila, $s["dominio"]);
                $sheet -> setCellValue("E".$fila, $s["id_usuario"]);
                $fila++;
            }

            $write    = new Xlsx($spreadsheet);
            $filename = "Servidores_".date("Yms_His").".xlsx";

            header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet");
            header("Content-Disposition: attachment;filename=\"$filename\"");
            header("Cache-Control: max-age=0");
            $write -> save("php://output");
            exit;
            }
        return view("/vista/error");
        }
    }
?>