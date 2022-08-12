<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigationItems = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            [   'label' => 'Home', 
                'href' => '#home',
                'icon' => url('/images/navicon/home-icon.png')
            ],
            [   'label' => 'About the Author',
                'href' => '#about',
                'icon' => url('/images/navicon/author-icon.png')
            ],
            [   'label' => 'About the Book',
                'href' => '#book',
                'icon' => url('/images/navicon/book-icon.png')
            ],
            [   'label' => 'Book Order',
                'href' => '#order',
                'icon' => url('/images/navicon/order-icon.png')
            ],
            [   'label' => 'Contact',
                'href' => '#contact',
                'icon' => url('/images/navicon/contact-icon.png')
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.navbar');
    }
}
