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

    public static function GetQuestion($answer)
    {
        var_dump($answer);
        $inputData = $answer['InputData'];
        var_dump($inputData);
        $ret = true;
        foreach(Master::$question as $key => $value)
        {
            $qNo = 'Question' . $key;
            if($value['type'] === 'SelectOne')
            {
                $ansKey = $inputData[$qNo];
                if(isset($ansKey))
                {
                    // 送られた内容と質問の内容を比較する（範囲内かどうかのチェック）
                    if(array_has($value['answer'], $ansKey))
                    {
                        $ret = false;
                    }
                }
                else
                {
                    $ret = false;
                }
            }
        }

        var_dump($ret);
        return $ret;
    }
}
