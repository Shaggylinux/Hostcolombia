<?php
    namespace App\Controllers;

    class CrearCuenta extends BaseController{
        public function index(){
            $data = ["error" => "Error grave"];
            return view("/login/crearcuenta", $data);
        }
    }
?>