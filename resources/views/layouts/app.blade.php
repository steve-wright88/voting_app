<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ste Wright's Voting App</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans tex-gray-400 text-sm">
    <header class="flex items-center justify-between px-16 py-4">
        <a class="h-14 w-14" href="#"><img src="{{ asset('img/logo.svg') }}" alt=""></a>
        <div class="flex items-center">
            @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-400 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-400 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif
            <a href="#" class="">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>
    <main class="px-72 mx-auto flex space-x-8 pt-8">
        <div class="basis-1/4 p-4 border-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, omnis animi porro eveniet eum officiis incidunt molestiae eaque reiciendis in modi ad. Unde esse, mollitia ullam numquam doloremque dolores magni excepturi nemo corrupti culpa magnam veritatis illo iure ex cum, sapiente sit, quos dolorem et quam quod omnis consequatur. Dicta iste a architecto consectetur fugiat, mollitia quos repudiandae, officiis perspiciatis nisi cum! Molestias error dolorem placeat. Delectus deleniti velit quaerat sapiente, blanditiis temporibus earum iste quod repellat, minima pariatur quo dolorum reiciendis odio, molestias officia accusantium provident maiores nihil voluptates odit minus rerum possimus dolorem? Necessitatibus, molestiae. Maxime, cumque! Sequi.
        </div>
        <div class="basis-3/4 px-4">
            <nav class="flex items-center justify-between text-xs ">
                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-2">
                    <li><a href="#" class="text-gray-700 border-b-4 pb-2 border-blue-500">all ideas (87)</a></li>
                    <li><a href="#" class="text-gray-400 trandition duration-150 ease-in border-b-4 pb-2 hover:border-blue-500">considering (6) </a></li>
                    <li><a href="#" class="text-gray-400 trandition duration-150 ease-in border-b-4 pb-2 hover:border-blue-500">in progress (1) </a></li>
                </ul>

                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-2">
                    <li><a href="#" class="text-gray-400 trandition duration-150 ease-in border-b-4 pb-2 hover:border-blue-500">implemented (10) </a></li>
                    <li><a href="#" class="text-gray-400 trandition duration-150 ease-in border-b-4 pb-2 hover:border-blue-500">in closed (55) </a></li>
                </ul>
            </nav>
            <div class="mt-8"> {{ $slot }}</div>
        </div>
    </main>
</body>

</html>