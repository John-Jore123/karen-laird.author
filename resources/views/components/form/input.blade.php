@props([
    'icon' => ''
])

<input {{ $attributes->merge(['class' => 'peer block w-full appearance-none border-0 border-b-2 border-white bg-transparent py-2.5 px-0 text-sm text-white focus:border-minsk-900 focus:outline-none focus:ring-0']) }} class="peer block w-full appearance-none border-0 border-b-2 border-white bg-transparent py-2.5 px-0 text-sm text-white focus:border-minsk-900 focus:outline-none focus:ring-0" placeholder=" " />
<label class="flex items-end space-x-4 absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-white dark:text-dark-600 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-minsk-900 peer-focus:dark:text-blue-500">
    <i class="material-icons min-w-fit min-h-fit mr-2">{{ $icon }}</i> {{ $slot }}
</label>

{{-- @props([
    'name' => '',
    'id' => '',
    'icon' => ''
])

<input name="{{ $name }}" id={{ $id }} {{ $attributes->merge(['class' => 'peer block w-full appearance-none border-0 border-b-2 border-white bg-transparent py-2.5 px-0 text-sm text-white focus:border-minsk-900 focus:outline-none focus:ring-0']) }} class="peer block w-full appearance-none border-0 border-b-2 border-white bg-transparent py-2.5 px-0 text-sm text-white focus:border-minsk-900 focus:outline-none focus:ring-0" placeholder=" " />
<label class="flex items-end space-x-4 absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-white dark:text-dark-600 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-minsk-900 peer-focus:dark:text-blue-500">
    <i class="material-icons min-w-fit min-h-fit mr-2">{{ $icon }}</i> {{ $slot }}
</label> --}}



{{-- <input type="text" name="name" class="peer block w-full appearance-none border-0 border-b-2 border-white bg-transparent py-2.5 px-0 text-sm text-white focus:border-minsk-900 focus:outline-none focus:ring-0" placeholder=" " />
<label class="flex items-end space-x-4 absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-white duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-minsk-900 peer-focus:dark:text-blue-500"><i class="material-icons min-w-fit min-h-fit mr-2">person</i> Your name</label> --}}