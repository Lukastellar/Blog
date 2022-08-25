<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Ubuntu Mono", 'Nunito', sans-serif;
            }

            nav > a.current::before {
                content: '--> ';
                position: absolute;
                left: -2px;
                font-family: Ubuntu, monospace;
            }

            :root{
                --main-black: #151515;
            }

            .animate-line {
                margin: 10px auto;
                background: white;
                width: 0;
                height: 2px;
                transition: width 1s;
            }

            .animate-text {
                opacity: 0;
                transition: 0.6s;
            }

        </style>
    </head>
    <body class="antialiased" style="color: white;">
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0" style="background: #151515">
                <nav class="flex flex-col justify-center items-center fixed top-50 right-0 px-6 py-4 h-full">
                    <a href="{{ url('/home') }}" class="current uppercase text-md text-gray">
                        Home
                    </a>
                    <div style="height: 2px; width: 75%; background-color: rgba(0,0,0,0.2);"></div>
                    <a href="{{ url('/home') }}" class="uppercase text-md text-gray">
                        Blog
                    </a>
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-white dark:text-white underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ 'blog' }}" class="text-sm text-white dark:text-white underline">Log in</a>--}}
{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
                </nav>

            <div class="max-w-6xl max-h-xl mx-auto sm:px-6 lg:px-8">
                <div class="flex flex-col">
                    <h1 id="elem-1" class="animate-text">
                        <span class="text-2xl underline" style="color: yellow;">Hello</span>, visitor.
                    </h1>
                    <div id="elem-2" class="animate-line"></div>
                    <p id="elem-3" class="animate-text">Glad to see you here!</p>
                </div>
{{--                <div class="mt-8 drop-shadow-md bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg">--}}
{{--                    <div class="grid grid-cols-1 md:grid-cols-2">--}}
{{--                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>--}}
{{--                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>--}}
{{--                            </div>--}}

{{--                            <div class="ml-12">--}}
{{--                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
{{--                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
            <footer class="absolute w-25 bg-white right-1/2"
                    style="width: 10%; height: 20px; bottom: 15px; transform: translateX(50%)">
                <div class="text-center underline text-sm text-gray-500 sm:text-left ">
                    <span style="font-size: 16px;">
                        Made with
                        <svg fill="red" stroke="red" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5 inline-block text-gray-400">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </span>
                </div>
            </footer>
    </body>
    <script>

        window.addEventListener('load', function () {
            let text_1 = document.querySelector('#elem-1')
            let text_2 = document.querySelector('#elem-2')
            let text_3 = document.querySelector('#elem-3')

            text_1.style.opacity = '1';
            text_2.style.width = '100%';
            // setTimeout( () => {
            //     setTimeout( () => {
            //         text_3.style.opacity = '1';
            //     }, 200);
            //
            // }, 1000);

        })
    </script>
</html>
