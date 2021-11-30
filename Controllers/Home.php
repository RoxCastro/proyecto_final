<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       /* return view('libros/listar');*/
       echo view ('template/cabecera');
       echo view ('home');
       echo view ('template/piepagina');
    }
}
