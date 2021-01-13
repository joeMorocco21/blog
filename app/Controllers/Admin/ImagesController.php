<?php
namespace App\Controllers\Admin;

use App\Models\Image;
use App\Controllers\Controller;

class ImagesController extends Controller
{
    public function index()
    {
    $this->isAdmin();
    $images = (new Image($this->getDB()))->all();
    return $this->view('admin.post.image', compact('images'));
    }
    public function edit(int $id)
    {
    $this->isAdmin();
    $image = (new Image($this->getDB()))->findById($id);
    return $this->view('admin.post.editImage', compact('image'));
    }
    public function update(int $id)
    {
    $this->isAdmin();
    $img = new Image($this->getDB());
    $image = $_FILES;
    $result = $img->update($id, $image);
    if($result)
    {
        return header('location: /mvc/admin/images');
    }
    }
}