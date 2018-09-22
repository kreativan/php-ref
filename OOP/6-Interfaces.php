<?php
/**
 *  Interfaces
 * 
 *  Interace is not for logic, it's abstract. So it doesent have full methods, only defines the method name.
 * 
 *  If there is ever classes or tasks, with multiple implementations, different methods to execute using same class,
 *  that means we need an interface.
 * 
 */

interface Animal {

    public function communicate();

}

/**
 *  Class that implements interafece, must have it's methods defined
 * 
 */

class Dog implements Animal {

    public function communicate() {

        return "bark";        

    }

}


class Cat implements Animal {

    public function communicate() {

        return "meow";        

    }

}


/**
 *  Logger Example
 *  
 */

interface Logger {

    public function execute($message);

}

class LogToFile implements Logger {

    public function execute($message) {

        var_dump('Log message to a file:' . $message);

    }

}

class LogToDatabase implements Logger {

    public function execute($message) {

        var_dump('Log message to a database:' . $message);

    }

}

// ..

class UsersController {

    protected $logger;

    // here we pass the interface Logger,
    // so it can use method for any implemented class
    public function __construct(Logger $logger) {

        $this->logger = $logger;

    }

    public function show() {

        $user = "John Doe";

        $this->logger->execute($user);

    }

}

$controller = new UsersController(new LogToFile);
// or
$controller = new UsersController(new LogToDatabase);

$controller->show();


/**
 * 
 *  Example Casts To Json
 * 
 */

interface CastsToJson {

    public function toJson();

} 

class User implements CastsToJson {}
    
class Collection implements CastsToJson {}