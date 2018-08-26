<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Master;
use App\Tex_id;
use Carbon\Carbon;

class Result extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'results';

    public function tex_id()
    {
        return $this->hasOne('App\Tex_id');
    }

    // Add record to DB.
    public static function AddRecord($record)
    {
        // before add the data, check survey data.
        // are there the data in DB, delete it before adding.
        Result::where('id', $record['ID'])->delete();

        $question = Master::GetQuestionInf();
        $data = $record['InputData'];

        $cur = Carbon::now()->format('Y-m-d H:i:s');

        foreach($data as $key => $value)
        {
            if(is_array($value))
            {
                // array
                foreach($value as $array_key => $array_value)
                {
                    if($array_value === true)
                    {
                        // If answer is true, add answer to DB.
                        $result = new Result;
                        $result->id = $record['ID'];
                        $result->no = $key;
        
                        // Add answer value by numeric.
                        $result->answer = $question[$key]['answer'][$array_key];
                        $result->tex_id = null;
        
                        $result->created_at = $cur;
                        $result->updated_at = $cur;
        
                        $result->save();
                    }
                }
            }
            else
            {
                $result = new Result;
                $result->id = $record['ID'];
                $result->no = $key;

                if($question[$key]['type'] === 'WriteAny')
                {
                    // Free writable data.
                    if($value !== '' && is_null($value) !== true)
                    {
                        // NOT empty and NOT null
                        $result->answer = null;
                        $result->tex_id = Tex_id::AddText($value);
                    }
                    else
                    {
                        $result->answer = null;
                        $result->tex_id = null;
                    }
                }
                else
                {
                    // Add answer value by numeric.
                    $result->answer = $question[$key]['answer'][$value];
                    $result->tex_id = null;
                }

                $result->created_at = $cur;
                $result->updated_at = $cur;

                $result->save();
            }
        }
    }

}
