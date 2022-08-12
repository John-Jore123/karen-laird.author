<header class="bg-white dark:bg-gray-800 fixed w-full z-50">
    <nav class="w-full h-28 flex items-center px-8 py-0 md:py-8 sm:px-4 sm:!py-4 md:h-auto">
        <div class="flex flex-1 justify-between items-center md:block md:justify-start md:space-x-10">

            <div class="absolute right-9 -mx-2 -my-2 order-last hidden md:block md:self-start">
                <x-layout.navbar-hamburger></x-layout.navbar-hamburger>
            </div>

            <div class="flex flex-1 items-center !m-0 md:block">
                <div class="flex-shrink-0 flex items-center">
                    <img class="hidden sm:block md:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                    <img class="block sm:hidden md:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
                </div>
                <div class="ml-auto block md:hidden md:ml-0 md:mt-10" id="mobile-menu">
                    <ul class="flex md:block md:space-x-0">
                        @foreach ($navigationItems as $navItem)
                            <x-layout.navbar-item :href="$navItem['href']">{{ $navItem['label'] }}</x-layout.navbar-item>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- <div class="bg-red-500 top-[250px] relative w-full rounded-2xl hidden" id="mobile-menu">
            <ul class="block py-8 px-4 w-full">
                @foreach ($navigationItems as $navItem)
                    <x-layout.navbar-item :href="$navItem['href']">{{ $navItem['label'] }}</x-layout.navbar-item>
                @endforeach
            </ul>
        </div> --}}
        
    </nav>
</header>