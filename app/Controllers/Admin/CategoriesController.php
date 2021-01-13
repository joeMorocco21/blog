<?php
namespace App\Controllers\Admin;

use App\Models\Cat;
use App\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $this->isAdmin();
        $cats = (new Cat($this->getDB()))->all();
        return $this->view('admin.post.cat', compact('cats'));
    }
    public function create()
    {
        return $this->view('admin.post.editCat');
    }
    public function createCat()
    {
        $cat = new Cat($this->getDB()); 
        $cats = $_POST;
        var_dump($cats);
        $result = $cat->create($cats);
    }
    public function edit(int $id)
    {
        $this->isAdmin();
        $cat = (new Cat($this->getDB()))->findById($id);
        return $this->view('admin.post.editCat', compact('cat'));
    }
    public function update(int $id)
    {
        $this->isAdmin();
        $cats = new Cat($this->getDB());
        $cat = $_POST;
        $result = $cats->update($id, $cat);
        if($result)
        {
            return header('location: /mvc/admin/posts');
        }
    }
    public function delete(int $id)
    {
        $this->isAdmin();
        $cat = (new Cat($this->getDB()));
        $result = $cat->delete($id);
        if($result)
        {
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}