<header x-data="
        {
          navbarOpen: false,
        }
      " class="absolute left-0 z-50 top-0 w-full">
    <div class="container" style="margin-top: 3px;">
        <div class="relative -mx-4 flex items-center justify-between rounded-lg bg-white py-3 px-6">
            <div class="w-60 max-w-full px-4">
                <a href="/" class="block w-full py-5">
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
                    <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse" class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-3 px-6 shadow transition-all lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                        <ul class="blcok lg:flex">
                            @foreach($redesSociales as $red)
                            <li>
                                <a href="/{{$red->name}}" class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    {{$red->name}}
                                </a>
                            </li>

                            @endforeach

                            <!-- <li>
                                <a href="javascript:void(0)" class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    Payment
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    Features
                                </a>
                            </li> -->
                        </ul>
                    </nav>
                </div>

                <div class="hidden justify-end pr-16 sm:flex lg:pr-0">

                    @guest
                    <a class="py-3 px-7 text-base font-medium text-dark hover:text-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="rounded-lg bg-primary py-3 px-7 text-base font-medium text-white hover:bg-opacity-90" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else

                    <a class="py-3 px-7 text-base font-medium text-dark hover:text-primary" href="/home">Mi Panel</a>

                    <a href="{{ route('logout') }}" class="rounded-lg bg-primary py-3 px-7 text-base font-medium text-white hover:bg-opacity-90" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest

                </div>
                <!-- <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
                    <a href="javascript:void(0)" class="py-3 px-7 text-base font-medium text-dark hover:text-primary">
                        Login
                    </a>
                    <a href="javascript:void(0)" class="rounded-lg bg-primary py-3 px-7 text-base font-medium text-white hover:bg-opacity-90">
                        Sign Up
                    </a>
                </div> -->
            </div>
        </div>
    </div>
</header>