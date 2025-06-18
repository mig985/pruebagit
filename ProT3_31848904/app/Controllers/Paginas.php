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
    $data['equipo'] = [
    [
        'nombre' => 'Laura',
        'foto' => 'laura.jpg',
        'descripcion' => 'Diseñadora amante del mate y los gatos.',
        'genero' => 'femenino'
    ],
    [
        'nombre' => 'Pedro',
        'foto' => 'pedro.jpg',
        'descripcion' => 'Programador que vive a café y líneas de código.',
        'genero' => 'masculino'
    ],
    [
        'nombre' => 'Sofía',
        'foto' => 'sofia.jpg',
        'descripcion' => 'Gestora de proyectos con corazón y método.',
        'genero' => 'femenino'
    ]
];


    echo view('front/header', $data);
    echo view('front/navbar');
    echo view('front/nosotros', $data);
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
