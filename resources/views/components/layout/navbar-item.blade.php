{{-- @props(['image' => '']) --}}

<li>
    <a href="{{ $href }}" class="scrollto active">
        <img src="{{ $image }}" alt="icon" class="w-16 h-16">
        <span>{{ $label }}</span>
    </a>
</li>