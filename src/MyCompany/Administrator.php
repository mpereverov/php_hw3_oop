<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 25.10.15
 * Time: 3:24
 */

namespace MyCompany;


class Administrator extends Member
{

    public function createUser()
    {
        echo "$this->username can create an User</br>";
    }

    public function deleteUser()
    {
        echo "$this->username can delete an User</br>";
    }

    public function setRights()
    {
        echo "$this->username can set rights for Users</br>";
    }

    public function __toString()
    {
        $str = parent::toString();
        $str .= 'My rights: ' "</br><ul>";
        $str .= "<li>" . $this->createUser() . "</li>";
        $str .= "<li>" . $this->deleteUser() . "</li>";
        $str .= "<li>" . $this->setRights() . "</li></ul>";

        return $str;
    }

}