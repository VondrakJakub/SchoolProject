<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;

class MapsController
{
    public function show()
    {
        if (Auth::user()){

            View::render('maps');

        } else {

            header('location: /Project/login');

        }
    }
}