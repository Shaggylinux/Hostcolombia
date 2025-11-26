<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class UsuarioServerModel extends Model{
        protected $table = "servidor";
        protected $primaryKey = 'id';
        protected $allowedFields = ["id",
                                    "nombre",
                                    "descripcion",
                                    "dominio",
                                    "id_usuario"];
                                    
        public $timestamps = false;
    }
?>