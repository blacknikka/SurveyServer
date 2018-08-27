<?php
namespace App\Question;

use App\Master;
use Illuminate\Validation\Rule;

class MakeValidation
{
    // Make validation rules.
    public static function GetRules()
    {
        $rules = Master::GetQuestionInf();

        $validate_rule = [
            'ID' => 'required|integer',
            'token' => 'required|string',
            'InputData' => 'required',
        ];

        // make question rules.
        foreach($rules as $key => $value)
        {
            if($value['type'] === 'SelectOne')
            {
                // 'SelectOne' must include one answer.
                $validate_rule['InputData.' . $value['question']] = ['required', Rule::in(array_keys($value['answer']))];
            }
            if($value['type'] === 'SelectMulti')
            {
                // 'SelectMulti' must include each answer.
                $keyName = 'InputData.' . $value['question'];
                foreach($value['answer'] as $ansKey => $ansVal)
                {
                    $validate_rule[$keyName . '.' . $ansKey] = ['required', 'boolean'];
                }
            }
            if($value['type'] === 'WriteAny')
            {
                $validate_rule['InputData.' . $value['question']] = 'present';
            }
        }

        return $validate_rule;
    }
}
