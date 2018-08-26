<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\Question\MakeValidation;

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
            ];
        }

        // success validate.
        // create data.
        Result::AddRecord($body);

        return $body;
    }

    public function post(Request $request) {
        return $this->common($request);
    }
}
