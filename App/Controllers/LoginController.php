<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use App\Models\User;

class LoginController
{
    public function show()
    {
        View::render('login');
    }

    public function create()
    { 
        if ((new User)->exists($_POST['email'])) {
 
            $user = (new User)->findByEmail($_POST['email']);
            $password_hash = $user['password'];
            $password = $_POST['password'];

            if (password_verify($password, $password_hash)) {

                Auth::login($user['id']);

                return header('location: /Project/maps');
            } else {
                return header('location: /Project/login?error=wrong_credentials');
            }
        } else {
            return header('location: /Project/login?error=wrong_credentials');
        }

    }

    public function logout()
    {
        Auth::logout();
        return header('location: /Project/login');
    }

}