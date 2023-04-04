<?php

namespace Models;

class Users extends Database {
    public $table = 'users';

    function searchUsers($slapyvardis) {
        $result = self::$db->query("SELECT * FROM $this->table WHERE nick_name = 'slapyvardis'");
        
        return $result;
    }

    function addUser($slapyvardis, $slaptazodis, $email) {
        $result = self::$db->query("INSERT INTO $this->table (nick_name, u_password, email) VALUES ('$slapyvardis', '$slaptazodis', '$email')");
        if($result){
            echo"Record inserted succesfully";
        
        } else{
            echo"Could not insert record: ";
        }
    }

}