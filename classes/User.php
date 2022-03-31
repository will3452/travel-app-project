<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
class User extends Eloquent
{
    const TYPE_MANAGER = 'Manager';
    const TYPE_TRAVELER = 'Traveler';
    const TYPE_ADMIN = 'Admin';

    public static function createUser($type, $data)
    {
        //please write query here
        if ($type === self::TYPE_ADMIN) {
            //write code below to process the creation of admin

            return true;
        }

        if ($type === self::TYPE_MANAGER) {
            //write code below to process the creation of manager

            return true;
        }

        if ($type === self::TYPE_TRAVELER) {
            //write code below to process the creation of traveler

            return true;
        }

        //return false, if the process was failure.
        return false;
    }

    public function getFullName() // this function should return the full name of the user.
    {
        //return concatinated first, middle and last name.
        $str = ""; // edit this code
        return $str;
    }

}
