<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    public function create()
    {
        $data['titulo'] = 'Registro';
        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer');
    }

    public function guardar()
    {
        $validation = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario'  => 'required|min_length[3]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'password' => 'required|min_length[3]|max_length[10]'
        ]);

        if (!$validation) {
            $data['titulo'] = 'Registro';
            echo view('front/header', $data);
            echo view('back/usuario/registro', ['validacion' => $this->validator]);
            echo view('front/footer');
        } else {
            $usuarioModel = new UsuarioModel();

            $usuarioModel->save([
                'nombre'    => $this->request->getVar('nombre'),
                'apellido'  => $this->request->getVar('apellido'),
                'usuario'   => $this->request->getVar('usuario'),
                'email'     => $this->request->getVar('email'),
                'pass'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'perfil_id' => 2,
                'baja'      => 'NO'
            ]);

            session()->setFlashdata('success', 'Usuario registrado con éxito');
            return redirect()->to('/login');
        }
    }

    public function ingresar()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $db = \Config\Database::connect();
        $builder = $db->table('usuarios');
        $builder->where('baja', 'NO');
        $builder->groupStart()
            ->where('usuario', $usuario)
            ->orWhere('email', $usuario)
            ->groupEnd();
        $query = $builder->get();
        $user = $query->getRow();

        if ($user && password_verify($password, $user->pass)) {
            session()->set([
                'id_usuario' => $user->id_usuario,
                'nombre'     => $user->nombre,
                'apellido'   => $user->apellido,
                'perfil_id'  => $user->perfil_id,
                'logueado'   => true
            ]);
            return redirect()->to('/');
        } else {
            return redirect()->back()->with('error', 'Usuario o contraseña inválidos');
        }
    }

    public function pruebaSesion()
    {
        $session = session();
        $session->set('nombre', 'Miguel');
        echo 'Hola, ' . $session->get('nombre');
    }

    public function cerrar_sesion()
{
    session()->destroy(); // Elimina toda la sesión
    return redirect()->to('/'); // Vuelve al inicio
}

}
