<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 23.10.15
 * Time: 19:24
 */

require_once 'vendor/autoload.php';


use MyCompany\Administrator;
use MyCompany\User;

$admin = new Administrator();
$admin->setName('Ivan', 'Sobakin');
$admin->setGroup('Administrator');
$admin->__toString();

$user = new User();
$user->setName('Nik', 'Yuzov');
$user->setGroup('User');
$user->__toString();

