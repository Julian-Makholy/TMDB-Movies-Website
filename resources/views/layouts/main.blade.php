<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Movie Project!</title>
     <!-- Meta SEO -->
     <meta name="title" content="QuickMoviesInfo">
     <meta name="description" content="Find movies to watch, look at their trailers, reviews and included actors!.">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <meta name="language" content="English">
     <meta name="author" content="Julian">

    <link rel="stylesheet" href="/css/main.css">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b ">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <div class='logo' style="display: block ruby;">
                        <p style="font-size: 1.6rem"> Quick Movies! </p>
                        <a href="{{ route('movies.index') }}">
                            <svg class="w-40" viewBox="0 0 80 28" xmlns="http://www.w3.org/2000/svg"><path d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm.001 6c-.001 0-.001 0 0 0h-.465l-2.667-4H20l.001 4zM15.5 15 10 18v-6l5.5 3zm-.964-6-2.667-4h2.596l2.667 4h-2.596zm-2.404 0H9.536L6.869 5h2.596l2.667 4zM4 5h.465l2.667 4H4V5z" fill="#fff"/></svg>
                        </a>
                    </div>
                </li>

                <li class="md: mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>

                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV Shows</a>
                </li>

                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>

            <div class="flex flex-col md:flex-row items-center">
                @livewire('search-dropdown')
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="https://github.com/Julian-Makholy?tab=repositories">
                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-9 h-8">
                    </a>
                </div>
            </div>

        </div>

    </nav>

    @yield('content')

    <footer class="border border-t border-gray-800 text-center">
        <div class="container mx-auto text-sm px-4 py-6 ">
            <ul class="flex justify-center">
                <li>
                    <a href="https://github.com/Julian-Makholy" >
                    <svg class="w-10" viewBox="0 0 25 25"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                    </a>
                </li>           
            </ul>
            Something Something @2022.   Powered by <a href="https://www.themoviedb.org/documentation/api" class="underline hover:text-gray-300">TMDb API</a>
        </div>
    </footer>

    @livewireScripts
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    @yield('scripts')

</body>
</html>
