<?php

namespace App\View\Components\Page;

use Illuminate\View\Component;

class Book extends Component
{
    public array $bookItems = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->bookItems = [
            [   'href' => 'https://pageturner.us/bookstore/pal-puppy-storytime-new-beginnings',
                'title' => url('/images/book-title.png'),
                'book' => url('/images/book.png'),
                'description' => "
                    “PAL” means Positive Attitudes for Life. We all have attitudes, we all have choices. The Pal Puppy series has a mission for all young children: to become more aware of choices. Many problems can be solved by using “common sense,” but common sense isn't all that common. It is something that needs to be developed, starting at a young age. It involves choices. It involves having the proper attitude.
                    
                    As an Author, I want young children to have a safe place to learn an important lesson in life: Believe in yourself, make good choices. And don't rely on your peers to make important decisions for you. This lesson become even more important as the child gets older. Pal Puppy stories can help lay the ground work for using a good, positive attitude for life.
                    
                    I believe my stories can serve parents, teachers, and other role models as a kind of reference book for explaining important topics that need a special touch to enhance understanding. “Crooked” and “Lovey Dovey” represent the “pro and con” viewpoints to be considered when PAL Puppy makes a decision. PAL Puppy always ends each story by making a responsible decision using his own “PAL Puppy good sense.” As children go through the decision-making process with him, they take the good decision-making skills as their own, to keep for a lifetime.
                    
                    My hope is that children and adults will find these stories entertaining as they explore some of the complex issues of childhood development together. Please enjoy these stories, and use them to open meaningful conversation.
                "
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
        return view('components.page.book');
    }
}
