<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationalLevel extends Model
{
    protected $fillable = ['id', 'level'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
