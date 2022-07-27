<button {{ $attributes->merge(['class' => 'col-span-2 mt-5 rounded-full bg-white dark:bg-dark-600 hover:bg-gradient-to-br from-indigo-500 via-minsk-500 to-minsk-900 px-10 py-2 text-dark-600 dark:text-white hover:text-white text-xl uppercase font-semibold transition-colors']) }}>{{ $slot }}</button>

{{-- @props([
    'id' => '',
    'name' => ''
])

<button id="{{ $id }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'col-span-2 mt-5 rounded-full bg-white dark:bg-dark-600 hover:bg-gradient-to-br from-indigo-500 via-minsk-500 to-minsk-900 px-10 py-2 text-dark-600 dark:text-white hover:text-white text-xl uppercase font-semibold transition-colors']) }}>{{ $slot }}</button> --}}