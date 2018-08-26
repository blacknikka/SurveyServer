<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\Survey;
use App\Result;
use App\Master;
use App\Question\Question;

class CommitController extends Controller
{
    public function get(Request $request) {
        // var_dump($request);

        $body = $request->all();
        $validate_rule = [
            'ID' => 'required',
        ];

        // $this->validate($request, $validate_rule);

        $results = Result::All();
        // Question::Check();
        Master::init();
        Master::GetQuestion($body);
        return $results;

        // return ['get' => 'get', 'get2' => 'get2'];
    }

    public function post(Request $request) {
        // postされたデータのバリデーションを行う
        // return response()->json(['post' => 'post']);
        // return response('Hello World', 200)->header("Content-Type", "application/json")->header("Access-Control-Allow-Origin", "*");

        // return ['ID' => $request->ID, 'InputData' => $request->InputData ];

        $body = $request->all();
        $results = Result::All();
        // Question::Check();
        Master::init();
        Master::GetQuestion($body);
        return $results;
    }
}
