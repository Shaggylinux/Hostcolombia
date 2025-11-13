<?php
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\RolModel;

    class Rol extends BaseController{
        public function index(){
            if(!session() -> has("usuarios")){
                return redirect() -> to("/login/login");
            }
            if(session("perfil")  != 1){
                return redirect() -> to("/login/login");
            }
            $model = new RolModel();
            $data["usuarios"] = $model -> findAll();
            return view("/vista/usuario");
        }
    }
?>