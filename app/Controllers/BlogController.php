<?php
namespace App\Controllers;
use App\Models\Cat;
use App\Models\Tag;
use App\Models\Post;
use Database\DBConnection;

class BlogController extends Controller
{
    public function welcome()
    {
        $post = new Post($this->getDB());
        $post = $post->all();
        return $this->view ('blog.welcome' , compact('post'));
    
    }
    public function index()
    {
        $post = new Post($this->getDB());
        $limit="LIMIT 6";
        $posts = $post->all($limit);
        return $this->view('blog.index', compact('posts'));
    }
    public function show(int $id)
    {
        //blog/show/array([id]=>value)
        $post = new Post($this->getDB());
        $post = $post->findById($id);
        return $this->view('blog.show', compact('post'));
    }

}
