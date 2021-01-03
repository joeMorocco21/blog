<?php
namespace App\Controllers;

use App\Models\Comment;

class CommentController extends Controller
{
    public function comment()
    {
        $comment = new Comment($this->getDB());
        $result = $comment->create($_POST);
        if($result)
        {
            return header('location: /mvc/admin/posts');
        }
    }
}