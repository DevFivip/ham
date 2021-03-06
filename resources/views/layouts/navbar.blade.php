<header x-data="
        {
          navbarOpen: false,
        }
      " class="absolute left-0 z-50 top-0 w-full">
    <nav class="flex justify-center">
        <div class="relative -mx-4 flex items-center justify-between rounded-lg bg-white py-3 px-6">
            <div class="w-60 max-w-full px-4">
                <a href="/{{app()->getLocale() }}/" class="block w-full py-5">
                    <img src="/assets/images/logo/logo.svg" alt="logo" class="w-full" />
                </a>
            </div>
            <div class="flex w-full items-center justify-between px-4">
                <div>
                    <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'" id="navbarToggler" class="bg-blue-700  absolute right-4  rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                        <i class="fa-solid fa-bars text-white"></i>
                    </button>
                    <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse" class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-3 px-6 shadow transition-all lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                        <ul class="blcok lg:flex">
                            @foreach($redesSociales as $red)
                            <li>
                                <a href="/{{app()->getLocale() }}/{{$red->name}}" class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    {{$red->name}}
                                </a>
                            </li>
                            @endforeach


                            @guest
                            <li class="md:hidden lg:hidden">
                                <a class="font-medium text-dark hover:text-primary" href="{{ route('login', app()->getLocale()) }}">{{ __('Login') }}</a>
                            </li>

                            @if (Route::has('register'))

                            <li class="md:hidden lg:hidden">
                                <a class="rounded-lg text-blue-700 font-medium hover:bg-opacity-90" href="{{ route('register', app()->getLocale()) }}">{{ __('Register') }}</a>
                            </li>
                            @endif

                            @else

                            <li class="md:hidden lg:hidden">
                                <a class="font-medium text-dark hover:text-primary" href="{{app()->getLocale() }}/home">Panel</a>
                            </li>

                            <li class="md:hidden lg:hidden">
                                <a href="{{ route('logout', app()->getLocale()) }}" class="rounded-lg text-base font-medium text-blue-700 hover:bg-opacity-90" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            </li>

                            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                            @endguest

                        </ul>
                    </nav>
                    <div x-data="
                    {
                        dropdownOpen: false
                    }
                    " @click.outside="dropdownOpen = false" class="relative inline-block mt-1 lg:hidden md:hidden sm:hidden">
                        <button @click="dropdownOpen = !dropdownOpen" class="flex items-center rounded py-3 px-5 text-base font-semibold text-white">
                            <span class="fi fi-{{app()->getLocale()}}"></span>
                        </button>
                        <div :class="dropdownOpen ? 'top-full opacity-100 visible' : 'top-[110%] invisible opacity-0'" class="absolute left-0 z-40 mt-2 w-full rounded border-[.5px] border-light bg-white py-5 shadow-card transition-all">
                            <a href="/us" class="block py-2 px-5 text-base font-semibold text-body-color hover:bg-blue-700 hover:bg-opacity-5 hover:text-white">
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
                </div>

                <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
                    <div x-data="
                    {
                        dropdownOpen: false
                    }
                    " @click.outside="dropdownOpen = false" class="relative inline-block text-left mt-1">
                        <button @click="dropdownOpen = !dropdownOpen" class="flex items-center rounded py-3 px-5 text-base font-semibold text-white">
                            <span class="fi fi-{{app()->getLocale()}}"></span>
                        </button>
                        <div :class="dropdownOpen ? 'top-full opacity-100 visible' : 'top-[110%] invisible opacity-0' " class="absolute left-0 z-40 mt-2 w-full rounded border-[.5px] border-light bg-white py-5 shadow-card transition-all">
                            <a href="/us" class="block py-2 px-5 text-base font-semibold text-body-color hover:bg-blue-700 hover:bg-opacity-5 hover:text-white">
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

                    @guest
                    <a class="py-3 px-7 font-medium text-dark hover:text-primary" href="{{ route('login', app()->getLocale()) }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))

                    <a class="rounded-lg bg-blue-700 text-white py-3 px-7 font-medium hover:bg-opacity-90" href="{{ route('register', app()->getLocale()) }}">{{ __('Register') }}</a>
                    @endif

                    @else
                    <a class="py-3 px-7 font-medium text-dark hover:text-primary" href="/{{app()->getLocale()}}/home">Panel</a>
                    <a href="{{ route('logout', app()->getLocale()) }}" class="rounded-lg bg-blue-700 py-3 px-7 text-base font-medium text-white hover:bg-opacity-90" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest


                </div>


            </div>
        </div>

    </nav>
</header>