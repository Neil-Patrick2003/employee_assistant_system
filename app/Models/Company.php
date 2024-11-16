<?php

namespace App\Models;

use App\Models\JobListing;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'logo_url',
        'details',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jobs(){
        return $this->hasMany(JobListing::class);
    }
}
