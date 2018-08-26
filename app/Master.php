<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'masters';

    private static $question = [];

    public static function init()
    {
        $db = Master::All();
        foreach($db as $value)
        {
            if(isset(Master::$question[$value['id']]) === false)
            {
                Master::$question[$value['id']] = [
                    'question' => 'Question' . $value['id'],
                    'type' => $value['type'],
                    'answer' => [$value['answer']],
                ];
            }
            else
            {
                array_push(Master::$question[$value['id']]['answer'], $value['answer']);
            }
        }
    }

    public static function GetQuestionInf()
    {
        Master::init();
        return Master::$question;
    }
}
