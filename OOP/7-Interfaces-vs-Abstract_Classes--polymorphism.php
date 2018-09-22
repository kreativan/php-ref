<?php
/**
 *  Interfaces vs Abstract Classes
 * 
 *  In short, interafce is better for this things,
 *  but we can use both
 * 
 */

interface Provider {

    public function authorize();

} 

// polymorphism -- pass reference to the interface
// login function doesnt care wich provider will be used
// authorize will execute with what ever provider we specify
// we call this polymorphism
function login(Provider $provider) {

    $provider->authorize();

}

// ... abstract class ... //

abstract class MyProvider {

    // abstract method means that we require any subclass to implement this method
    abstract protected function getAuthUrl();

}


class FacebookProvider extends MyProvider {

    protected function getAuthUrl() {

        return "";

    }

}
