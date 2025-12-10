<?php
    namespace App\Models;
    use CodeIgniter\Model;
    
    class TarjetaModel extends Model{
        protected $table         = "tarjeta";
        protected $primaryKey    = "id";
        protected $allowedFields = [
                                    "numero",
                                    "codigo",
                                    "NombreCompleto",
                                    "mes",
                                    "ano",
                                    "tipo_tarjeta",
                                    "id_usuario"];
        
        public $timestamps = false;
    }
?>