<?php
namespace App\Models;

class Image extends Model
{
    protected $table = 'images';
    function update(int $id, array $data, ?array $relation = null)
    {

        $filetmp = implode($data['img']['tmp_name']);
        $target_dir = "../ressources/file/". implode($data['img']['name']);
        //move image to path
        move_uploaded_file($filetmp, $target_dir);
        //le path enregistrer sur la bdd
        $path = "http://localhost/mvc/ressources/file/". implode($data['img']['name']);
        $stmt3 = $this->db->getPDO()->prepare("UPDATE images SET img_url = ? WHERE id = $id");
        $stmt3->execute([$path]);
    }
}