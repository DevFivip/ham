<!DOCTYPE html>
<html lang="es">

<head>
    @include("layouts.header")
</head>

<body>
    <!-- ====== Navbar Section Start -->
    @include("layouts.navbar")
    <!-- ====== Navbar Section End -->

    <!-- ====== breadcrumbs Section Start -->

    <section class="pt-20" style="padding-top: 110px !important">
        <div class="container mx-auto px-6">
            <div class="mb-8 w-full">
                <div class="rounded-lg border border-light bg-white py-4 px-4 shadow-card sm:px-6 md:px-8 md:py-5">
                    <ul class="flex items-center">
                        @for ($i = 0; $i < count($breadcrumbs); $i++) <li class="flex items-center">
                            <a href="/{{app()->getLocale() }}/{{ $breadcrumbs[$i]['link'] }}" class="text-base font-semibold text-black hover:text-primary">
                                {{ $breadcrumbs[$i]["name"] }}
                            </a>

                            @if(isset($breadcrumbs[$i+1]))
                            <span class="px-3">
                                <svg width="18" height="7" viewBox="0 0 18 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5704 2.58734L14.8227 0.510459C14.6708 0.333165 14.3922 0.307837 14.1896 0.459804C14.0123 0.61177 13.9869 0.890376 14.1389 1.093L15.7852 3.04324H1.75361C1.50033 3.04324 1.29771 3.24586 1.29771 3.49914C1.29771 3.75241 1.50033 3.95504 1.75361 3.95504H15.7852L14.1389 5.90528C13.9869 6.08257 14.0123 6.36118 14.1896 6.53847C14.2655 6.61445 14.3668 6.63978 14.4682 6.63978C14.5948 6.63978 14.7214 6.58913 14.7974 6.48782L16.545 4.41094C17.0009 3.85373 17.0009 3.09389 16.5704 2.58734Z" fill="#637381" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1896 0.459804C14.3922 0.307837 14.6708 0.333165 14.8227 0.510459L16.5704 2.58734C17.0009 3.09389 17.0009 3.85373 16.545 4.41094L14.7974 6.48782C14.7214 6.58913 14.5948 6.63978 14.4682 6.63978C14.3668 6.63978 14.2655 6.61445 14.1896 6.53847C14.0123 6.36118 13.9869 6.08257 14.1389 5.90528L15.7852 3.95504H1.75361C1.50033 3.95504 1.29771 3.75241 1.29771 3.49914C1.29771 3.24586 1.50033 3.04324 1.75361 3.04324H15.7852L14.1389 1.093C13.9869 0.890376 14.0123 0.61177 14.1896 0.459804ZM15.0097 2.68302H1.75362C1.3014 2.68302 0.9375 3.04692 0.9375 3.49914C0.9375 3.95136 1.3014 4.31525 1.75362 4.31525H15.0097L13.8654 5.67085C13.8651 5.67123 13.8648 5.67161 13.8644 5.67199C13.5725 6.01385 13.646 6.50432 13.9348 6.79318C14.1022 6.96055 14.3113 7 14.4682 7C14.6795 7 14.9203 6.91713 15.0784 6.71335L16.8207 4.64286L16.8238 4.63904C17.382 3.95682 17.3958 3.00293 16.8455 2.35478C16.8453 2.35453 16.845 2.35429 16.8448 2.35404L15.0984 0.278534L15.0962 0.276033C14.8097 -0.0583053 14.3139 -0.0837548 13.9734 0.17163L13.964 0.17867L13.9551 0.186306C13.6208 0.472882 13.5953 0.968616 13.8507 1.30913L13.857 1.31743L15.0097 2.68302Z" fill="#637381" />
                                </svg>
                            </span>
                            @endif
                            </li>
                            @endfor
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== breadcrumbs Section End -->

    <!-- ====== Title Section End -->
    <section style="padding-bottom: 10px">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap items-center justify-between rounded-lg bg-blue-700 py-8 px-6 xs:px-10 md:px-8 lg:px-10">
                <div class="w-full md:w-7/12 lg:w-2/3">
                    <div class="mb-6 items-center sm:flex md:mb-0">
                        <div class="mr-6 mb-3 sm:mb-0">
                            @if(isset($socialMedia))
                            <i class="{{$socialMedia->icon}} text-white fa-2xl"></i>
                            @else
                            <i class="fa-solid fa-magnifying-glass text-white fa-2xl"></i>
                            @endif
                        </div>
                        <div>
                            @if(isset($socialMedia))
                            <h4 class="mb-1 text-xl font-bold text-white xs:text-2xl md:text-xl lg:text-2xl">
                                {{$socialMedia->name}}
                            </h4>
                            <p class="text-base font-medium text-white">
                                {{$socialMedia->description}}
                            </p>
                            @elseif(isset($title))
                            <h4 class="mb-1 text-xl font-bold text-white xs:text-2xl md:text-xl lg:text-2xl">
                                {{ $title["name"] }}
                            </h4>
                            <p class="text-base font-medium text-white">
                                {{ $title["description"] }}
                            </p>
                            @else
                            <h4 class="mb-1 text-xl font-bold text-white xs:text-2xl md:text-xl lg:text-2xl">
                                Buscador
                            </h4>
                            <p class="text-base font-medium text-white">
                                Encuentra los mejores grupos
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== Title Section End -->

    <!-- ====== Filter Section End -->


    <!-- ======Modal Start -->

    <section x-data="{modalOpen: false}">
        <div class="container mx-auto px-4">
            <button @click="modalOpen = true" class="rounded-full bg-blue-700 py-3 px-6 text-base font-medium text-white" style="margin-bottom: 10px">
                Filtros
            </button>
        </div>
        <div style="display: none" x-show="modalOpen" x-transition class="fixed top-0 left-0 flex h-full min-h-screen w-full items-center justify-center bg-black bg-opacity-90 px-4 py-5 z-50">
            <div @click.outside="modalOpen = false" class="w-full max-w-[570px] rounded-[20px] bg-white py-12 px-8 text-center md:py-[60px] md:px-[70px]">
                <h3 class="pb-2 text-xl font-bold text-dark sm:text-2xl">
                    Busca Grupo de tu Preferencia
                </h3>
                <span class="mx-auto mb-6 inline-block h-1 w-[90px] rounded bg-primary"></span>
                <form action="/{{app()->getLocale() }}/search" method="GET">
                    <div class="w-full">
                        <div class="relative mx-auto">
                            <div class="mb-6">
                                <input type="text" name="name" placeholder="Buscar" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" />
                            </div>
                            <div class="mb-6">
                                <div class="relative">
                                    <select name="social_id" id="social_id" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                                        <option value="">
                                            ---Plataforma---
                                        </option>
                                        @foreach($redesSociales as $red)

                                        <option value="{{$red->id}}">
                                            {{$red->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <span class="absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                                    </span>
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="relative">
                                    <select name="categoria_id" id="categoria" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                                        <option value="">
                                            ---Categoria---
                                        </option>
                                        @foreach($categorias as $categoria)
                                        <option value="{{$categoria->id}}">
                                            {{$categoria->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <span class="absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                                    </span>
                                </div>
                            </div>

                            <div class="mb-6">
                                <div class="relative">
                                    <select name="subcategoria_id" id="subcategoria" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                                        <option value="">
                                            ---Seleccione Categoria---
                                        </option>
                                    </select>
                                    <span class="absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-1/2 px-3">
                            <a @click="modalOpen = false" class="block w-full rounded-lg border border-[#E9EDF9] p-3 text-center text-base font-medium text-dark transition hover:border-red-600 hover:bg-red-600 hover:text-white">
                                Cancel
                            </a>
                        </div>
                        <div class="w-1/2 px-3">
                            <button class="block w-full rounded-lg border border-primary bg-primary p-3 text-center text-base font-medium text-white transition hover:bg-opacity-90">
                                Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- ======Modal ENd -->
    <!-- ====== Filter Section End -->

    <!-- ======Category Tabs Start -->
    @if(isset($socialMedia)) @if(!$socialMedia && !$search)
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="mb-11 flex w-full rounded-lg border-l-[6px] border-[#F87171] bg-[#F87171] bg-opacity-[15%] px-7 py-8 shadow-md md:p-9">
                <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#F87171]">
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.4917 7.65579L11.106 12.2645C11.2545 12.4128 11.4715 12.5 11.6738 12.5C11.8762 12.5 12.0931 12.4128 12.2416 12.2645C12.5621 11.9445 12.5623 11.4317 12.2423 11.1114C12.2422 11.1113 12.2422 11.1113 12.2422 11.1113C12.242 11.1111 12.2418 11.1109 12.2416 11.1107L7.64539 6.50351L12.2589 1.91221L12.2595 1.91158C12.5802 1.59132 12.5802 1.07805 12.2595 0.757793C11.9393 0.437994 11.4268 0.437869 11.1064 0.757418C11.1063 0.757543 11.1062 0.757668 11.106 0.757793L6.49234 5.34931L1.89459 0.740581L1.89396 0.739942C1.57364 0.420019 1.0608 0.420019 0.740487 0.739944C0.42005 1.05999 0.419837 1.57279 0.73985 1.89309L6.4917 7.65579ZM6.4917 7.65579L1.89459 12.2639L1.89395 12.2645C1.74546 12.4128 1.52854 12.5 1.32616 12.5C1.12377 12.5 0.906853 12.4128 0.758361 12.2645L1.1117 11.9108L0.758358 12.2645C0.437984 11.9445 0.437708 11.4319 0.757539 11.1116C0.757812 11.1113 0.758086 11.111 0.75836 11.1107L5.33864 6.50287L0.740487 1.89373L6.4917 7.65579Z" fill="#ffffff" stroke="#ffffff" />
                    </svg>
                </div>
                <div class="w-full">
                    <h5 class="mb-3 text-base font-semibold text-[#B45454]">
                        404 Not Fund
                    </h5>
                    <ul class="list-inside list-disc">
                        <li class="text-base leading-relaxed text-[#CD5D5D]">
                            La web que estas buscando posiblemente haya sido
                            movida
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endif

    @if(!!count($mejores->items()))
    <section>
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
                @foreach($mejores as $key => $groupx)
                <div class="relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center {{$key % rand(1,2) == 0? '': 'border-solid border-4 border-yellow-500'}} rounded-lg" style="background-image:url('{{ ( !!$groupx->imagen ? '/thumbnail/'. $groupx->imagen : '/storage/placeholder/placeholder-avatar.jpg') }}');">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-blue-500"></div>
                    <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                        <a href="#" class="text-xs bg-blue-200 text-white p-3 rounded-lg uppercase hover:bg-blueGray-700 hover:text-indigo-600 transition ease-in-out duration-500">
                            @if($groupx->social->slug === "onlyfans")
                            <i class="onlyfans2 text-white fa-2xl"></i>
                            @else
                            <i class="{{$groupx->social->icon}} text-white" style="font-size:50px;"></i>
                            @endif
                        </a>
                        @if(!!$groupx->precio_membresia)
                        <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                            <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                            <span class="">{{$groupx->precio_membresia}}</span>
                        </div>
                        @else
                        <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                            <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                            <span class="">Gratis</span>
                        </div>
                        @endif
                    </div>

                    <main class="p-5 z-10">
                        <a href="/{{app()->getLocale() }}/{{$mejores[$key]->social->name}}/{{$mejores[$key]->type->name}}/categoria/{{$mejores[$key]->categoria->slug}}/{{$mejores[$key]->subcategoria->slug}}/{{$mejores[$key]->slug}}" class="text-white">{{ !!$groupx->username ? '@'.$groupx->username : '' }}</a>
                        <p>
                            <a href="/{{app()->getLocale() }}/{{$mejores[$key]->social->name}}/{{$mejores[$key]->type->name}}/categoria/{{$mejores[$key]->categoria->slug}}/{{$mejores[$key]->subcategoria->slug}}/{{$mejores[$key]->slug}}" class="font-extrabold text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{$groupx->name}}
                            </a>
                        </p>
                    </main>
                </div>

                @endforeach
            </div>

            <br />
            {{ $mejores->links('vendor.pagination.tailwind') }}
        </div>
    </section>
    @else
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="mb-11 flex w-full rounded-lg border-l-[6px] border-[#F87171] bg-[#F87171] bg-opacity-[15%] px-7 py-8 shadow-md md:p-9">
                <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#F87171]">
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.4917 7.65579L11.106 12.2645C11.2545 12.4128 11.4715 12.5 11.6738 12.5C11.8762 12.5 12.0931 12.4128 12.2416 12.2645C12.5621 11.9445 12.5623 11.4317 12.2423 11.1114C12.2422 11.1113 12.2422 11.1113 12.2422 11.1113C12.242 11.1111 12.2418 11.1109 12.2416 11.1107L7.64539 6.50351L12.2589 1.91221L12.2595 1.91158C12.5802 1.59132 12.5802 1.07805 12.2595 0.757793C11.9393 0.437994 11.4268 0.437869 11.1064 0.757418C11.1063 0.757543 11.1062 0.757668 11.106 0.757793L6.49234 5.34931L1.89459 0.740581L1.89396 0.739942C1.57364 0.420019 1.0608 0.420019 0.740487 0.739944C0.42005 1.05999 0.419837 1.57279 0.73985 1.89309L6.4917 7.65579ZM6.4917 7.65579L1.89459 12.2639L1.89395 12.2645C1.74546 12.4128 1.52854 12.5 1.32616 12.5C1.12377 12.5 0.906853 12.4128 0.758361 12.2645L1.1117 11.9108L0.758358 12.2645C0.437984 11.9445 0.437708 11.4319 0.757539 11.1116C0.757812 11.1113 0.758086 11.111 0.75836 11.1107L5.33864 6.50287L0.740487 1.89373L6.4917 7.65579Z" fill="#ffffff" stroke="#ffffff" />
                    </svg>
                </div>
                <div class="w-full">
                    <h5 class="mb-3 text-base font-semibold text-[#B45454]">
                        Grupos no encontrados
                    </h5>
                    <ul class="list-inside list-disc">
                        <li class="text-base leading-relaxed text-[#CD5D5D]">
                            :'( no tenemos un grupo con estas
                            caracteristicas, por favor revisa que estes
                            buscando adecuadamente. Hecha un vistaso a los
                            grupos de @foreach($redesSociales as $red)
                            <a href="/{{app()->getLocale() }}/{{$red->name}}">{{$red->name}}</a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- ======About Us ENd -->
    @include("layouts.footer")
</body>

</html>

<!-- @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif -->