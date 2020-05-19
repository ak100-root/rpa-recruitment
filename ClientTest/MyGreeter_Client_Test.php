<?php
namespace ClientTest;
/**
 * Class MyGreeter_Client_Test
 */
class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    protected $greeter;

    /**
     * get greetiing
     * .$timeCase eg:
     *            1. ''  now  greeting
     *            2. 2020-05-18 6:30  good morning
     *            3. 2020-05-19 13:30  good afternoon
     *            4. 2020-05-19 19:30  good evening
     *
     * @param string $case
     */
    public function test_getGreeting(string $timeCase = '')
    {
        return $this->greeter->getGreeting($timeCase);
    }

    /**
     * get all greeting
     * @return array
     */
    public function test_getAllGreeting(){
        return $this->greeter->getAllGreeting();
    }

}