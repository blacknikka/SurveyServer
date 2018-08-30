<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\Question\MakeValidation;
use App\Auth\Auth;

use Validator;

class CommitController extends Controller
{
    private function common(Request $request)
    {
        $body = $request->all();
        $validate_rule = MakeValidation::GetRules($body);

        // custom validator
        $validator = Validator::make($body, $validate_rule);
        if($validator->fails())
        {
            return [
                'result' => false,
                'msg' => 'committed data error.'
            ];
        }

        // check token.
        $check = Auth::CheckToken($body['token'], $body['mail']);
        if($check['result'] === false)
        {
            return [
                'result' => false,
                'msg' => 'token data error.'
            ];
        }

        // success validate.
        // create data.
        Result::AddRecord($body, $check['id']);

        return [
            'result' => true,
            'msg' => 'success!',
        ];
    }

    public function post(Request $request) {
        return $this->common($request);
    }
}
