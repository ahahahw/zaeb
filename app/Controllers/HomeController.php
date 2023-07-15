<?php

declare(strict_types = 1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index(): View
    {   
        $db = new pdo('mysql:host=localhost;dbname=my_db', 'root', 'creatine');
        var_dump($db)
        exit;
        return View::make('index');
    }
}
