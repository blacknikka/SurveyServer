<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auth\Auth;
use App\Token;
use App\Master;
use Validator;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
        $ret = [
            'result' => true,
            'msg' => '',
        ];

        // get POST data.
        $body = $request->all();

        // validate.
        // make validate data.
        $validate = [
            'mail' => 'required|email',
            'psw' => 'required|alpha_num',
        ];
        $validator = Validator::make($body, $validate);

        // validate POST data.
        if($validator->fails())
        {
            $ret['result'] = false;
            $ret['msg'] = 'Check your Email, and Password.';
        }
        else
        {
            // check password
            $result = Auth::CheckPsw($body);
            if($result['result'] === false)
            {
                $ret['result'] = false;
                $ret['msg'] = 'Check your Email, and Password.';
            }
            else
            {
                // auth OK.
                // make token, and send it.
                $token = Auth::MakeToken($result['id']);
                if($token !== null)
                {
                    // delete key.
                    Token::where('user_id', $result['id'])->delete();

                    // ok
                    $ret['msg'] = 'check OK.';
                    $ret['token'] = $token;

                    // insert token to DB.
                    $cur = Carbon::now()->format('Y-m-d H:i:s');

                    $tokenData = new Token;
                    $tokenData->user_id = $result['id'];
                    $tokenData->token = $token;
                    $tokenData->created_at = $cur;
                    $tokenData->updated_at = $cur;
    
                    $tokenData->save();

                    $ret['survey'] = Master::GetQuestionInf();
                }
            }
        }

        return $ret;
    }
}
