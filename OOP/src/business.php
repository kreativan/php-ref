<?php namespace Kreativan;

// NOTE: If we move class file in the subfolder we need to specify it in namespace
// eg: namespace Kreativan\Subfolder

class Business {

    protected $staff;

    public function __construct(Staff $staff) {

        $this->staff = $staff;

    }


    public function hire(Person $person) {


        $this->staff->add($person);

    }


    public function getStaffMembers() {


        return $this->staff->getMemebers();

    }
    

}