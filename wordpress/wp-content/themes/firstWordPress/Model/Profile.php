<?php
/**
 * Created by PhpStorm.
 * User: glorygrows
 * Date: 5/23/18
 * Time: 1:36 PM
 */

class Profile
{
    public $Name;
    public $DOB;

    public function __construct($name, $dob)
    {
        $this->Name = $name;
        $this->DOB = $dob;
    }
}