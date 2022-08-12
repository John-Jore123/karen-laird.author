<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class SideBar extends Component
{
    public array $navbarItems = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($navbarItems)
    {
        $this->navbarItems = [
            [   
                'href' => '#home',
                'label' => 'Home', 
                'image' => url('images/navicon/home-icon.png'),
            ],
            [   
                'href' => '#about',
                'label' => 'About the Author',
                'image' => url('images/navicon/author-icon.png'),
            ],
            [   
                'href' => '#book',
                'label' => 'About the Book',
                'image' => url('images/navicon/book-icon.png'),
            ],
            [   
                'href' => '#order',
                'label' => 'Book Order',
                'image' => url('/images/navicon/order-icon.png'),
            ],
            [   
                'href' => '#contact',
                'label' => 'Contact',
                'image' => url('images/navicon/contact-icon.png'),
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
        return view('components.layout.sidebar');
    }
}
