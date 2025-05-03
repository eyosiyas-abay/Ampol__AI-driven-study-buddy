<?php

namespace App\View\Components\forms;

use App\View\Components\Enums\ButtonType;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $classes;

    /**
     * Create a new component instance.
     */
    public function __construct(public string | ButtonType $type = ButtonType::Primary, public string $class = '')
    {
        if (is_string($type)) {
            $type = ButtonType::from(strtolower($type));
        }

        $this->classes = 'py-2 px-4 rounded-lg flex items-center justify-center text-white cursor-pointer';

        $this->classes .= match ($type) {
            ButtonType::Primary => ' bg-blue-500 gap-1.5 text-white',
            ButtonType::Secondary => ' p-0 text-black',
            ButtonType::Outline => ' border border-gray-300 text-black',
            ButtonType::Icon => ' bg-blue-500 gap-1.5',
        };

        $this->classes .= ' ' . $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.button');
    }
}
