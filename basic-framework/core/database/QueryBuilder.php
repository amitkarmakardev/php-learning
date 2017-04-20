<?php

class QueryBuilder{

    protected $connection;
    protected $dbconfig;

    public function __construct(PDO $connection){
        $this->connection = $connection;
    }

    public function selectAll($table){
        $statement = $this->connection->prepare("Select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    }

}