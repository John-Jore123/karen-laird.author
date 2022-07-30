@props([
    'icon' => '',
    'tag' => ''
])

<textarea rows="5" {{ $attributes->merge(['class' => 'peer block w-full appearance-none border-0 border-b-2 border-white bg-transparent py-2.5 px-0 text-sm text-white caret-minsk-400 resize-y focus:border-minsk-900 focus:outline-none focus:ring-0 dark:focus:border-white']) }} placeholder=" "></textarea>
<label id="{{ $tag }}" class="flex items-end space-x-4 absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-white dark:text-dark-600 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-minsk-900 dark:peer-focus:text-white">
    <i class="material-icons min-w-fit min-h-fit mr-2">{{ $icon }}</i> {{ $slot }}
</label>

{{-- @props([
    'name' => '',
    'id' => '',
    'icon' => '',
])

<textarea rows="5" name="{{ $name }}" id="{{ $id }}" {{ $attributes->merge(['class' => 'peer block w-full appearance-none border-0 border-b-2 border-white bg-transparent py-2.5 px-0 text-sm text-white caret-minsk-400 resize-y focus:border-minsk-900 focus:outline-none focus:ring-0']) }} placeholder=" "></textarea>
<label class="flex items-end space-x-4 absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-white dark:text-dark-600 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-minsk-900 peer-focus:dark:text-blue-500">
    <i class="material-icons min-w-fit min-h-fit mr-2">{{ $icon }}</i> {{ $slot }}
</label> --}}


{{-- <textarea name="message" rows="5" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" "></textarea>
<label class="flex items-end absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500"><i class="material-icons min-w-fit min-h-fit mr-2">edit</i> Your message</label> --}}