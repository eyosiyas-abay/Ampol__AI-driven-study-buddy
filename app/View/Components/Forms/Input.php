<?php

namespace App\View\Components\forms;

use App\View\Components\Enums\InputType;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $classes;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string | InputType $type = InputType::Text,
        public string $placeholder = '',
        public string $label = '',
        public string $class = '',
        public string $error = ''
    ) {
        $this->classes = 'w-full border border-gray-300 rounded-lg p-2 px-3' . $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
