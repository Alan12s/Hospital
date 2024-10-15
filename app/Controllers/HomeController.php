<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function index()
    {
        echo view('index'); // Cambia 'welcome_message' por la vista que quieras cargar
    }
}
