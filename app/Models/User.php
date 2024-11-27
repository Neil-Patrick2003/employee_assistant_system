<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'age',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function company(){
        return $this->hasOne(Company::class, 'user_id');
    }

    public function job_preference(){
        return $this->has(UserJobPreferences::class);
    }

    public function user_education(){
        return $this->has(UserEducation::class);
    }

    public function educations(): HasMany
    {
        return $this->hasMany(UserEducation::class);
    }

    public function skills(): HasMany
    {
        return $this->hasMany(UserSkill::class);
    }

    public function work_experiences(): HasMany
    {
        return $this->hasMany(WorkExperience::class);
    }

    public function user_skill(){
        return $this->hasMany(UserSkill::class);
    }
}
