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
                                    "id_usuario",
                                    "dns1",
                                    "dns2",
                                    "dns3",
                                    "dns4"];
                                    
        public $timestamps = false;
    }
?>