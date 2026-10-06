<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'ip_address',
        'user_agent',
        'url',
        'page',
        'referrer',
        'source',
        'medium',
        'campaign',
        'device',
        'browser',
        'platform',
        'country',
        'city',
        'session_id',
        'visitor_id',
    ];
}