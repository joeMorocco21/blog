<?php
namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
        return $this->view('auth.login');
    }
    public function loginPost()
    {
        $user = (new User($this->getDB()))->getByUsername($_POST['email']);
        if(password_verify($_POST['password'], $user->password))
        {
        $_SESSION['auth'] = (int) $user->admin;
        $_SESSION['name'] = (string) $user->nom;
        $_SESSION['id'] = (int) $user->id;
        return header('Location: ./admin/posts?success=true');
        } else 
        {
            return header('location: /mvc/login');
        }
    }
    public function logOut()
    {
        session_destroy();
        return header('location: /mvc');
    }
}