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
        'requierd_work_experience',
        'minimum_age',
        'maximum_age',
        'category'
    ];

    public function company(){
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function job_skills(){
        return $this->hasMany(JobSkill::class);
    }

    public function job_education(){
        return $this->hasOne(JobEducation::class);
    }
}
