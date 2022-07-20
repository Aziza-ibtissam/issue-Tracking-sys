<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Task extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['owner_id', 'title','description'];

    public function user()
    {
        return $this->belongsTo('App\User');


    }
}
