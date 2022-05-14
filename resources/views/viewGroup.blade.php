<!DOCTYPE html>
<html lang="en">
<!-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"> -->
@include("layouts.header")

<body class="bg-gray-100">

    <div class="">
        @include("layouts.navbar")
    </div>


    <section class="relative block -z-10  md:h-72">
        @if(!!$group["banner"])
        <img style="min-height:300px;" id="preview-banner" src="{{ url('storage/') }}/img/{{ $group['banner'] }}" alt="imagen" />
        <!-- <span id="blackOverlay" class="w-full h-full absolute opacity-80 bg-primary"></span> -->
        @else
        <img style="min-height:300px;" id="preview-banner" src="{{ url('storage/') }}/placeholder/background.png" alt="imagen" />
        @endif
    </section>


    <section class="py-16 bg-blueGray-200 z-100 mt-0 sm:mt-44">
        <div class="container mx-auto">
            <div class="flex flex-col min-w-0 break-words bg-white md:w-4/5 sm:w-full mx-auto mb-6 shadow-xl rounded-lg  space pt-10">
                <section class="pt-10 lg:pt-[20px] lg:pb-[20px]">
                    <div class="relative flex justify-center">
                        <div class="md:absolute sm:relative left-0 right-0 -bottom-32 rounded-lg shadow-md mx-auto w-11/12 sm:w-11/12 pb-16  md:w-4/6 xl:pb-10 bg-white">
                            <div class="mt-2  bg-blueGray-100  snap mx-auto  h-auto w-full max-w-[300px] overflow-hidden transition-all xs:max-w-[368px] sm:max-w-[508px] md:max-w-[630px] lg:max-w-[738px] 2xl:max-w-[850px]" x-ref="carousel">
                                <div class="grid md:grid-cols-2 sm:grid-cols-12 p-5">
                                     
                                        <div class="relative mb-12  max-w-[310px] md:mr-12 md:mb-0 md:max-w-[250px] lg:mr-14 lg:max-w-[280px] 2xl:mr-16">
                                            <img src="{{ (!!$group['imagen'] ? '/storage/img/'. $group['imagen'] : '/storage/placeholder/placeholder-avatar.jpg') }}" alt="{{ $group['name'] }}" class="w-full rounded-xl" style="max-width:350px;" />
                                            <span class="absolute -bottom-6 -right-6 z-[-1]">
                                                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 32C3 15.9837 15.9837 3 32 3C48.0163 2.99999 61 15.9837 61 32C61 48.0163 48.0163 61 32 61C15.9837 61 3 48.0163 3 32Z" stroke="#13C296" stroke-width="6" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="p-5">
                                    
                                          <h3 class="font-semibold text-dark text-3xl">{{ $group->name }}</h3>

                                            <p class="box-content">{{strip_tags($group->description)}}</p> 
                                                @if(isset($group->username))
                                                <h4 class="mb-5 text-xl font-semibold text-dark">
                                                    {{ $group->username }}
                                                </h4>
                                                @endif
                                                <p class="mb-5 text-base text-body-color">
                                                    {{ $group->type->name }}, {{ $group->categoria->name }},
                                                    {{ $group->subcategoria->name }}
                                                </p>
                                                <p class="mb-5 text-base text-body-color">
                                                    <span> <i class="fa-solid fa-eye"></i> <span id="count_views">0</span> </span>
                                                    <span> <i class="fa-solid fa-arrow-right-to-bracket"></i> <span id="count_click">0</span> </span>
                                                    <span> <i class="f" id=""></i> <span id="count_members">0</span> </span>

                                                </p>
                                    </div>
                                </div> 
                            <!-- <div class="flex mx-auto h-full min-w-[300px] xs:min-w-[368px] sm:min-w-[508px] sm:p-6 md:min-w-[630px] lg:min-w-[738px] 2xl:min-w-[850px]">
                                 
                                        <div class="relative mb-12 w-full max-w-[310px] md:mr-12 md:mb-0 md:max-w-[250px] lg:mr-14 lg:max-w-[280px] 2xl:mr-16">
                                            <img src="{{ (!!$group['imagen'] ? '/storage/img/'. $group['imagen'] : '/storage/placeholder/placeholder-avatar.jpg') }}" alt="{{ $group['name'] }}" class="w-full rounded-xl" style="max-width:350px;" />
                                            <span class="absolute -bottom-6 -right-6 z-[-1]">
                                                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 32C3 15.9837 15.9837 3 32 3C48.0163 2.99999 61 15.9837 61 32C61 48.0163 48.0163 61 32 61C15.9837 61 3 48.0163 3 32Z" stroke="#13C296" stroke-width="6" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="w-full p-10 box-content border-4">
                                    
                                                    <h3 class="font-semibold text-dark text-3xl">{{ $group->name }}</h3>

                                            <p class="box-content">{{strip_tags($group->description)}}</p> 
                                                @if(isset($group->username))
                                                <h4 class="mb-5 text-xl font-semibold text-dark">
                                                    {{ $group->username }}
                                                </h4>
                                                @endif
                                                <p class="mb-5 text-base text-body-color">
                                                    {{ $group->type->name }}, {{ $group->categoria->name }},
                                                    {{ $group->subcategoria->name }}
                                                </p>
                                                <p class="mb-5 text-base text-body-color">
                                                    <span> <i class="fa-solid fa-eye"></i> <span id="count_views">0</span> </span>
                                                    <span> <i class="fa-solid fa-arrow-right-to-bracket"></i> <span id="count_click">0</span> </span>
                                                    <span> <i class="f" id=""></i> <span id="count_members">0</span> </span>

                                                </p>
                                        </div>
                                </div> -->
                            </div>
                            <div class="absolute left-0 right-0 -bottom-5 flex items-center justify-center">
                                <!-- <button class="mx-1 flex h-12 w-12 items-center justify-center rounded-full bg-white text-primary shadow-input transition-all hover:bg-primary hover:text-white" @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length); activeSlide += 1">
                                            <svg width="15" height="13" viewBox="0 0 15 13" class="fill-current">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.75736 11.8033L14.5303 7.03037C14.8232 6.73748 14.8232 6.2626 14.5303 5.96971L9.75736 1.19674C9.46447 0.903845 8.98959 0.903845 8.6967 1.19674C8.40381 1.48963 8.40381 1.96451 8.6967 2.2574L12.1893 5.75004H1C0.585786 5.75004 0.25 6.08583 0.25 6.50004C0.25 6.91425 0.585786 7.25004 1 7.25004H12.1893L8.6967 10.7427C8.40381 11.0356 8.40381 11.5104 8.6967 11.8033C8.98959 12.0962 9.46447 12.0962 9.75736 11.8033Z" />
                                            </svg>
                                        </button> -->

                                <button id="ingresar" class="inline-flex items-center justify-center rounded-full bg-secondary py-4 px-10 text-center text-base font-normal text-white bg-blue-700 hover:bg-opacity-90 lg:px-8 xl:px-10">
                                    <i class="fa-solid fa-unlock-keyhole"></i> &nbsp; Ingresar
                                </button>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="px-6 pt-40">
                    <div class="-mx-4 flex flex-wrap items-center justify-between">
                        <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                            <div class="mt-10 lg:mt-0">
                                <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                    Cuantos suscriptores tiene {{ $group->name }}?
                                </h2>

                                @if($group->cant_suscriptores === 0)

                                <p class="mb-8 text-base text-body-color">
                                    Vaya! No sabemos el número de fans que tiene
                                    {{ $group->name }} Esto significa
                                    que ha configurado la cuenta para no compartir el número total,
                                    pero para saber si es una buena cuenta puedes fijarte en cuantos
                                    posts y de likes tiene. Podrías ser de las mejores y tú sin saberlo!
                                </p>

                                @elseif($group->cant_suscriptores > 1)
                                <p class="mb-8 text-base text-body-color">
                                    {{ $group->name }} es una de las cuentas MÁS GRANDES que hay.
                                    Te puedes imaginar tener 48483 suscriptores?
                                    Es increíble! Esto quiere decir que tienes que suscribirte inmediatamente
                                    a esta cuenta si quieres seguir a una de las mejores Creadoras de Contenido!
                                </p>
                                @endif
                            </div>

                            <div class="mt-10 lg:mt-0">
                                <div class="w-full ">
                                    <div class="mt-10 lg:mt-0">
                                        <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                            Cuales son las Categorías que mejor describen a {{ $group->name }}?
                                        </h2>

                                        <p class="mb-8 text-base text-body-color">
                                            Las categorías que mejor describen esta cuenta de {{ $group->social->name }} son
                                            {{ $group->categoria->name }}, {{ $group->subcategoria->name }} .
                                            Puedes ver perfiles similares en el apartado de <a href="/categoria/{{ $group->categoria->slug }}" class="text-primary">Categorias</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="w-full px-4 lg:w-6/12">
                            <div class="-mx-3 flex items-center sm:-mx-4">
                                <div class="w-full px-3 sm:px-4 xl:w-1/2">
                                    <div class="py-3 sm:py-4">
                                        <a href="/{{ $mejores[0]->social->name }}/{{ $mejores[0]->type->name }}/categoria/{{ $mejores[0]->categoria->slug }}/{{ $mejores[0]->subcategoria->slug }}/{{ $mejores[0]->slug }}">
                                            <img src="{{ (!!$mejores[0]->imagen ? '/storage/img/'. $mejores[0]->images : '/storage/placeholder/placeholder-avatar.jpg') }}" alt="{{ $mejores[0]->name }}" class="w-full rounded-2xl gold" />
                                        </a>
                                    </div>
                                    <div class="py-3 sm:py-4">
                                        <a href="/{{ $mejores[1]->social->name }}/{{ $mejores[1]->type->name }}/categoria/{{ $mejores[1]->categoria->slug }}/{{ $mejores[1]->subcategoria->slug }}/{{ $mejores[1]->slug }}">
                                            <img src="{{ (!!$mejores[1]->imagen ? '/storage/img/'. $mejores[1]->images : '/storage/placeholder/placeholder-avatar.jpg') }}" alt="{{ $mejores[1]->name }}" class="w-full rounded-2xl" />
                                        </a>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:px-4 xl:w-1/2">
                                    <div class="relative z-10 my-4">
                                        <a href="/{{ $mejores[2]->social->name }}/{{ $mejores[2]->type->name }}/categoria/{{ $mejores[2]->categoria->slug }}/{{ $mejores[2]->subcategoria->slug }}/{{ $mejores[2]->slug }}">
                                            <img src="{{ (!!$mejores[2]->imagen ? '/storage/img/'. $mejores[2]->images : '/storage/placeholder/placeholder-avatar.jpg') }}" alt="{{ $mejores[2]->name }}" class="w-full rounded-2xl gold" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="px-6">

                    <div class="mt-10 lg:mt-0">
                        <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                            De dónde es {{ $group->name }}?
                        </h2>

                        <p class="mb-8 text-base text-body-color">
                            Es de <a href="/" class="text-primary">{{ $group->location->name }}</a>. Si quieres
                            ver más Contenido de ese país, echa un vistazo a la sección de buscar <a href="" class="text-primary">{{ $group->social->name }} por Localización </a> en nuestra
                            web
                        </p>

                    </div>

                </section>
                <section class="px-6">
                    <div class="mt-10 lg:mt-0">
                        <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                            Puedo ingresar a el {{ strtolower($group->type->name) }} de
                            {{ $group->social->name }} de {{ $group->name }} gratis?
                        </h2>
                        @if($group->precio_membresia == 0)
                        <p class="mb-8 text-base text-body-color">
                            Estás de suerte! Ahora mismo, {{ $group->name }} no require una suscripcion o pago
                            para poder acceder a
                            todo el contenido de su {{ $group->social->name }}.
                            Ingresa ahora y no esperes a que sea demasiado tarde!
                        </p>
                        @else
                        <p class="mb-8 text-base text-body-color">
                            Lo sentimos, pero {{ $group->name }} no tiene un {{ $group->social->name }}
                            gratis. Puedes acceder a su contenido suscribiéndote
                            directamente a su cuenta, por tan sólo ${{ $group->precio_membresia }} al mes.
                            Piénsalo, es súper barato! Cuanto dinero gastas al mes en cerveza, café, Netflix?
                            Date un capricho,
                            suscríbete al {{ $group->social->name }} de {{ $group->name }}, y harás muy
                            feliz a la Creadora de Contenido!
                        </p>
                        @endif
                    </div>
                </section>
                <section class="px-6 -mx-4 flex flex-wrap items-center justify-between">
                    <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                        <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                            Tiene {{ $group->name }} más redes sociales?
                        </h2>

                        @if(!!$group->show_more_social_medias)
                        <p class="mb-8 text-base text-body-color">
                            Si, al ingresar al {{ strtolower($group->type->name) }} encontraras mas links de las
                            redes sociales
                        </p>
                        @else
                        <p class="mb-8 text-base text-body-color">
                            Parece ser que no tiene mas informacion de sus redes sociales conectadas con su cuenta
                        </p>
                        @endif
                    </div>

                    <div class="w-full px-4 lg:w-1/2 xl:w-5/12 px-6">
                        <a href="/{{ $mejores[3]->social->name }}/{{ $mejores[3]->type->name }}/categoria/{{ $mejores[3]->categoria->slug }}/{{ $mejores[3]->subcategoria->slug }}/{{ $mejores[3]->slug }}">
                            <img src="{{ (!!$mejores[3]->imagen ? '/storage/img/'. $mejores[3]->images : '/storage/placeholder/placeholder-avatar.jpg') }}" alt="{{ $mejores[3]->name }}" class="w-full rounded-2xl gold" style="max-width: 220px ;" />
                        </a>
                    </div>
                </section>
                <section class="px-6">
                    <div class="w-full ">
                        <div class="mt-10 lg:mt-0">
                            <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                Puedo mandar un mensaje o hablar con {{ $group->name }}?
                            </h2>

                            @if(!!$group->usuarios_comunicación)
                            <p class="mb-8 text-base text-body-color">
                                Por supuesto, si se puede hablar directamente con {{ $group->name }}, la mejor
                                forma es ir a su {{ $group->social->name }} y mandar un mensaje directo. No te
                                defraudará!
                                Si, al ingresar al {{ strtolower($group->type->name) }} encontraras mas links de
                                las redes sociales
                            </p>
                            @else
                            <p class="mb-8 text-base text-body-color">
                                Por este momento no se puede contactar directamente, ingresa directamente si se
                                puede hablar directamente con {{ $group->name }}, la mejor forma es ir a su
                                {{ $group->social->name }} y mandar un mensaje directo. No te defraudará!
                                Si, al ingresar al {{ strtolower($group->type->name) }} encontraras mas links de
                                las redes sociales
                                Parece ser que no tiene mas informacion de sus redes sociales conectadas con su
                                cuenta
                            </p>
                            @endif
                        </div>
                    </div>
                </section>
                <section class="px-6">
                    <div class="w-full ">
                        <div class="mt-10 lg:mt-0">
                            <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                Preguntas y Respuestas Frecuentes
                            </h2>
                            <p class="mb-8 text-base text-body-color">
                                Estas son las preguntas más frecuentes que hacen los usuarios antes de ingresar a
                                {{ $group->name }}. Haznos saber si tienes má preguntas o te gustaría añadir más
                                información de este {{ $group->type->name }}
                            </p>

                        </div>
                    </div>

                </section>

                <section x-data="{openFaq1: false, openFaq4: false}" class="relative z-20 overflow-hidden bg-white">
                    <div class="container">
                        <div class="-mx-4 flex flex-wrap">
                            <div class="w-full px-4 lg:w-1/2">
                                <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                                    <button class="faq-btn flex w-full text-left" @click="openFaq1 = !openFaq1">
                                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                                            </svg>
                                        </div>
                                        <div class="w-full">
                                            <h4 class="text-lg font-semibold text-black">
                                                ¿Cuanto gana {{ $group->name }}?
                                            </h4>
                                        </div>
                                    </button>
                                    <div x-show="openFaq1" class="faq-content pl-[62px]">
                                        <p class="py-3 text-base leading-relaxed text-body-color">
                                            El dinero que {{ $group->name }} gana en {{ $group->social->name }} no
                                            nos importa! Respetamos la privacidad de los Creadores de Contenido y
                                            además, revelar sus ganancias les puede poner en peligro!.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-4 lg:w-1/2">
                                <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                                    <button class="faq-btn flex w-full text-left" @click="openFaq4 = !openFaq4">
                                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                                            </svg>
                                        </div>
                                        <div class="w-full">
                                            <h4 class="text-lg font-semibold text-black">
                                                Donde puedo encontrar filtraciones de {{ $group->name }}
                                            </h4>
                                        </div>
                                    </button>
                                    <div x-show="openFaq4" class="faq-content pl-[62px]">
                                        <p class="py-3 text-base leading-relaxed text-body-color">
                                            Estás buscando filtraciones del {{ $group->social->name }} de
                                            {{ $group->name }}? Pues estás en el sitio equivocado! estamos en contra
                                            de los leaks.
                                            Nos gusta {{ $group->name }} y nos encantan los Creadores de Contenido.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="p-5 sm:p-10 md:p-16">
                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
                        @foreach($mejores as $key => $groupx)
                        @if($key > 3)
                        <div class="relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center border-solid border-4 border-yellow-500 rounded-lg" style="background-image:url('{{ (!!$mejores[$key]->imagen ? '/storage/img/'. $mejores[$key]->images : '/storage/placeholder/placeholder-avatar.jpg') }}');">
                            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-blue-500">
                            </div>
                            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                                <a href="#" class="text-xs bg-blue-700 text-white p-3 rounded-lg uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">OF</a>
                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                    <span class="">Free Trial</span>
                                </div>
                            </div>
                            <main class="p-5 z-10">
                                <p class="text-white">@maridiza</p>
                                <a href="#" class="font-extrabold text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Mariannys Gutierrez
                                </a>
                            </main>
                        </div>

                        @endif
                        @endforeach

                    </div>
                </section>
            </div>





            <!-- <section class="">
                    <div class="container">
                        <div class="w-full">
                            <h4 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                Mas {{ $group->type->name }}s de Contenido
                            </h4>
                        </div>

                        <div class="-mx-4 flex flex-wrap">
@foreach($mejores as $key => $groupx)
@if($key > 3)
                            <div class="w-full px-4 md:w-1/3 xl:w-1/4">
                                <div class="relative mb-12">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="/{{ $mejores[$key]->social->name }}/{{ $mejores[$key]->type->name }}/categoria/{{ $mejores[$key]->categoria->slug }}/{{ $mejores[$key]->subcategoria->slug }}/{{ $mejores[$key]->slug }}">
                                            <img src="{{ (!!$mejores[$key]->imagen ? '/storage/img/'. $mejores[$key]->images : '/storage/placeholder/placeholder-avatar.jpg') }}" alt="{{ $mejores[$key]->name }}" class="w-full rounded-xl {{ $key % rand(2,3) == 0 ? '' :'gold' }}" />
                                            <div class="fondo con"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
@endif
@endforeach
                        </div>
                    </div>
                </section> -->




        </div>


        </div>
    </section>

    <script>
        (async () => {

            document.addEventListener("click", async (e) => {
                if (e.target.id == "ingresar") {
                    res = await open()
                    window.open(res.url, '_blank');
                }
            })

            async function open() {
                res = await fetch("/getUrl/" + "{{ $group->slug }}", {
                    method: 'POST',
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-Token": window.CSRF_TOKEN
                    }
                });
                return await res.json()
            }


            function numberWithCommas(x) {
                return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
            }

            window.CSRF_TOKEN = '{{ csrf_token() }}';
            res = await fetch("/statistics/" + "{{ $group->id }}", {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-Token": window.CSRF_TOKEN
                }
            });

            body = await res.json()
            console.log(body)

            document.getElementById("count_views").innerText = numberWithCommas(body.total_v)
            document.getElementById("count_click").innerText = numberWithCommas(body.total_click)
            // document.getElementById("count_members").innerText = 0
        })()
    </script>
    @include('layouts.footer')
</body>

</html>