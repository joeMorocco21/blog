<?php
namespace App\Controllers;
use App\Models\Cat;
use App\Models\Post;
use Database\DBConnection;
class CategoriesController  extends Controller
{
    public function cat(string $nom_de_cat)
    {
         $cat = (new Cat($this->getDB()))->findByCat($nom_de_cat);
         return $this->view('blog.categories', compact('cat'));
    }
    public function menu()
    {
        //$cat = new Cat($this->getDB());
        //return $cats= $cat->all();
    }
}