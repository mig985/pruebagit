<?php

namespace App\Controllers;

class Paginas extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Inicio';
        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('front/home');
        echo view('front/footer');
    }

    public function nosotros()
    {
        $data['titulo'] = 'Nosotros';
        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('front/nosotros');
        echo view('front/footer');
    }

    public function login()
    {
        $data['titulo'] = 'Iniciar Sesión';
        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('front/login');
        echo view('front/footer');
    }

    public function registro()
    {
        $data['titulo'] = 'Registro';
        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('front/registro');
        echo view('front/footer');
    }
}
