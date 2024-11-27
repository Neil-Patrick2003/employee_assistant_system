<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $guarded = [];


    public function getDuration()
    {
        return $this->end_date ?
            Carbon::create($this->start_date)->toFormattedDateString() . " to " . Carbon::create($this->end_date)->toFormattedDateString() :
            Carbon::create($this->start_date)->toFormattedDateString();
    }
}
