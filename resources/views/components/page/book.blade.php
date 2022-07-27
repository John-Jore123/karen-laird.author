<section id="book">
    <div class="container mx-auto flex justify-center">
        <div class="w-3/5 lg:min-w-fit relative flex z-10 md:flex-col">
            @foreach ( $bookItems as $items )
                <x-book-layout :description="$items['description']"
                               :title="$items['title']"
                               :book="$items['book']"></x-book-layout>
            @endforeach
        </div>
    </div>
</section>