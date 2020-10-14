<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @SWG\Definition(
*definition="Topic"
*required={"topic"},
*@SWG\Property(
*property="topic",
*type="string",
*description="Topic of bulletin",
*example="Science, Sports"
*)
*)
*/
class Topic extends Model
{
    //
    public function getTopic()
    {
        return $this->topic;
    }
}
