<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\Survey;
use App\Result;
use App\Master;
use App\Question\MakeValidation;
use App\Question\ExchangeRecord;

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

    public function get(Request $request) {
        return $this->common($request);
    }

    public function post(Request $request) {
        return $this->common($request);
    }
}
