# rpa-recruitment
PHP version: 7.0+
Demo : test.php

Go to this folder and run the command :  
  php -S localhost:9810 
  
then access ' localhost:9810/test.php ' by brower

******************** question2 suggestion *******************/

/**
    $this->greeter = new \MyGreeter\Client();
    With dependency injection, this class is more stable, loosely coupled, and in line with object-oriented design principles

    /**
     *
    class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
    {
          public function setUp()
         {
             $this->greeter = new \MyGreeter\Client();
          }
         *
         *
         *
     }
 *
 */
