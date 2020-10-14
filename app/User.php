<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['id', 'name', 'surname', 'sex', 'day', 'educational_level'];
    public function getUser()
    {
        return $this;
    }
}
