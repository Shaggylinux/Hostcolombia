<?php
    namespace App\Controllers;

    class Precios extends BaseController{
        public function index(){
            return view("/general/precios");
        }
    }
?>