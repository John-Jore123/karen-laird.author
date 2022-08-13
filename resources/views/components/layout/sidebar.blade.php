<header>
    <x-layout.navbar-hamburger></x-layout.navbar-hamburger>

    <nav class="nav-menu test" id="navbar">
        <ul>
            @foreach ($navbarItems as $item)
                <x-layout.navbar-item :href="$item['href']"
                                      :image="$item['image']"
                                      :label="$item['label']"></x-layout.navbar-item>
            @endforeach
        </ul>
    </nav>   
</header>