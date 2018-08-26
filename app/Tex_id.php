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

    public function Result()
    {
        return $this->belongsTo('App\Result');
    }
}
