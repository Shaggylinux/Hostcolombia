<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class RolModel extends Model{
        protected $table         = "perfil";
        protected $primaryKey    = "id";
        protected $allowedFields = ["id"];
        public    $timestamps    = false;
    }
?>