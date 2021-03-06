<?php
namespace App\Models;

class User extends Model
{
    protected $table = 'users';
    public function getByUsername(string $email): User
    {
        return $this->query("SELECT * FROM {$this->table} WHERE email = ?", [$email], true);

        
    }
}