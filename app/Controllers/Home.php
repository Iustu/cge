<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index.php');
    }
    public function teste()
    {
        return view('teste.php');
    }
}
