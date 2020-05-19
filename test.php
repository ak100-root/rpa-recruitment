<?php
// aoutoload and set timezone
require_once 'core.php';

/******************** test start *******************/

$clientTest = new \ClientTest\MyGreeter_Client_Test(new MyGreeter\Client());
echo  '<hr/>//get  greeting<br />';
// now
$greeting = $clientTest->test_getGreeting();
echo $greeting . '<br />';

//sometime
$greeting = $clientTest->test_getGreeting('2020-11-23 11:00');
echo $greeting . '<br />';

$greeting = $clientTest->test_getGreeting('2020-11-23 12:00');
echo $greeting . '<br />';

$greeting = $clientTest->test_getGreeting('2020-11-23 18:00');
echo $greeting . '<br /><br />';

//get class name  (client type)
echo  '<hr/>//get class name  (client type)<br />';
$clientType = $clientTest->test_Instance();
echo $clientType . '<br /><br />';

//get all greeting
echo  '<hr/>//get all greeting<br />';
$greeting = $clientTest->test_getAllGreeting();
var_export($greeting);
echo '<br />';

/******************** question2 suggestionn *******************/

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

