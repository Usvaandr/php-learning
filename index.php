<?php 

// require 'functions.php';

class Task {
    public $description;

    public $completed = false;

    public function __construct($description)
    {
        // Automatically trigerred on instantiantion
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

    public function isComplete(){
        return $this->completed;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Buy veggies'),
    new Task('Go to basketball')
];

$tasks[0]->complete();

// dd($task);
// var_dump($task->isComplete());

require 'index.view.php';