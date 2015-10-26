<?php


namespace MyCompany;


class Administrator extends Member
{

    public function createUser()
    {
        echo "$this->{getFullName()} can create an User</br>";
    }

    public function deleteUser()
    {
        echo "$this->{getFullName()} can delete an User</br>";
    }

    public function setRights()
    {
        echo "$this->{getFullName()} can set rights for Users</br>";
    }

    public function __toString()
    {
        $str = parent::__toString();
        $str .= 'My rights: ' . "</br><ul>";
        $str .= "<li>" . $this->createUser() . "</li>";
        $str .= "<li>" . $this->deleteUser() . "</li>";
        $str .= "<li>" . $this->setRights() . "</li></ul>";

        return $str;
    }

}
