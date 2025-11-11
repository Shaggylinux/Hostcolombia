<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Login extends BaseController {

    public function index() {
        return view('login/login');
    }

    public function usuariovista(){
        if (!session() -> has("usuarios")){
            return view('/login/login');
        }
        return view('/vista/usuario');
    }

public function verificar() {

    // MODIFICAR!!!!!
    $usuario  = $this->request->getPost('nombreusuario');
    $password = $this->request->getPost('clave');

    $model = new UsuarioModel();
    $datosUsuario = $model -> where('nombreusuario', $usuario)->first();

    if ($datosUsuario && password_verify($password, $datosUsuario['clave'])) {
        session()->set('usuarios', $datosUsuario['nombreusuario']);
        session()->set('perfil', $datosUsuario['id']);

        if ($datosUsuario['id'] == 1) {
            return redirect()->to('/general/precios');
        } else {
            return redirect()->to('/vista/usuario');
        }
    } else {
        return redirect()->back()->with('mensaje', 'Usuario o contraseña incorrectos');
    }
}

    public function logout(){
        session() -> destroy();
        return redirect() -> to("/");
    }
}
