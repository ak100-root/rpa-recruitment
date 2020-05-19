<?php
use MyGreeter\Client;
/**
 * Class PHPUnit_Framework_TestCase
 */
abstract class PHPUnit_Framework_TestCase
{
    protected $greeter;

    /**
     * PHPUnit_Framework_TestCase constructor.
     * @param PHPUnit_Framework_ClientCase $greeter
     */
    public function __construct(\PHPUnit_Framework_ClientCase $greeter)
    {
        $this->greeter = $greeter;
    }

    /**
     * get className
     * @return string
     */
    public function test_Instance():string
    {
        return get_class($this->greeter);
    }

    /**
     * get greeting
     * @return string
     */
    abstract function test_getGreeting();

}
