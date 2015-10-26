<?php

namespace MyCompany;

class User extends Member
{


    public function readTasks()
    {
        echo "$this->{getFullName()} can read their Tasks</br>";
    }

    public function sendFeedback()
    {
        echo "$this->{getFullName()} can send a Feedback for Administrators</br>";
    }

    public function __toString()
    {
        $str = parent::__toString();
        $str .= 'My rights: ' . "</br><ul>";
        $str .= "<li>" . $this->readTasks() . "</li>";
        $str .= "<li>" . $this->sendFeedback() . "</li></ul>";

        return $str;
    }

}
