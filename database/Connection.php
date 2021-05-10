<?php

class Connection 
{
    public static function make() 
    {
        try {
            return new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'Password1?');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
};