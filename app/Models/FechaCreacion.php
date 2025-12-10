<?php
    namespace App\Models;
    use CodeIgniter\Model;
    
    class FechaCreacion extends Model{
        protected $table = "fecha_creacion";
        protected $primaryKey = 'id';
        protected $allowedFields = [
                                    "fecha",
                                    "id_servidor"];
        
        public $timestamps = false;
    }
?>