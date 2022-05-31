@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="bg-[#F4F7FF] py-20 lg:py-[120px]">
                <div class="container">
                    <div class="-mx-4 flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white py-16 px-10 text-center sm:px-12 md:px-[60px]">
                                <div class="mb-10 text-center md:mb-16">
                                    <a href="javascript:void(0)" class="mx-auto inline-block max-w-[260px]">
                                        <img src="/assets/images/1-3.png" alt="logo" />
                                    </a>
                                </div>
                                <form method="POST" action="{{ route('login',app()->getLocale() ) }}">
                                    @csrf
                                    <div class="mb-6">
                                        <input type="text" placeholder="Email" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                        @error('email')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    <div class="mb-6">
                                        <input type="password" placeholder="Password" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none  @error('password') border-red-500 @enderror" name="password" required>
                                        @error('password')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    <div class="flex items-center">
                                        <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                            <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="ml-2">{{ __('Remember Me') }}</span>
                                        </label>
                                    </div>
                                    <d iv class="mb-10 mt-10">
                                        <input type="submit" value="Sign In" class="bordder-primary w-full cursor-pointer rounded-md border bg-primary py-3 px-5 text-base text-white transition hover:bg-opacity-90" />

                                        <a href="/{{app()->getLocale()}}/forget" class="mb-2 mt-2 inline-block text-base text-[#adadad] hover:text-primary hover:underline">
                                            {{__("Forgot Your Password?")}}
                                        </a>
                                        <p class="text-base text-[#adadad]">
                                            {{__("You don't have an account yet?")}}
                                            <a href="/{{app()->getLocale()}}/register" class="text-primary hover:underline">
                                                {{__("Register")}}
                                            </a>
                                        </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</main>
@endsection