<?php
namespace App\Models;

use PDO;
use Database\DBConnection;

abstract class Model
{
    //protect our connection
    protected $db;
    protected $table;
    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }
    public function all(): array
    {
        return $this->query("SELECT * FROM {$this->table} ORDER BY create_at DESC");
    }


    //recuperer les posts avec leurs id
    public function findById(int $id): Model
    {
        //variable single= true=>requete preparer 
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }
    public function findByCat(string $nom_de_cat): Model
    {
        //variable single= true=>requete preparer 
        return $this->query("SELECT * FROM {$this->table} WHERE nom_de_cat = ?", [$nom_de_cat], true);
    }
    
    //requete insert dynamique
    public function create(array $data, ?array $relation = null)
    {
        $firstParenthese = "";
        $secondParenthese = "";
        $i = 1;
        foreach($data as $key => $value)
        {
            $comma = $i === count($data) ? "" : ", ";
          var_dump($firstParenthese .= "{$key}{$comma}");
            var_dump($secondParenthese .= ":{$key}{$comma}");
            $i++;
        }
         return $this->query("INSERT INTO {$this->table}($firstParenthese) 
        VALUES ($secondParenthese)", $data);

    }
    //requete update dynamique
    public function update(int $id, array $data, ?array $relation = null)
    {
        //boucler les enregistrement de façon dynamique
        $sqlRequestPart = "";
        $i = 1;
        foreach($data as $key =>$value)
        {
        //ajouter rien a la derniere enregistrement si non ajouter une virgule espace
        $comma = $i === count($data) ? " " : ', ';
        //$key = le nom de colonne :$key le contenu de l'input 
        $sqlRequestPart .= "{$key}= :{$key}{$comma}";
        $i++;
        }
        $data['id'] = $id;
        return $this->query("UPDATE {$this->table} SET {$sqlRequestPart} WHERE id = :id", $data);
    }

    public function delete(int $id):bool
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }

    //parametres des requetes
    //variable single null/false par default
    public function query(string $sql, array $param = null, bool $single = null)
    {
        //si le param est null on aura une requete query else une requete preparer
        $method = is_null($param) ? 'query' : 'prepare';
        if(
            strpos($sql, 'DELETE')=== 0
            ||
            strpos($sql, 'UPDATE')=== 0
            ||
            strpos($sql, 'INSERT')=== 0)
            {
                var_dump($stmt = $this->db->getPDO()->$method($sql));
              var_dump($stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]));
                 return var_dump($stmt->execute($param));die();
            }
        
        //si le single est null on aura une Select->fetchAll() else une Select->fetch()
        $fetch = is_null($single) ? 'fetchAll' : 'fetch';
        $stmt = $this->db->getPDO()->$method($sql);
        //setfetchmod permet de recuperer des class
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
        //var single= false=>query=>fetchAll()
        if($method === 'query')
        {
            return $stmt->$fetch();
        }else
        {
            $stmt->execute($param);
            return $stmt->$fetch();
        }
    }
}
