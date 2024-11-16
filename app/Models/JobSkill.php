<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSkill extends Model
{
    protected $fillable = [
        'job_listing_id',
        'name',
    ];

    public function job(){
        return $this->belongsTo(JobListing::class);
    }

    
}
