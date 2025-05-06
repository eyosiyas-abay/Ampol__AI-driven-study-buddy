<?php

namespace App\View\Components\nav;

use App\View\Components\Enums\LinkType;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
    public string $classes = '';

    /**
     * Create a new component instance.
     */
    public function __construct(public string $href = '', public string | LinkType $type = LinkType::Default)
    {
        if (is_string($type)) {
            $type = LinkType::from(strtolower($type));
        }

        $this->classes .= match ($type) {
            LinkType::Default => '',
            LinkType::Primary => 'h-10 px-4 rounded-lg flex items-center justify-center text-white cursor-pointer whitespace-nowrap bg-blue-500 gap-1.5 text-white border border-blue-500 no-underline',
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav.link');
    }
}
