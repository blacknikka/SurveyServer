<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auth\Auth;
use Validator;


class LoginController extends Controller
{
    public function Login(Request $request)
    {
        $body = $request->all();
        $validate = [
            'mail' => 'required|email',
            'psw' => 'required|alpha_num',
        ];
        $validator = Validator::make($body, $validate);
        if($validator->fails())
        {
            return [
                'result' => false,
                'msg' => 'Check your Email, and Password.',
            ];
        }

        // check password
        if(Auth::CheckPsw($body) === false)
        {
            return [
                'result' => false,
                'msg' => 'Check your Email, and Password.',
            ];
        }

        return $body;
    }
}
