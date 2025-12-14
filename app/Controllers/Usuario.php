<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\UsuarioServerModel;
use Config\Database;

class Usuario extends BaseController
{
    private function checkServerStatus($url, $port = 443, $timeout = 2)
    {
        $fp = @fsockopen($url, $port, $errno, $errstr, $timeout);
        if ($fp) {
            fclose($fp);
            return true;
        } else
            return false;
    }

    public function usuariovista()
    {
        // 1️⃣ SI NO HAY SESIÓN → LOGIN
        if (!session()->has("id")) {
            return view("/vista/error-vistas");
        }

        // 2️⃣ SI ES ADMIN → ERROR
        if (session("id") == 1) {
            return view("/vista/error-vistas");
        }

        // 3️⃣ USUARIO NORMAL (YA ES SEGURO)
        $usuarioSesion = session()->get("usuarios");
        $idusuario     = $usuarioSesion["id"];

        $UsuarioServer = new UsuarioServerModel();

        $servidores = $UsuarioServer
            ->where("id_usuario", $idusuario)
            ->findAll();

        foreach ($servidores as &$s) {
            $s["online"] = $this->checkServerStatus($s["dominio"]);
        }

        $db    = Database::connect();
        $query = $db->query("SELECT nombre, dominio FROM servidor")->getResult();

        $data = [
            "nombreserver" => $query,
            "Userid"       => $idusuario,
            "servidores"   => $servidores,
            "usuario"      => new UsuarioModel()->find(session("id"))
        ];

        return view("/vista/usuario", $data);
    }


    public function editar_usuario($idUrl)
    {
        $idSesion = session()->get("id");

        if (!$idSesion) {
            return view("vista/error-enlace");
        }

        if ($idSesion != $idUrl) {
            return view("vista/error-enlace");
        }

        $UsuarioModel = new UsuarioModel()->find($idSesion);
        return view("vista/editar-usuario", ["usuario" => $UsuarioModel]);
    }

    public function actualizar_usuario($id)
    {
        if (session("id") != 1) {
            new UsuarioModel()->update($id, $this->request->getPost());
            session()->destroy();
            return view("/vista/usuario-update");
        }
        return view("/vista/error-vistas");
    }
}
