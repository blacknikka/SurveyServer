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

    // Questions list
    private static $question = [];

    // Get the data from DB, and make Question list.
    private static function init()
    {
        $db = Master::All();
        foreach($db as $value)
        {
            if(isset(Master::$question[$value['id']]) === false)
            {
                Master::$question[$value['id']] = [
                    'question' => $value['id'],
                    'type' => $value['type'],
                    'answer' => [$value['answer'] => $value['value']],
                ];
            }
            else
            {
                Master::$question[$value['id']]['answer'][$value['answer']] = $value['value'];
            }
        }
    }

    // Get Questions list
    public static function GetQuestionInf()
    {
        Master::init();
        return Master::$question;
    }
}
