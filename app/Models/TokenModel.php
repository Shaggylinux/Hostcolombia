<?php
    namespace App\Models;
    use CodeIgniter\Model;
    
    class TokenModel extends Model{
        protected $table = "token";
        protected $primaryKey = 'id';
        protected $allowedFields = ["token"];
        
        public $timestamps = false;
    }
?>