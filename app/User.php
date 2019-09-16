<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function schedules()
    {
        return $this->hasMany("App\Schedule");
    }
}
