<?php
namespace App\Controllers;

use App\Models\Register;
use App\Controllers\Controller;

class RegisterController extends Controller
{
    public function register()
    {
        return $this->view('auth.register');
    }
    public function RegisterUser()
    {
        $data = (array) ["nom"=>$_POST['nom'],"prenom"=>$_POST['prenom'],"email"=>$_POST['email'],"password"=>password_hash ($_POST['password'], PASSWORD_DEFAULT)];
        $register = new Register($this->getDB());
        $result = $register->create($data);
        if($result)
        {
            return header('location: /mvc/admin/posts');
        }
    }
}