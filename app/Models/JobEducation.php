<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobEducation extends Model
{
    protected $table = 'job_educations';
    protected $fillable = [
        'job_listing_id',
        'level',
        'description'
    ];

    public function job(){
        return $this->belongsTo(JobListing::class);
    }
}
