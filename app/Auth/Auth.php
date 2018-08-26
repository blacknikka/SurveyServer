<?php

namespace App\Auth;

use App\Psw;

class Auth
{
    public static function CheckPsw($auth)
    {
        $ret = true;

        // get psw from DB.
        $psw = Psw::where('mail', $auth['mail'])->first();
        if($psw !== null)
        {
            // make hash.
            $input = password_hash($auth['psw'], PASSWORD_DEFAULT);

            // verify psw and hash.
            $ret = password_verify($auth['psw'], $input);
        }
        else
        {
            $ret = false;
        }

        return $ret;
    }
}
