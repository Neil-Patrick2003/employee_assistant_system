<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BarChart extends Component
{
    public array $labels;
    public array $data;
    public string $chartLabel;
    public string $chartTitle;

    /**
     * Create a new component instance.
     *
     * @param array $labels
     * @param array $data
     * @param string $chartLabel
     * @param string $chartTitle
     */
    public function __construct(array $labels, array $data, string $chartLabel = 'Data', string $chartTitle = 'Chart')
    {
        $this->labels = $labels;
        $this->data = $data;
        $this->chartLabel = $chartLabel;
        $this->chartTitle = $chartTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bar-chart', [
            'data' => $this->data,
            'chartLabel' => $this->chartLabel,
            'labels' => $this->labels,
            'chartTitle' => $this->chartTitle,
        ]);
    }
}
