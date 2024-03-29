<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['title', 'date', 'start_time', 'end_time'];

    public function user()
    {
        return $this->belongsTo("App\User");
    }
}
