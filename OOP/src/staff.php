<?php namespace Kreativan;

// NOTE: If we move class file in the subfolder we need to specify it in namespace
// eg: namespace Kreativan\Subfolder

class Staff {

    protected $members = [];

    public function __construct($members = []) {

        $this->members = $members;

    }

    public function add(Person $person) {
        $this->members[] = $person;

    }

    public function getMemebers() {

        return $this->members;

    }
    

}
