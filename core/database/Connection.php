<?php
// connection to databse

class Connection 
{
    public static function make($config) 
    {
        try {
            // return new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'Password1?');

            return new PDO(
                $config['connection'].';dbname='.$config['name'], 
                $config['username'], 
                $config['password'],
                $config['options']
            );

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
};