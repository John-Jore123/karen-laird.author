@props([
    'title' => url(''),
    'book' => url(''),
    'link' => ''
])

<x-util.card {{ $attributes->class( 'w-auto bg-transparent shadow-none justify-evenly' ) }}>
    <img src="{{ $title }}" alt="Boook Image" {{ $attributes->class([ 'w-auto h-auto m:min-w-fit md:min-h-fit' ]) }}>
    <x-util.link-button links="{{ $link }}" {{ $attributes->class([ 'bg-white text-black dark:bg-dark-600 dark:text-white mt-0 md:mt-7 focus:bg-minsk-900 hover:bg-minsk-900 focus:text-white hover:text-white' ]) }}></x-util.link-button>
</x-util.card>
<x-util.card {{ $attributes->class( 'w-auto bg-transparent shadow-none justify-evenly' ) }}>
    <img src="{{ $book }}" alt="Boook Image" {{ $attributes->class([ 'w-auto h-auto m:min-w-fit' ]) }}>
</x-util.card>
    

