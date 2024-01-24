<?php

namespace App\View\Components;

use App\Models\Conference;
use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
       // Get the nearest upcoming conference
    // $conference = Conference::where('start_date', '>', Carbon::now())->orderBy('start_date', 'asc')->first();
    $conference = Conference::where('shortname', 'dic2023')->first();

    return view('components.hero', [
        'conference' => $conference
    ]);
    }
}
