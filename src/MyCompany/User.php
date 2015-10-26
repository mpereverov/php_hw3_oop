<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 25.10.15
 * Time: 16:22
 */

namespace MyCompany;


/**
 * @property  username
 */
class User extends Member
{


    public function readTasks()
    {
        echo "$this->username can read their Tasks</br>";
    }

    public function sendFeedback()
    {
        echo "$this->username can send a Feedback for Administrators</br>";
    }

    public function __toString()
    {
        $str = parent::__toString();
        $str .= 'My rights: ' "</br><ul>";
        $str .= "<li>" . $this->readTasks() . "</li>";
        $str .= "<li>" . $this->sendFeedback() . "</li></ul>";

        return $str;
    }

}