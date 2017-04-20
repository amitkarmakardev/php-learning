<?php

class Task{
    protected $name;
    protected $description;

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }
}