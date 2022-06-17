<nav class="bg-blue-600 border-gray-200 px-2 sm:px-4 py-2.5">
    <div x-data="{
                     dropdownOpen2: false
                    }
                    " @click.outside="dropdownOpen2 = false" class="container flex flex-wrap justify-between items-center mx-auto">

        <a href="/{{app()->getLocale()}}" class="flex items-center hidden md:block">
            <img src="/assets/images/onlyham-logo.png" class="mr-3 h-6 sm:h-9" alt="Logo OnlyHam">
        </a>

        <div class="flex md:order-2">

            @guest
            <a class="py-2 px-7 font-semibold text-white  hover:text-primary" href="{{ route('login', app()->getLocale()) }}">{{ __('Login') }}</a>
            @if (Route::has('register'))

            <a class="rounded-lg bg-blue-700 text-white py-2 px-7 font-medium hover:bg-opacity-90" href="{{ route('register', app()->getLocale()) }}">{{ __('Register') }}</a>
            @endif

            @else
            <a class="py-2 px-7 font-medium text-white hover:text-primary" href="/{{app()->getLocale()}}/home">{{__("Dashboard")}}</a>
            <a href="{{ route('logout', app()->getLocale()) }}" class="rounded-lg bg-blue-700 py-2 px-7 text-base font-medium text-white hover:bg-opacity-90" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>
            @endguest


            <div x-data="
                    {
                        dropdownOpen: false
                    }
                    " @click.outside="dropdownOpen = false" class="relative inline-block">
                <button @click="dropdownOpen = !dropdownOpen" aria-label="dropdown" class="flex items-center rounded py-3 px-5 text-base font-semibold text-white">
                    <span class="fi fi-{{app()->getLocale() === 'en' ? 'us' : app()->getLocale() }} "></span>
                </button>
                <div :class="dropdownOpen ? 'top-full opacity-100 visible' : 'top-[110%] invisible opacity-0'" class="absolute left-0 z-40 mt-2 w-full rounded border-[.5px] border-light bg-white py-5 shadow-card transition-all">
                    <a href="/en" class="block py-2 px-5 text-base font-semibold text-body-color hover:bg-blue-700 hover:bg-opacity-5 hover:text-white">
                        <span class="fi fi-us"></span>
                    </a>

                    <a href="/es" class="block py-2 px-5 text-base font-semibold text-body-color hover:bg-blue-700 hover:bg-opacity-5 hover:text-white">
                        <span class="fi fi-es"></span>
                    </a>

                    <a href="/fr" class="block py-2 px-5 text-base font-semibold text-body-color hover:bg-blue-700 hover:bg-opacity-5 hover:text-white">
                        <span class="fi fi-fr"></span>
                    </a>
                </div>
            </div>

            <button @click="dropdownOpen2 = !dropdownOpen2" type="button" aria-label="search-btn" data-collapse-toggle="mobile-menu-3" aria-controls="mobile-menu-3" aria-expanded="false" class="md:hidden text-white  rounded-lg text-sm p-2.5 mr-1">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
            </button>

            <div class="hidden relative md:block">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <form action="/{{app()->getLocale()}}/search">
                    <input type="text" id="search-navbar1" name="name" class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 " placeholder="{{__('Search')}}...">
                </form>
            </div>
            <button @click="dropdownOpen2 = !dropdownOpen2" aria-label="menu-hamburguer" data-collapse-toggle="mobile-menu-3" type="button" class="inline-flex items-center p-2 text-sm text-white rounded-lg md:hidden hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-3" aria-expanded="false">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>


        <div :class="dropdownOpen2 ? 'block' : 'hidden'" class="justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-3">
            <div class="relative mt-3 md:hidden">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <form action="/{{app()->getLocale()}}/search">
                    <input type="text" id="search-navbar" name="name" class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="{{__('Search')}}...">
                </form>
            </div>


            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="/{{app()->getLocale()}}/" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-blue-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">
                        {{__('Home')}}
                    </a>
                </li>

                @foreach($redesSociales as $red)
                <li>
                    <a href="/{{app()->getLocale() }}/{{$red->name}}" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-blue-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">
                        {{$red->name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>



    </div>
</nav>