<?php

namespace App\Auth;

use App\Psw;
use App\Token;

use Carbon\Carbon;

class Auth
{
    public static function CheckPsw($auth)
    {
        $ret = [
            'result' => true,
            'id' => 0,
        ];

        // get psw from DB.
        $psw = Psw::where('mail', $auth['mail'])->first();
        if($psw !== null)
        {
            // verify psw and hash.
            $ret['result'] = password_verify($auth['psw'], $psw['psw']);
            $ret['id'] = $psw['id'];
        }
        else
        {
            $ret['result'] = false;
        }

        return $ret;
    }

    // make token from ID.
    public static function MakeToken($id)
    {
        $str = $id . 'sakesake';

        return md5($str);
    }

    // check token by ID
    public static function CheckToken($token, $id)
    {
        $ret = false;

        // get token data.
        $db = Token::where('token', $token)->first();
        if($db !== null)
        {
            // check token and timestamp.
            if($db['token'] === $token && $db['user_id'] === $id)
            {
                // token is OK
                // If time is NOT too old, it is OK.
                $cur = Carbon::now();
                $time = $db['updated_at'];

                // Add one hour to the Time from DB
                // Compare two times (from DB and current time)
                // If current time is future time, it is NOT good.(time is up.)
                $time = $time->addHour();

                if($time->gte($cur))
                {
                    $ret = true;
                }
            }
        }

        return $ret;
    }
}
