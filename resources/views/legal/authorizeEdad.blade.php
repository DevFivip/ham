@extends('layouts.app')

@section('content')

<main class="sm:container sm:mx-auto sm:mt-10">
    <section class="relative z-10 bg-primary py-[120px]">
        <div class="container">
            <div class="-mx-4 flex">
                <div class="w-full px-4">
                    <div class="mx-auto max-w-[400px] text-center">
                        <h2 class="mb-2 text-[50px] font-bold leading-none text-white sm:text-[80px] md:text-[100px]">
                            Atención
                        </h2>
                        <h4 class="mb-3 text-[22px] font-semibold leading-tight text-white">
                            Contenido Solo para Adultos
                        </h4>
                        <p class="mb-8 text-lg text-white">
                            Estás a punto de entrar en un sitio web que contiene material explícito (pornografía).
                            Sólo debes acceder a este sitio web si tienes al menos 18 años o la edad legal para ver dicho material en tu jurisdicción local,
                            lo que sea mayor. Además, declaras y garantizas que no permitirás que ningún menor acceda a este sitio o a sus servicios.
                        </p>

                        <button id="aceptar-adulto" class="inline-block rounded-lg border border-white px-8 py-3 text-center text-base font-semibold text-white transition hover:bg-white hover:text-primary">
                            Soy mayor de 18 años
                        </button>

                        <a href="/" class="inline-block rounded-lg border border-white px-8 py-3 text-center text-base font-semibold text-white transition hover:bg-white hover:text-primary">
                            Regresar
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute top-0 left-0 -z-10 flex h-full w-full items-center justify-between space-x-5 md:space-x-8 lg:space-x-14">
            <div class="h-full w-1/3 bg-gradient-to-t from-[#FFFFFF14] to-[#C4C4C400]"></div>
            <div class="flex h-full w-1/3">
                <div class="h-full w-1/2 bg-gradient-to-b from-[#FFFFFF14] to-[#C4C4C400]"></div>
                <div class="h-full w-1/2 bg-gradient-to-t from-[#FFFFFF14] to-[#C4C4C400]"></div>
            </div>
            <div class="h-full w-1/3 bg-gradient-to-b from-[#FFFFFF14] to-[#C4C4C400]"></div>
        </div>
    </section>





    <button class="rounded-lg bg-primary py-3 px-7 text-base font-medium text-white hover:bg-opacity-90">
        acepto soy mayor de edad
    </button>

    @include("layouts.footer")


</main>
@endsection