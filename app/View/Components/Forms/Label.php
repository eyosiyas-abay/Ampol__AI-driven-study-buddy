<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Label extends Component
{
    public string $classes;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $class = '', public bool $loading = false, public string $for = '')
    {
        $this->classes = 'text-sm rounded-lg text-black cursor-pointer whitespace-nowrap';
        $this->classes .= ' ' . $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.label');
    }
}
