<?php

namespace App\Models;

use App\Models\BaseModel;

class User extends BaseModel
{
    protected $data = [];

    public function create($data)
    {
        $data['password'] =  password_hash($data['password'], PASSWORD_DEFAULT);
 
        if($this->exists($data['email']))
        {
            return false;
            die();
        }    

        $sql = "INSERT INTO users (email, password) VALUES 
        (" . "'" . $data['email'] . "'" . ", " . "'" . $data['password'] . "'" . ")";

        $this->database->sql($sql);

        return true;
    }

    public function findByEmail($email)
    {
        $sql ="SELECT * from users WHERE email = '$email'";
        return $this->database->sql($sql)[0];
    }


    public function exists(string $email)
    {
        $sql ="SELECT email from users WHERE email = '$email'";    

        if (count($this->database->sql($sql)) > 0 )
        {
            return true;
        }else{
            return false;
        }
    }
}