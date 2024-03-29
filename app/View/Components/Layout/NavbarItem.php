<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;
use function view;

class NavbarItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $href, public string $image, public string $label)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.navbar-item');
    }
}
