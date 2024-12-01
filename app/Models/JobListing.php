<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class JobListing extends Model
{
    protected $fillable
        = [
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

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function job_skills()
    {
        return $this->hasMany(JobSkill::class);
    }

    public function job_education()
    {
        return $this->hasOne(JobEducation::class);
    }

    public function my_application()
    {
        return $this->hasOne(Application::class, 'job_id', 'id')
            ->when(
                Auth::check(),
                fn(Builder $query) => $query->where('user_id', Auth::id()),
                fn(Builder $query) => $query->whereNull('user_id'),
            );
    }

    public function scopeMatchUserPreference(
        Builder $builder,
        User $user
    ): Builder {
        UserJobPreferences::firstOrCreate(['user_id' => $user->id]);

        $user->loadMissing(['job_preference']);

        return $builder->where(function (Builder $query) use ($user) {
            $query
                ->where(function (Builder $subQuery) use ($user) {
                    $subQuery->where('minimum_age', '<=', $user->age)
                        ->where('maximum_age', '>=', $user->age);
                })
                ->when($user->job_preference->category,
                    function (Builder $subQuery) use ($user) {
                        $subQuery->orWhere('category', $user->job_preference->category);
                })
                ->when($user->job_preference->scope,
                    function (Builder $subQuery) use ($user) {
                        $subQuery->orWhere('work_policy', $user->job_preference->scope);
                    })
                ->when($user->job_preference->work_policy,
                    function (Builder $subQuery) use ($user) {
                        $subQuery->orWhere('work_policy', $user->job_preference->work_policy);
                    })
                ->when($user->job_preference->work_experience,
                    function (Builder $subQuery) use ($user) {
                        $subQuery->orWhere('requierd_work_experience', '<=', $user->job_preference->work_experience);
                    })
                ->when($user->job_preference->min_salary,
                    function (Builder $subQuery) use ($user) {
                        $subQuery->orWhere('salary', '>=', $user->job_preference->min_salary);
                    });
        });
    }

    public static function getCategoriesOptions(): array
    {
        return [
            "Administrative & Office Support",
            "Accounting & Finance",
            "Customer Service",
            "Education & Training",
            "Healthcare & Medical",
            "Human Resources",
            "Information Technology",
            "Legal",
            "Marketing & Communications",
            "Sales & Business Development",
            "Skilled Trades & Construction",
            "Engineering",
            "Creative & Design",
            "Manufacturing & Production",
            "Transportation & Logistics",
            "Hospitality & Tourism",
            "Science & Research",
            "Government & Public Sector",
        ];
    }

    public static function getLocationOptions()
    {
        return [
            "Agoncillo",
            "Alitagtag",
            "Balayan",
            "Balete",
            "Batangas City",
            "Bauan",
            "Calaca",
            "Calatagan",
            "Cuenca",
            "Ibaan",
            "Laurel",
            "Lemery",
            "Lian",
            "Lipa City",
            "Mabini",
            "Malvar",
            "Mataasnakahoy",
            "Nasugbu",
            "Padre Garcia",
            "Rosario",
            "San Jose",
            "San Juan",
            "San Luis",
            "San Nicolas",
            "San Pascual",
            "Santa Teresita",
            "Santo Tomas",
            "Taal",
            "Talisay",
            "Tanauan City",
            "Tuy"
        ];
    }

}
