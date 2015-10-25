<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 24.10.15
 * Time: 14:36
 */
namespace MyCompany;

class Member implements MembersInterface
{
    protected $firstName;
    protected $lastName;
    protected $group;
    protected $loggedIn;

    /**
     * @param $firstName
     * @param $lastName
     */
    public function __construct() {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->loggedIn = false;
    }

    public function getName()
    {
        return "$this->firstName $this->lastName";
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function setGroup($group)
    {
        $this->group = $group;
    }

    public function __toString()
    {
        $str = '';
        $str .= 'Full Name: ' . $this->getName() . "</br>";
        $str .= 'Group: ' . $this->getGroup() . "</br>";

        return $str;
    }

}