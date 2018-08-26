<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tex_id extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tex_ids';

    public $timestamps = false;

    public function Result()
    {
        return $this->belongsTo('App\Result');
    }

    public static function AddText($data)
    {
        var_dump($data);
        $text = new Tex_id;
        $text->answer = $data;
        $text->save();
        
        return $text->id;
    }
}
