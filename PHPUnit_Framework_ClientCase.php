<?php
/**
 * Class PHPUnit_Framework_ClientCase
 */
abstract class PHPUnit_Framework_ClientCase
{
    /**
     * get greeting
     * @return mixed
     */
    abstract function getGreeting();

    /**
     * greeting conf
     * @return mixed
     */
    abstract function greeting();

    /**
     * greeting choose
     * @return mixed
     */
    abstract function chooseGreeting();

    /**
     * get all greetiong
     */
    public function getAllGreeting(){
        return $this->greeting();
    }
}