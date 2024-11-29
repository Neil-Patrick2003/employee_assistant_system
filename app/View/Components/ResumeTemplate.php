<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResumeTemplate extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $name, public User $user, public bool $editable)
    {

    }


    public function render(): View|Closure|string
    {
        return view('components.resume-templates.' . $this->name, ['user' => $this->user, 'editable' => $this->editable]);
    }
}
