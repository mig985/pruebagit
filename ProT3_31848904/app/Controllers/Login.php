<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Login extends Controller
{
    public function index()
    {
        // Muestra la vista del formulario de login
        return view('login');
    }

    public function autenticar()
    {
        $session = session();
        $usuarioModel = new UsuarioModel();

        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        // Buscar usuario en la base de datos
        $user = $usuarioModel->where('usuario', $usuario)->first();

        if ($user) {
            // Verificar contraseña (asumiendo que está hasheada)
            if (password_verify($password, $user['pass'])) {
                // Guardar datos en sesión
                $session->set([
                    'id_usuario' => $user['id_usuario'],
                    'usuario' => $user['usuario'],
                    'logueado' => true,
                ]);
                // Redirigir a una página segura (ejemplo dashboard)
                return redirect()->to('dashboard');
            } else {
                // Contraseña incorrecta
                $session->setFlashdata('error', 'Contraseña incorrecta');
                return redirect()->to('login');
            }
        } else {
            // Usuario no encontrado
            $session->setFlashdata('error', 'Usuario no existe');
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
