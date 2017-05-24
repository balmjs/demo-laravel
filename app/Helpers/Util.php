<?php

namespace App\Helpers;

class Util
{
    public static function generateAPIToken($uuid)
    {
        $salt = 'someKey';
        $token = md5($uuid.$salt);

        return $token;
    }
}
