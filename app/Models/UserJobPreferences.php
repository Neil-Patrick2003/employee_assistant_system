<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserJobPreferences extends Model
{
    protected $fillable = [
        'user_id',
        'min_salary',
        'work_experience',
        'category',
        'work_policy',
        'scope',
        'location'
    ];
}
