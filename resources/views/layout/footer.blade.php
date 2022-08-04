<footer class="bg-gradient-to-r from-indigo-500 via-purple-500 to-indigo-500 dark:from-dark-600 dark:to-dark-600 w-full h-14 fixed z-50 bottom-0 flex items-center md:relative md:h-auto md:p-8">
    <div class="container mx-auto">
        <div class="flex flex-wrap items-center justify-center">
            <x-util.float-object></x-util.float-object>
            <img class="w-7 h-7 mx-0 sm:mx-auto" src="{{ asset('images/favicon.png') }}" alt="{{ config('app.name') }}">
            <p class="text-sm text-white ml-2 text-center inline-block sm:ml-0 sm:mt-2 md:text-sm sm:text-xs">Copyright &copy;<?php echo date('Y'); ?> Pageturner, Press and Media. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<x-util.dark-mode></x-util.dark-mode>
<x-util.back-button></x-util.back-button>
<div id="preloader" class="w-screen h-screen bg-white absolute z-50"></div>