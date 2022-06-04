<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{$_SERVER['APP_CDN']}}/assets/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{$_SERVER['APP_CDN']}}/assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{$_SERVER['APP_CDN']}}/assets/icon/favicon-16x16.png">
    <link rel="manifest" href="{{$_SERVER['APP_CDN']}}/assets/icon/site.webmanifest">
    <link rel="mask-icon" href="{{$_SERVER['APP_CDN']}}/assets/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2563eb">
    <meta name="theme-color" content="#2563eb">

    <link rel="stylesheet" href="{{$_SERVER['APP_CDN']}}/assets/css/tailwind.css" />
    <link rel="stylesheet" href="{{$_SERVER['APP_CDN']}}/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="{{$_SERVER['APP_CDN']}}/assets/js/alpine.min.js"></script>
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
                        <a href="/{{app()->getLocale() }}" class="block w-full py-5">
                            <img src="/assets/images/onlyham-logo.png" alt="Logo OnlyHam" class="w-full" />
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