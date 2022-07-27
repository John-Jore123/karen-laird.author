<div {{ $attributes->merge(['class' => 'w-full h-auto absolute wrapper-content-float']) }}>
    <img src="{{ asset('images/floatObj-left.png') }}" alt="{{ config('app.name') }}" {{ $attributes->class([ 'w-auto h-36 absolute bottom-8 left-8 float-left imgFloat___leftObj' ]) }}>

    <img src="{{ asset('images/floatObj-right.png') }}" alt="{{ config('app.name') }}" {{ $attributes->class([ 'w-auto h-80 absolute bottom-8 right-10 float-right animate-shake imgFloat___rightObj' ]) }}>
</div>