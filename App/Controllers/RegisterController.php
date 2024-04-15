<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use App\Models\User;

class RegisterController
{
    public function show()
    {
        View::render('register');
    }

    public function create()
    {
        if((new User)->create($_POST)){
            $user_id = (new User)->findByEmail($_POST['email'])['id'];
            Auth::login($user_id);
            header('location: /Project/maps');
        }else{
            header('location: /Project/register?error=email_taken');
        }
    }
}