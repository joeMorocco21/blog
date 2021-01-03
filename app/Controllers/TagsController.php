<?php
namespace App\Controllers;
use App\Models\Tag;
use App\Models\Post;
use Database\DBConnection;

class TagsController extends Controller
{
    public function tag(int $id)
    {
        $tag = (new Tag($this->getDB()))->findById($id);
        return $this->view('blog.tag', compact('tag'));
    }
}