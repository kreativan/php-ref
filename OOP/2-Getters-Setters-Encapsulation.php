<?php
/**
 *  Getters Setters
 * 
 *  Used for security/protection, 
 *  eg: when we want to limit the age of person
 * 
 *  Encapsulation
 *      
 *  Methods and properties that are not intended to be used outside the class should be hidden-encapsulated.
 *      protected -- only subclasses can access methods
 *      private -- method can be only accessed from the class, not even from subclasses
 * 
 */

class Person { 

    // private property cant be accessed dirrectly, only via method
    // cant set private property like $john->age = 30;
    // and that is encapsulation, preventig acecss to properties and methods from outside

    private $name;

    private $age;

    // construct method
    public function __construct($name) {

        $this->name = $name;

    }

    // Setter
    public function setAge($age) {

        if($age < 18) {

            throw new Exception("Person is not old enough");

        }

        $this->age = $age;

    }

    // Getter
    public function getAge() {

        // return age * 365 days 
        return $this->age * 365;

    }


}

$john = new Person('John Doe');

// set age using setter
$john->setAge(30);

var_dump($john->getAge());