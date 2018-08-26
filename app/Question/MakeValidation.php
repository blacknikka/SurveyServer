<?php
namespace App\Question;

use App\Master;
use Illuminate\Validation\Rule;

class MakeValidation
{
    public static function GetRules()
    {
        $rules = Master::GetQuestionInf();

        $validate_rule = [
            'ID' => 'required',
            'InputData' => 'required',
        ];

        // make question rules.
        foreach($rules as $key => $value)
        {
            if($value['type'] === 'SelectOne')
            {
                // 'SelectOne' must include one answer.
                $validate_rule['InputData.' . $value['question']] = ['required', Rule::in($value['answer'])];
            }
            if($value['type'] === 'SelectMulti')
            {
                $validate_rule['InputData.' . $value['question']] = 'present';
            }
            if($value['type'] === 'WriteAny')
            {
                $validate_rule['InputData.' . $value['question']] = 'present';
            }
        }

        return $validate_rule;
    }
}
