<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="/assets/css/tailwind.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <script defer src="/assets/js/alpine.min.js"></script>
</head>

<body class="bg-gray-700 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header x-data="
                 {
                   navbarOpen: false,
                 }
                   " class="absolute left-0 top-0 z-50 w-full ">
            <div class="container">
                <div class="relative -mx-4 flex items-center justify-between bg-white rounded-lg ">
                    <div class="w-60 max-w-full px-4">
                        <a href="/{{app()->getLocale() }}/home" class="block w-full py-5">
                            <img src="/assets/images/logo/logo.svg" alt="logo" class="w-full" />
                        </a>
                    </div>
                    <div class="flex w-full items-center justify-between px-4">
                        <div>
                            <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'" id="navbarToggler" class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                                <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                                <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                                <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                            </button>
                            <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse" class="bg-white absolute right-4 top-full w-full max-w-[250px] rounded-lg  py-5 px-6 shadow transition-all lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                                <ul class="blcok lg:flex">
                                    <li>
                                        <a href="/" class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                            {{__("Home")}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/{{app()->getLocale() }}/precios" class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                            {{__("Prices")}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                            {{__("Contact Us")}}
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="hidden justify-end pr-16 sm:flex lg:pr-0">

                            @guest
                            <a class="py-3 px-7 text-base font-medium text-dark hover:text-primary" href="{{ route('login',app()->getLocale()) }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                            <a class="rounded-lg bg-primary py-3 px-7 text-base font-medium text-white hover:bg-opacity-90" href="{{ route('register',app()->getLocale()) }}">{{ __('Register') }}</a>
                            @endif
                            @else

                            <a class="py-3 px-7 text-base font-medium text-dark hover:text-primary" href="/{{app()->getLocale()}}/home">{{__("Dashboard")}}</a>

                            <a href="{{ route('logout',app()->getLocale()) }}" class="rounded-lg bg-primary py-3 px-7 text-base font-medium text-white hover:bg-opacity-90" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                            @endguest

                        </div>
                    </div>
                </div>
            </div>
        </header>


        @yield('content')
    </div>
</body>

</html>