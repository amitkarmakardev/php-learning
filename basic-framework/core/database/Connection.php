<?php

class Connection{

    public static function make($dbconfig){
        try{    
           return new PDO(   
                $dbconfig['dsn'] . $dbconfig['name'],
                $dbconfig['username'],
                $dbconfig['password'],
                $dbconfig['options']
            );
        }
        catch(Exception $e){
            die($e->getMessage());
        }    
    }

}