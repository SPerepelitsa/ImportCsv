<?php

namespace application\models;

use application\core\Model;

class User extends Model
{
    private $table = 'users';

    public function getAllUsers()
    {
        $users = $this->db->row("SELECT * FROM $this->table");
        
        return $users;
    }
    
    public function clearUsersTable()
    {
        return $this->db->query("DELETE FROM $this->table");
    }
}