<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QueuedEmails extends Model
{
    //
    protected $fillable = ['description', 'run', 'email'];
    protected $casts = ['run' => "boolean"];
}
