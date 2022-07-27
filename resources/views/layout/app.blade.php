<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Karen Laird was born and raised in Woodburn, Oregon and spent much of her adult life working in the same community. She took her first “job” looking after small children at age 12 and started working at a nursery/preschool at age 15 though a high school vocational education class. She has been working with children ever since. After finishing high school in 1975, Karen went on to college and earned a degree in Early Childhood Education. She worked as a teacher at several preschools, and then started her own daycare/preschool in 1979.  Since that time, she developed her own preschool programs, including  “Live and Learn Playschool,” which was designed to stimulate the child's creativity and curiosity about the world around them. Story time was a part of each day.  Karen used stories to illustrate ides and values, and eventually began writing her own stories dealing with issues of small children when there were no books available touching on specific ideal. Karen took up clowning in 1993, and developed a character to help tell her stories.  This took Karen's to a larger audience, as she performed at parties, restaurants, daycares, schools, and parades. And put on a storytime at the Woodburn Community Center on a regular monthly basic.When the family relocated in 1996, Karen reluctantly gave up clowning, and began devoting more time to her books, along with a new batch of characters that help her tell her stories. The result is this series of books written in simple, targeted at young children who are just beginning to develop their values. This book is dedicated in loving memory of Misty, our pet, companion, protector and confidant for fifteen years.  and to all the children that I hope will find inspiration from these works, as well as the many children from my teaching career who have inspired them, and to my own three sons.">
    <meta name="keywords" content="pageturner, pageturner.us, pageturner press and media, press, press and media, media, book, author, testimonials">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/hamburgers.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
<body class="bg-minsk-500 dark:bg-minsk-900">
    {{-- overflow-hidden md:overflow-auto --}}

    <x-layout.sidebar></x-layout.sidebar>
        <main class="w-full h-full max-h-full">
            {{-- <video class="video-background fixed top-0 right-0 bottom-0 left-0 w-full h-full object-cover" loop muted autoplay>
                <source src="{{ asset('images/mp4.mp4') }}" type="video/mp4">
            </video>  --}}
            {{ $slot }}
        </main>
    <x-layout.footer></x-layout.footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/collapse.js') }}"></script>
    <script src="{{ asset('js/ripple.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
</body>
</html>