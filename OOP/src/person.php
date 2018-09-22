<?php namespace Kreativan;

// NOTE: If we move class file in the subfolder we need to specify it in namespace
// eg: namespace Kreativan\Subfolder

class Person {

    protected $name;

    public function __construct($name) {

        $this->name = $name;

    }

}