<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobEducation extends Model
{
    protected $fillable = [
        'job_listing_id',
        'level',
        'deescription'
    ];
}
