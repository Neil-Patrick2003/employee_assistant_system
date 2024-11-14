<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    protected $fillable = [
        'company_id',
        'title',
        'description',
        'salary',
        'location',
        'work_policy',
        'scope',
        'required_work_experience',
        'minimum_age',
        'maximum_age',
        'category'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
