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
                                    <a href="javascript:void(0)" class="mx-auto inline-block max-w-[160px]">
                                        <img src="/assets/images/logo/logo.svg" alt="logo" />
                                    </a>
                                </div>
                                <form method="POST" action="{{ route('register',app()->getLocale()) }}">
                                    @csrf
                                    <div class="mb-6">
                                        <input type="text" placeholder="Nombre y Apellido" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" class="form-input w-full @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                        @error('name')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>

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


                                    <div class="mb-6">
                                        <input type="password" placeholder="Confirm Password" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none  @error('password') border-red-500 @enderror" name="password_confirmation" required>
                                        @error('password_confirmation')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>

                                    <p class="text-base text-[#adadad] mb-10">
                                        Al registrarte estas aceptando nuestros
                                        <a href="/{{app()->getLocale()}}/legal/terminos-y-condiciones" class="text-primary hover:underline">
                                            Terminos y Condiciones de uso
                                        </a>
                                    </p>


                                    <div class="flex flex-wrap">
                                        <button type="submit" class="flex w-full h-10 items-center justify-center text-bold text-white rounded-md bg-primary hover:bg-opacity-90">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </form>

                                <a href="/{{app()->getLocale()}}/forget" class="mb-2 mt-2 inline-block text-base text-[#adadad] hover:text-primary hover:underline">
                                    ¿Olvidaste Tu Contraseña?
                                </a>

                                <p class="text-base text-[#adadad]">
                                    ¿Ya posees cuenta?
                                    <a href="/{{app()->getLocale()}}/login" class="text-primary hover:underline">
                                        Inicia Sesión
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
@endsection