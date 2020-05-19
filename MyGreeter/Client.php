<?php
namespace MyGreeter;
/**
 * Class Client
 */
class Client extends \PHPUnit_Framework_ClientCase
{
    /**
     * get greeting
     * @param string $getTime
     * @return array|null
     */
    public function getGreeting(string $getTime = '')
    {

        return $this->greeting($this->chooseGreeting($getTime));
    }

    /**
     * greeting conf
     * @param string $key
     * @return array|null
     */
    public function greeting(string $key = '')
    {
        $all = [
            'm' => 'Good morning',// hour：0 to 12
            'a' => 'Good afternoon',//hour：12 to 18
            'e' => 'Good evening',//hour：18 to 0
        ];

        if (!$key) {
            return $all;
        }

        if (array_key_exists($key, $all)) {
            return $all[$key];
        }
        return '';
    }

    /**
     * check time case
     * @param string $getTime
     * @return string
     */
    public function chooseGreeting(string $getTime = ''):string
    {
        $time = time();
        if ($getTime) {
            if (!$time = strtotime($getTime)) {
                return ' param is error';
            }
        }

        $hour = date('H', $time);
        $choose = '';
        if ($hour > 0 && $hour < 12) {
            $choose = 'm';
        } elseif ($hour >= 12 && $hour < 18) {
            $choose = 'a';
        } else {
            $choose = 'e';
        }

        return $choose;

    }

}

