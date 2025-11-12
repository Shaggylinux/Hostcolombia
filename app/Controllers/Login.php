<?php
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\UsuarioModel;

    class Login extends BaseController {

        public function index() {
            return view('login/login');
        }

        public function usuariovista(){
            if (session() -> has("usuarios")){
                return view('/vista/usuario');
            }
            return view("/vista/error");
        }

        public function administradorvista(){
            if (session("perfil") == 1){
                return view('/vista/administrador');
            }
            return view("/vista/error");
        }

        public function verificar() {
            $usuario  = $this->request->getPost('nombreusuario');
            $password = $this->request->getPost('clave');
        
            $model = new UsuarioModel();
            $datosUsuario = $model -> where('nombreusuario', $usuario)->first();
        
            if ($datosUsuario && password_verify($password, $datosUsuario['clave'])) {
                session() -> set('usuarios', $datosUsuario['nombreusuario']);
                session() -> set('perfil', $datosUsuario['id']);

                if ($datosUsuario['id'] == 1) {
                    return redirect() -> to('/vista/administrador');
                } else {
                    return redirect() -> to('/vista/usuario');
                }
            } else {
                return redirect() -> back() -> with('mensaje', 'Usuario o contraseña incorrectos');
            }
        }

        public function logout(){
            session() -> destroy();
            return redirect() -> to("/login/login");
        }
}
