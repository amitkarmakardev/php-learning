<?php

class Task{
    
    public $name, $completed;

    public function __construct($name, $completed){
        $this->name = $name;
        $this->completed = $completed;
    }
}

$tasks = [
    new Task('Task 1', true),
    new Task('Task 2', true),
    new Task('Task 3', true),
    new Task('Task 4', false)   
];

$completed_tasks = array_filter($tasks, function($task){
    return  !$task->completed;
});

$modified = array_map(function($task){
    $task->completed = true;
    return $task;
}, $tasks);

var_dump($modified);