<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\Survey;
use App\Result;
use App\Master;
use App\Question\MakeValidation;

use Validator;

class CommitController extends Controller
{
    private function common(Request $request)
    {
        $body = $request->all();
        $validate_rule = MakeValidation::GetRules();

        $validator = Validator::make($body, $validate_rule);
        if($validator->fails())
        {
            return [
                'result' => false,
            ];
        }

        $results = Result::All();
        // Master::init();
        return $body;
    }

    public function get(Request $request) {
        return $this->common($request);
    }

    public function post(Request $request) {
        return $this->common($request);
    }
}
