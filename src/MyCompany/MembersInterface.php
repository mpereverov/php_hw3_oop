<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 25.10.15
 * Time: 1:34
 */

namespace MyCompany;

interface MembersInterface {

    public function getName();

    public function setFullName($firstName, $lastName);

    public function getGroup();

    public function setGroup($group);
}