<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ClassRoom extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

    public function teachers()
    {
        return $this->belongsToMany(\App\Models\Teacher);
    }

    public function students()
    {
        return $this-belongsToMany(\App\Models\Student);
    }

}
