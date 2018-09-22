<?php
/**
 * Inheritance
 * 
 *  Ability to inherit methods and properties from another class
 * 
 */


class Mother {

    public function getEyeCount() {

        return 2;

    }

}

class Child extends Mother {



}

$child = (new Child)->getEyeCount();
var_dump($child);



/**
 *  Example 2
 * 
 * 
 */

class Shape {

    protected $length = 4;

    public function getArea() {

        return $this->length * 4;

    }

}

class Square extends Shape {



}


class Triangle extends Shape {

    protected $base = 4;
    protected $height = 7;

    // when needed we can override the method
    public function getArea() {

        return 0.5 * $this->base * $this->height;

    }
    

}


echo (new Square)->getArea();
echo (new Triangle)->getArea();


/**
 *  Abstract Classes
 * 
 *  We cant init or instantiate abstract class, but we can still have benifits of inheritence from it.
 *  So, we can call abstract class dirrectly but we can call its methods via subclass.
 * 
 *  abstract class is very useful if we want to add more functionality later,
 *  all methods we add later will be automatically available to all its subclasses.
 *  
 * 
 */

abstract class Shape {

    /**
     *  In the classe we will require color
     *  if we dont define $color when creating instances, will get an error
     *  Also, we can set  default color to avoid error
     * 
     */

    protected $color;

    public function __construct($color = "green") {

        $this->color = $color;

    }

    // note that all subclasses will have access to this method
    public function getColor() {

        return $this->color;

    }

    // abstract method
    // method that is defined in a subclass
    // so if we call the method that doesent exists in main class and in a subclass we are calling
    // this will trow a error. If we dont define this, will show nothing
    abstract protected function getArea();

}

class Square extends Shape {

    protected $length = 4;

    public function getArea() {

        return $this->length * 4;

    }

}


class Triangle extends Shape {

    protected $base = 4;
    protected $height = 7;

    // when needed we can override the method
    public function getArea() {

        return 0.5 * $this->base * $this->height;

    }
    

}

class Circle extends Shape {

    protected $radius = 5;

    public function getArea() {

        return 5 * $this->radius;

    }

 
} 

// echo the color
echo (new Square)->getColor();
// change color and echo
echo (new Square("blue"))->getColor();


$circle = new Circle;
echo $circle->getArea();
// or shorthand
(new Circle)->getArea();


/**
 * 
 *  Mailer example
 *  
 *  Use inheritence to prevent duplication and redundency
 *  If we never gonna use main class directly, we can make it abstract.
 * 
 */

abstract class Mailer {

    // this method will be responsable for sending emails
    // and it can be caller from any subclass
    public function send($to, $from, $body) {



    }

} 

class UserMailer extends Mailer {

    public function sendWelcomeEmail() {

        return $this->send();

    }


}

class AdminMailer extends Mailer {

    public function sendNotificationEmail() {

        return $this->send();

    }

}