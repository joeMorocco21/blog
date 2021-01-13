<?php
namespace App\Models;

use DateTime;
//reccuperer les param du class model
class Post extends Model
{   //protect our tables
    protected $table = 'posts';
    //formater la date du post
    public function getCreateAt(): string
    {
        $date = new DateTime($this->create_at);
        return $date->format('d/m/y à H:m');
    }
    //formater le contenue du post
    public function getExcerpt(): string
    {
        return substr($this->content, 0, 250).'...';
    }
    //bouton lire la suite
    public function getButton(): string
    {
        return <<<HTML
        <a href="./posts/$this->id " class="btn btn-primary">Lire la suite...</a>
HTML;
    }
    //requperer les tags de chaque posts
    public function getTags()
    {
        return $this->query(" SELECT t.* FROM tags t INNER JOIN post_tag pt ON pt.tag_id = t.id 
        WHERE pt.post_id = ?", [$this->id]);
    }
    //recuperer la categorie de chaque post
    public function getCat()
    {
        return $this->query(" SELECT c.* FROM Categories c INNER JOIN cat_post cp ON cp.id_cat = c.id
        WHERE cp.post_id = ?", [$this->id]);
    }
    //recuperer l'image d'un post
    public function getImage()
    {
        return $this->query(" SELECT img_url FROM images i INNER JOIN posts p ON p.id = i.post_id
        WHERE i.post_id = ?", [$this->id]);
    }
    //carousel dernieres image max 6
    public function getImageCarousel()
    {
        return $this->query(" SELECT * FROM (SELECT * FROM images ORDER BY post_id DESC LIMIT 6) i INNER JOIN posts p ON i.post_id = p.id
        WHERE i.post_id  = ?", [$this->id]);
    }
    public function getImageSecur()
    {
        return $this->query(" SELECT * FROM  posts p INNER JOIN cat_post pc ON pc.post_id = p.id INNER JOIN images i
        ON pc.post_id = i.post_id  WHERE  pc.id_cat = 2 ORDER BY p.id DESC LIMIT 3 ");
    }
    public function getImagehard()
    {
        return $this->query(" SELECT * FROM posts p INNER JOIN cat_post pc ON pc.post_id = p.id INNER JOIN images i ON pc.post_id = i.post_id WHERE pc.id_cat = 5 ORDER BY p.id DESC LIMIT 2 ");
    }
    public function getImageSoft()
    {
        return $this->query(" SELECT * FROM posts p INNER JOIN cat_post pc ON pc.post_id = p.id INNER JOIN images i ON pc.post_id = i.post_id WHERE pc.id_cat = 6 ORDER BY p.id DESC LIMIT 2 ");
    }
    public function getImageProgramation()
    {
        return $this->query(" SELECT * FROM posts p INNER JOIN cat_post pc ON pc.post_id = p.id INNER JOIN images i ON pc.post_id = i.post_id WHERE pc.id_cat = 1 ORDER BY p.id DESC LIMIT 3 ");
    }
    public function getMarquee()
    {
        return $this->query(" SELECT * FROM posts ORDER BY id DESC LIMIT 10 ");
    }
    //recuperer les commentaires d'un post
    public function getAuteur()
    {
        return $this->query(" SELECT nom, prenom FROM users u INNER JOIN posts p ON p.auteur = u.id
        WHERE p.id = ?", [$this->id]);
    }
    public function getComment()
    {
        return $this->query(" SELECT nom, comment, created_at FROM commentaire c INNER JOIN posts p ON p.id = c.post_id
        WHERE c.post_id = ?", [$this->id]);
    }
    // varible $idlast permet de recuperer l'id du dernier post enregistrer
    protected $idlast;
    //creation des tags du post
    public function create(array $data, ?array $relation = null)
    {
        parent::create($data);
         $this->idlast = $this->db->getPDO()->lastInsertId();
        foreach($relation as $tagId)
        {
            $stmt = $this->db->getPDO()->prepare("INSERT INTO post_tag (post_id, tag_id) VALUES(?, ?)");
            $stmt->execute([$this->idlast, $tagId]);
        }
    }
    //creation la categorie du post
    public function createC(array $data, ?array $relation = null)
    {
        echo $this->idlast;
        foreach($data as $catId)
        {
        $stmt2 = $this->db->getPDO()->prepare("INSERT INTO cat_post (post_id, id_cat) VALUES(?, ?)");
        $stmt2->execute([$this->idlast, $catId]);
        }
    }
    //Ajouter l'image du post
    public function createImage(array $data, ?array $relation = null)
    {

        $filetmp = implode($data['img']['tmp_name']);
        echo $target_dir = "../ressources/file/". implode($data['img']['name']);
        //move image to path
        move_uploaded_file($filetmp, $target_dir);
        //le path enregistrer sur la bdd
        $path = "http://localhost/mvc/ressources/file/". implode($data['img']['name']);
        $stmt3 = $this->db->getPDO()->prepare("INSERT INTO images (post_id, img_url) VALUES(?, ?)");
        $stmt3->execute([$this->idlast, $path]);

    }
    //mettre à jour les tags d'un post =>supprimer=>inserer :)
    public function update(int $id, array $data, ?array $relation = null)
    {
        parent::update($id, $data);
        $stmt = $this->db->getPDO()->prepare("DELETE FROM post_tag WHERE post_id = ?");
        $result = $stmt->execute([$id]);
        foreach($relation as $tagId)
        {
            $stmt = $this->db->getPDO()->prepare("INSERT INTO post_tag (post_id, tag_id) VALUES(?, ?)");
            $stmt->execute([$id, $tagId]);
        }
        if($result)
        {
            return true;
        }
    }
        //mettre à jour la categorie d'un post =>supprimer=>inserer :)
        public function updateC(int $id, array $data, ?array $relation = null)
        {
        parent::update($id, $data);
        $stmt = $this->db->getPDO()->prepare("DELETE FROM cat_post WHERE post_id = ?");
        $result = $stmt->execute([$id]);
        foreach($relation as $catId)
        {
            $stmt1 = $this->db->getPDO()->prepare("INSERT INTO cat_post (post_id, id_cat) VALUES(?, ?)");
            $stmt1->execute([$id, $catId]);
        }
        if($result)
        {
            return true;
        }

   }
   public function pagination()
   {
       return $this->query("SELECT COUNT(1) AS nbr FROM posts");

   }
}

