<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" prefix="og: http://ogp.me/ns#">

<head>
    <title> {{$censor::replace($group->name)}} | {{env('APP_NAME')}} {{__("Seacher")}}</title>
    <meta content="onlyham, whatsapp, telegram, whatsapp search, telegram search, onlysearch, onlyfans search, onlyfans accounts, instagram, facebook, tiktok, onlyfans finder, onlyfinder, earnings, onlysearcher, {{ $group['name'] }}" name="keywords">
    @if(!!$group->description)
    <meta name="description" content='{{$censor::replace(strip_tags($group->description))}}'>
    @else
    <meta name="description" content="Busca Cuentas de Onlyfans, Telegram y WhatsApp, perfiles clasificados por categorias, paises, precios, mejores creadores de contenido con mas de 1000 cuentas Registradas!">
    @endif

    <link rel="alternate" hreflang="es" href="{{$_SERVER['APP_URL']}}/es/">
    <link rel="alternate" hreflang="en" href="{{$_SERVER['APP_URL']}}/en/">
    <link rel="alternate" hreflang="fr" href="{{$_SERVER['APP_URL']}}/fr/">
    <link rel="alternate" href="{{$_SERVER['APP_URL']}}/en/" hreflang="x-default">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <meta property="og:locale" content="{{app()->getLocale()}}">
    <meta property="og:title" content='{{$censor::replace((strip_tags($group->name)))}} | OnlyHam.co {{__("Seacher")}}'>
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="754192775575289">
    <meta property="og:description" content='{{$censor::replace((strip_tags($group->description)))}}'>
    <meta property="og:url" content="{{$_SERVER['APP_URL']}}/{{app()->getLocale()}}/">
    <meta property="og:site_name" content="OnlyHam.co">

    <meta property="og:image" content="{{ (!!$group['imagen'] ? $_SERVER['APP_URL'].'/storage/img/'. $group['imagen'] : $_SERVER['APP_URL'].'/assets/images/1.png') }}">
    <meta property="og:image:secure_url" content="{{ (!!$group['imagen'] ? $_SERVER['APP_URL'].'/storage/img/'. $group['imagen'] : $_SERVER['APP_URL'].'/assets/images/1.png') }}">

    <meta property="og:image:width" content="499">
    <meta property="og:image:height" content="333">
    <meta property="og:image:alt" content='{{$censor::replace(strip_tags($group->name))}}'>
    <meta property="og:image:type" content="image/jpeg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content='{{$censor::replace(strip_tags($group->name))}} | OnlyHam.co {{__("Seacher")}}'>
    <meta name="twitter:description" content='{{$censor::replace(strip_tags($group->description))}}'>
    <meta name="twitter:site" content="@OnlyHamOficial">
    <meta name="twitter:creator" content="@OnlyHamOficial">
    <meta name="twitter:image" content="{{ (!!$group['imagen'] ? $_SERVER['APP_URL'].'/storage/img/'. $group['imagen'] : $_SERVER['APP_URL'].'/assets/images/1.png') }}">
    @include("layouts.header")
</head>

<body class="bg-gray-100">

    <div class="">
        @include("layouts.navbar2")
    </div>

    <section class="relative block -z-10 md:h-72">
        <img style="min-height:300px;" id="preview-banner" src="{{ url('storage/') }}/placeholder/background.png" alt="background-{{$group['name']}}" />
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

                                        <h3 class="font-semibold text-dark text-3xl">{{ $censor::replace($group->name) }}</h3>

                                        <p class="box-content">{{$censor::replace(strip_tags($group->description))}}</p>
                                        @if(isset($group->username))
                                        <h4 class="mb-5 text-xl font-semibold text-dark">
                                            {{ $group->username }}
                                        </h4>
                                        @endif
                                        <p class="mb-5 text-base text-body-color">
                                            {{ __($group->type->name) }}, {{ $censor::replace(__($group->categoria->name))}},
                                            {{ $censor::replace(__($group->subcategoria->name)) }}
                                        </p>
                                        <p class="mb-5 text-base text-body-color">
                                            <span> <i class="fa-solid fa-eye"></i> <span id="count_views">0</span></span>
                                            <span> <i class="fa-solid fa-arrow-right-to-bracket"></i> <span id="count_click">0</span></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute left-0 right-0 -bottom-5 flex items-center justify-center">
                                <button id="ingresar" class="inline-flex items-center justify-center rounded-full bg-secondary py-4 px-10 text-center text-base font-normal text-white bg-blue-700 hover:bg-opacity-90 lg:px-8 xl:px-10">
                                    <i class="fa-solid fa-unlock-keyhole"></i> &nbsp; {{__("Enter")}}
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
                                    {{__('profile.many_subcribers',["name"=>$group->name])}}
                                </h2>

                                @if(intval($group->cant_suscriptores) === 0 )

                                <p class="mb-8 text-base text-body-color">
                                    {{__('profile.many_subcribers_resp_false',["name"=>$group->name,"type"=>$group->type->name,"number"=>$group->cant_suscriptores])}}
                                </p>

                                @elseif(intval($group->cant_suscriptores) > 1)
                                <p class="mb-8 text-base text-body-color">
                                    {{__('profile.many_subcribers_resp_true',["name"=>$group->name,"type"=>$group->type->name,"number"=>$group->cant_suscriptores])}}
                                </p>
                                @endif
                            </div>

                            <div class="mt-10 lg:mt-0">
                                <div class="w-full ">
                                    <div class="mt-10 lg:mt-0">
                                        <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                            {{__("profile.how_category_describeme",["name"=>$group->name])}}
                                        </h2>

                                        <p class="mb-8 text-base text-body-color">
                                            {!!__("profile.how_category_describeme_resp",["name"=>$group->name,'original_category'=>$group->categoria->slug,'category'=>__($group->categoria->name),"subcategory"=>__($group->subcategoria->name),'social'=>$group->social->name])!!}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10 lg:mt-0">
                                <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                    {{__("profile.where_from",['name'=>$group->name])}}
                                </h2>
                                <p class="mb-8 text-base text-body-color">
                                    {!!__("profile.where_from_resp",['name'=>$group->name,"social"=>$group->social->name,"location"=>$group->location->name])!!}
                                </p>
                            </div>



                        </div>
                        <div class="w-full px-4 lg:w-6/12">
                            <div class="-mx-3 flex items-center sm:-mx-4">
                                <div class="w-full px-3 sm:px-4 xl:w-1/2">

                                    <div class="py-3 sm:py-4">
                                        <div class="relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center border-solid border-4 border-yellow-500 rounded-lg" style="background-image:url('{{ (!!$mejores[0]->imagen ? '/storage/img/'. $mejores[0]->images : '/storage/placeholder/placeholder-avatar.jpg') }}');">
                                            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-blue-500">
                                            </div>
                                            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                                                <a href="#" class="text-xs bg-blue-200 text-white p-3 rounded-lg uppercase hover:bg-blueGray-700 hover:text-indigo-600 transition ease-in-out duration-500">
                                                    @if($mejores[0]->social->slug === "onlyfans")
                                                    <i class="onlyfans2 text-white fa-2xl"></i>
                                                    @else
                                                    <i class="{{$mejores[0]->social->icon}} text-white" style="font-size:50px;"></i>
                                                    @endif
                                                </a>
                                                @if($mejores[0]->precio_membresia > 0)
                                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                                    <span class="">{{$mejores[0]->precio_membresia}}</span>
                                                </div>
                                                @else
                                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                                    <span class="">{{__("Free")}}</span>
                                                </div>
                                                @endif
                                            </div>
                                            <main class="p-5 z-10">
                                                <p class="text-white">{{ !!$mejores[0]->username ? '@'.$mejores[0]->username : '' }}</p>
                                                <a href="" class="font-extrabold text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{$mejores[0]->name}}
                                                </a>
                                            </main>
                                        </div>
                                    </div>

                                    <div class="py-3 sm:py-4">
                                        <div class="relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center border-solid border-4 border-yellow-500 rounded-lg" style="background-image:url('{{ (!!$mejores[1]->imagen ? '/storage/img/'. $mejores[1]->images : '/storage/placeholder/placeholder-avatar.jpg') }}');">
                                            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-blue-500">
                                            </div>
                                            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">

                                                <a href="#" class="text-xs bg-blue-200 text-white p-3 rounded-lg uppercase hover:bg-blueGray-700 hover:text-indigo-600 transition ease-in-out duration-500">
                                                    @if($mejores[1]->social->slug === "onlyfans")
                                                    <i class="onlyfans2 text-white fa-2xl"></i>
                                                    @else
                                                    <i class="{{$mejores[1]->social->icon}} text-white" style="font-size:50px;"></i>
                                                    @endif
                                                </a>

                                                @if($mejores[1]->precio_membresia > 0)
                                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                                    <span class="">{{$mejores[1]->precio_membresia}}</span>
                                                </div>
                                                @else
                                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                                    <span class="">{{__("Free")}}</span>
                                                </div>
                                                @endif
                                            </div>
                                            <main class="p-5 z-10">
                                                <p class="text-white">{{ !!$mejores[1]->username ? '@'.$mejores[1]->username : '' }}</p>
                                                <a href="#" class="font-extrabold text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{$mejores[1]->name}}
                                                </a>
                                            </main>
                                        </div>
                                    </div>

                                </div>
                                <div class="w-full px-3 sm:px-4 xl:w-1/2">
                                    <div class="relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center border-solid border-4 border-yellow-500 rounded-lg" style="background-image:url('{{ (!!$mejores[2]->imagen ? '/storage/img/'. $mejores[2]->images : '/storage/placeholder/placeholder-avatar.jpg') }}');">
                                        <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-blue-500">
                                        </div>
                                        <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">

                                            <a href="#" class="text-xs bg-blue-200 text-white p-3 rounded-lg uppercase hover:bg-blueGray-700 hover:text-indigo-600 transition ease-in-out duration-500">
                                                @if($mejores[2]->social->slug === "onlyfans")
                                                <i class="onlyfans2 text-white fa-2xl"></i>
                                                @else
                                                <i class="{{$mejores[2]->social->icon}} text-white" style="font-size:50px;"></i>
                                                @endif
                                            </a>

                                            @if($mejores[2]->precio_membresia > 0)
                                            <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                                <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                                <span class="">{{$mejores[2]->precio_membresia}}</span>
                                            </div>
                                            @else
                                            <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                                <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                                <span class="">{{__("Free")}}</span>
                                            </div>
                                            @endif
                                        </div>
                                        <main class="p-5 z-10">
                                            <p class="text-white">{{ !!$mejores[2]->username ? '@'.$mejores[2]->username : '' }}</p>
                                            <a href="#" class="font-extrabold text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{$mejores[2]->name}}
                                            </a>
                                        </main>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="px-6">
                    <div class="mt-10 lg:mt-0">
                        <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                            {{__("profile.can_join",["name"=>$group->name,"social"=>$group->social->name, "type"=>$group->type->name])}}
                        </h2>
                        @if($group->precio_membresia == 0)
                        <p class="mb-8 text-base text-body-color">
                            {{__("profile.can_join_resp_true",["name"=>$group->name,"social"=>$group->social->name, "type"=>$group->type->name])}}
                        </p>
                        @else
                        <p class="mb-8 text-base text-body-color">
                            {{__("profile.can_join_resp_false",["price"=>$group->precio_membresia,"name"=>$group->name,"social"=>$group->social->name, "type"=>$group->type->name])}}
                        </p>
                        @endif
                    </div>
                </section>

                <section class="px-6 -mx-4 flex flex-wrap items-center justify-between">
                    <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                        <div>
                            <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                {{__("profile.more_social_medias",['name'=>$group->name])}}
                            </h2>

                            @if(!!$group->show_more_social_medias)
                            <p class="mb-8 text-base text-body-color">
                                {{__("profile.more_social_medias_resp_true",['type'=>$group->type->name])}}

                                @else
                            <p class="mb-8 text-base text-body-color">
                                {{__("profile.more_social_medias_resp_false",['type'=>$group->type->name])}}
                            </p>
                            @endif
                        </div>
                        <div class="mt-10 lg:mt-0">
                            <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                {{__("profile.can_talk",['name'=>$group->name])}}
                            </h2>

                            @if(!!$group->usuarios_comunicación)
                            <p class="mb-8 text-base text-body-color">
                                {{__("profile.can_talk_resp_true",['name'=>$group->name,'social'=>$group->social->name])}}

                            </p>
                            @else
                            <p class="mb-8 text-base text-body-color">
                                {{__("profile.can_talk_resp_false",['name'=>$group->name,'social'=>$group->social->name, 'type'=>$group->type->name])}}
                            </p>
                            @endif
                        </div>
                    </div>

                    <div class="w-full px-4 lg:w-1/2 xl:w-5/12 px-6">
                        <div class="relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center border-solid border-4 border-yellow-500 rounded-lg" style="background-image:url('{{ (!!$mejores[3]->imagen ? '/storage/img/'. $mejores[3]->images : '/storage/placeholder/placeholder-avatar.jpg') }}');">
                            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-blue-500">
                            </div>
                            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">

                                <a href="#" class="text-xs bg-blue-200 text-white p-3 rounded-lg uppercase hover:bg-blueGray-700 hover:text-indigo-600 transition ease-in-out duration-500">
                                    @if($mejores[3]->social->slug === "onlyfans")
                                    <i class="onlyfans2 text-white fa-2xl"></i>
                                    @else
                                    <i class="{{$mejores[3]->social->icon}} text-white" style="font-size:50px;"></i>
                                    @endif
                                </a>


                                @if($mejores[3]->precio_membresia > 0)
                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                    <span class="">{{$mejores[3]->precio_membresia}}</span>
                                </div>
                                @else
                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                    <span class="">{{__("Free")}}</span>
                                </div>
                                @endif
                            </div>
                            <main class="p-5 z-10">
                                <p class="text-white">{{ !!$mejores[3]->username ? '@'.$mejores[3]->username : '' }}</p>
                                <a href="#" class="font-extrabold text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{$mejores[3]->name}}
                                </a>
                            </main>
                        </div>
                    </div>

                </section>

                <hr class="mt-10 pb-5">
                <section class="px-6">
                    <div class="w-full ">
                        <div class="mt-10 lg:mt-0">
                            <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                {{__("FAQ")}}
                            </h2>
                            <p class="mb-8 text-base text-body-color">
                                {{__("profile.faq_description",["name"=>$group->name,"type"=>$group->type->name])}}
                            </p>

                        </div>
                    </div>

                </section>

                <section x-data="{openFaq1: false, openFaq2: false, openFaq4: false}" class="relative z-20 overflow-hidden bg-white">
                    <div class="container">
                        <div class="-mx-4 flex flex-wrap">
                            <div class="w-full px-4 lg:w-1/2">
                                <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                                    <button class="faq-btn flex w-full text-left" @click="openFaq1 = !openFaq1">
                                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-blue-700">
                                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                                            </svg>
                                        </div>
                                        <div class="w-full">
                                            <h4 class="text-lg font-semibold text-black">
                                                {{__("profile.faq_how_money",["name"=>$group->name])}}
                                            </h4>
                                        </div>
                                    </button>
                                    <div x-show="openFaq1" class="faq-content pl-[62px]">
                                        <p class="py-3 text-base leading-relaxed text-body-color">
                                            {{__("profile.faq_how_money_resp",["name"=>$group->name,'social'=>$group->social->name])}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-4 lg:w-1/2">
                                <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                                    <button class="faq-btn flex w-full text-left" @click="openFaq2 = !openFaq2">
                                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-blue-700">
                                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                                            </svg>
                                        </div>
                                        <div class="w-full">
                                            <h4 class="text-lg font-semibold text-black">
                                                {{__("profile.faq_free_access",["name"=>$group->name,"social"=>$group->social->name])}}
                                            </h4>
                                        </div>
                                    </button>
                                    <div x-show="openFaq2" class="faq-content pl-[62px]">
                                        <p class="py-3 text-base leading-relaxed text-body-color">
                                            {{__("profile.faq_free_access_resp_true",["name"=>$group->name,"social"=>$group->social->name])}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-4 lg:w-1/2">
                                <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                                    <button class="faq-btn flex w-full text-left" @click="openFaq4 = !openFaq4">
                                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-blue-700">
                                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                                            </svg>
                                        </div>
                                        <div class="w-full">
                                            <h4 class="text-lg font-semibold text-black">
                                                {{__("profile.faq_leaks",["name"=>$group->name,"social"=>$group->social->name])}}
                                            </h4>
                                        </div>
                                    </button>
                                    <div x-show="openFaq4" class="faq-content pl-[62px]">
                                        <p class="py-3 text-base leading-relaxed text-body-color">
                                            {{__("profile.faq_leaks_resp_true",["name"=>$group->name,"social"=>$group->social->name])}}

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
                        @if($key > 4)
                        <div class="relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center {{$key % rand(1,2) == 0? '': 'border-solid border-4 border-yellow-500'}} rounded-lg" style="background-image:url('{{ ( !!$groupx->imagen ? '/storage/img/'. $groupx->imagen : '/storage/placeholder/placeholder-avatar.jpg') }}');">
                            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-blue-500"></div>
                            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                                <a href="#" class="text-xs bg-blue-200 text-white p-3 rounded-lg uppercase hover:bg-blueGray-700 hover:text-indigo-600 transition ease-in-out duration-500">
                                    @if($groupx->social->slug === "onlyfans")
                                    <i class="onlyfans2 text-white fa-2xl"></i>
                                    @else
                                    <i class="{{$groupx->social->icon}} text-white" style="font-size:50px;"></i>
                                    @endif
                                </a>
                                @if(!!intval($groupx->precio_membresia))
                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                    <span class="">{{$groupx->precio_membresia}}</span>
                                </div>
                                @else
                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                    <span class="">{{__("Free")}}</span>
                                </div>
                                @endif
                            </div>

                            <main class="p-5 z-10">
                                <a href="/{{app()->getLocale()}}/{{$mejores[$key]->social->name}}/{{$mejores[$key]->type->name}}/categoria/{{$mejores[$key]->categoria->slug}}/{{$mejores[$key]->subcategoria->slug}}/{{$mejores[$key]->slug}}" class="text-white">{{ !!$groupx->username ? '@'.$groupx->username : '' }}</a>
                                <p>
                                    <a href="/{{app()->getLocale()}}/{{$mejores[$key]->social->name}}/{{$mejores[$key]->type->name}}/categoria/{{$mejores[$key]->categoria->slug}}/{{$mejores[$key]->subcategoria->slug}}/{{$mejores[$key]->slug}}" class="font-extrabold text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{$groupx->name}}
                                    </a>
                                </p>
                            </main>

                        </div>

                        @endif
                        @endforeach

                    </div>
                </section>
            </div>


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