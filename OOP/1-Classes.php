<?php
/**
 *  Classes
 * 
 */


// class
class Task {

    // property
    public $description;

    public $completed = false;

    // method (not function)
    // this special method will be called soon as we initiate a class
    public function __construct($description) {

        $this->description = $description;

    }

    // class method
    public function complete() {

        $this->completed = true;

    }

}


// class instance
$task = new Task("Learn OOP");

// get the class property
var_dump($task->description); 

// call class method
$task->complete();

var_dump($task->completed); 