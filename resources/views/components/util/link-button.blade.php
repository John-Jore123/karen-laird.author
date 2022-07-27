@props(['links' => ''])

<a href="{{ $links }}" target="_blank" rel="noopener noreferrer" {{ $attributes->merge(['class' => 'px-8 py-4 font-bold text-lg mx-auto rounded-full uppercase transition bg-white dark:bg-dark-600 hover:bg-gradient-to-br from-indigo-500 via-minsk-500 to-minsk-900 px-10 py-2 text-dark-600 dark:text-white hover:text-white' ]) }}>order book</a>