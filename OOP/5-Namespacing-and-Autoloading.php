<?php
/**
 *  Namespacing and Autoloading
 * 
 *  General rule, 1 class per file
 *  
 *  Namespacing is the way of organising our classe
 *  it allow us to have same classes names for different purpose and avoid conflicts between them.
 * 
 */


/**
 *  Composer Autoload (need to have composer installed globally on PC)
 *  
 *  create empty json composer.json file with jsut {}
 * 
 *  using terminal run this commands in this folder:
 * 
 *  `composer install` --  it will created vendor folder for us with autoload component 
 * 
 *  Add autoload in composer.json, and add namespace to your class files. Namespace and psr-4 name should be the same.
 *  Then, run in terminal:
 * 
 *  `composer dump-autoload` -- this will build list of files to autoload (in vendor folder)
 * 
 */

// this would be usually inscluded int he main file eg: index.php  
// we need to icnlude autoloader only once for the project
// this will include all our classes in src folder
require "vendor/autoload.php";


// we define this here so we dont have to use name space when creating the instance of the class 
// eg: new Kreativan\Business($staff)
use Kreativan\Staff;
use Kreativan\Business;
use Kreativan\Person;


// create staff object (bussiness class depends on it) and add person to it
$staff = new Staff(["John Done"]);

// create business object and asign staff to it
$biz = new Business($staff);

// add new person to the staff
$mrRobot = new Person("Mr Robot");
$biz->hire($mrRobot);

// var_dump($staff);

var_dump($biz->getStaffMembers()); 