<?php
/**
 *  Messages
 *  
 *  How Objects comunicate with eachother
 * 
 *  When we have many classes
 *  Objects send messages to one another
 *  
 * 
 */


class Person {

    protected $name;

    public function __construct($name) {

        $this->name = $name;

    }

}

class Business {

    protected $staff;

    // make default staff and requierd
    public function __construct(Staff $staff) {

        $this->staff = $staff;

    }


    // if we expect the passed value to be a of type person
    // we can use type hinting
    // so passed value should be a Person object
    public function hire(Person $person) {

        // add person to the staff colllection
        // this is new instance of the staff class
        // this is called "sending message"
        // when running hire->($person), new $person object will be added to the stuff.
        // So, in this case Staff class only holds the data, 
        // and we update the data via Business class using this method
        $this->staff->add($person);

    }


    public function getStaffMembers() {

        // this is also "message"
        // this will run getMembers() method from the Staff class
        return $this->staff->getMemebers();

    }
    

}

class Staff {

    protected $members = [];

    // when creating object add default person/s (array) to the staff,
    // in this case  default staff members will be requierd
    // but we also set the $members = []  empty array as default,
    // so if we dont pass the memebers param, it will create a empty $members array on init
    public function __construct($members = []) {

        $this->members = $members;

    }

    public function add(Person $person) {

        // add new person the the memebrs array
        $this->members[] = $person;

    }

    // getter
    public function getMemebers() {

        return $this->members;

    }
    

}


// create staff object (bussiness class depends on it) and add person to it
$staff = new Staff(["John Done"]);

// create business object and asign staff to it
$biz = new Business($staff);

// add new person to the staff
$mrRobot = new Person("Mr Robot");
$biz->hire($mrRobot);

// var_dump($staff);

var_dump($biz->getStaffMembers());