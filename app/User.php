<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['id', 'name', 'surname', 'email', 'password', 'sex', 'day', 'educational_level_id'];
    public function getUser()
    {
        return $this;
    }

    public function educational_level()
    {
        return $this->belongsTo(EducationalLevel::class);
    }

}
