<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resume extends Model
{
    protected $fillable = [
        'user_id',
        'template'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
