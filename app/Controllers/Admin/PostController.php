<?php
namespace App\Controllers\Admin;

use App\Models\Cat;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Image;
use App\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $this->isAdmin();
        $posts = (new Post($this->getDB()))->all();
        return $this->view('admin.post.index', compact('posts'));

    }
    public function create()
    {
        $tags = (new Tag($this->getDB()))->all();
        $cats = (new Cat($this->getDB()))->all();
        return $this->view('admin.post.edit', compact('tags', 'cats'));
    }
    public function createPost()
    {
        $post = new Post($this->getDB()); 
        var_dump($img = $_FILES);
        var_dump($cats = array_pop($_POST));
        var_dump($tags = array_pop($_POST));
        $result = $post->create($_POST, $tags);
        $result1 = $post->createC($cats);
        $result2 = $post->createImage($img);
        if($result)
        {
            return header('location: /mvc/admin/posts');
        }
    }
    public function edit(int $id)
    {
        $post = (new Post($this->getDB()))->findById($id);
        $tags = (new Tag($this->getDB()))->all();
        $cats = (new Cat($this->getDB()))->all();
        return $this->view('admin.post.edit', compact('post', 'tags', 'cats'));
    }
    public function update(int $id)
    {
        $post = new Post($this->getDB());
        $cats = array_pop($_POST);
        $tags = array_pop($_POST);
        $result = $post->update($id, $_POST, $tags);
        $result1 = $post->updateC($id, $_POST, $cats);
        if($result)
        {
            return header('Location: /mvc/admin/posts');
        }
    }
    public function delete(int $id)
    {
        $post = (new Post($this->getDB()));
        $result = $post->delete($id);
        if($result)
        {
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

}
