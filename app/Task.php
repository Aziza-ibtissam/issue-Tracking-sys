<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Task extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['owner_id', 'title','description'];

    public function ownerUser()
    {
        return $this->belongsTo('App\User', 'owner_id');


    }

    public function userassigned()
    {
        return $this->belongsTo('App\User','assignto');


    }
}
