<?php
namespace App\Models;

//reccuperer les param du class model
class Cat extends Model
{   //protect our tables
    protected $table = 'Categories';
    public function getPosts()
    {
        return $this->query("
        SELECT * FROM posts p INNER JOIN cat_post pc ON pc.post_id = p.id INNER JOIN images i
        ON pc.post_id = i.post_id  WHERE  pc.id_cat = ? ORDER BY p.id DESC" , [$this->id]);
    }
    public function getExcerpt(): string
    {
        return substr($this->content, 0, 250).'...';
    }

    public function categories()
    {
        $cats = $this->query("SELECT nom_de-cat FROM Categories");
        return $cat = $cats->execute();
    }
}