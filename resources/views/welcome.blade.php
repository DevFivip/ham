<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" prefix="og: http://ogp.me/ns#">

<head>
    <title>{{__("Search For Accounts and Communities on Telegram WhatsApp and Onlyfans")}} | OnlyHam.co {{__("Seacher")}}</title>
    <meta content="onlyham, whatsapp, telegram, whatsapp search, telegram search, onlysearch, onlyfans search, onlyfans accounts, instagram, facebook, tiktok, onlyfans finder, onlyfinder, earnings, onlysearcher" name="keywords">
    <meta name="description" content="Busca Cuentas de Onlyfans, Telegram y WhatsApp, perfiles clasificados por categorias, paises, precios, mejores creadores de contenido con mas de 1000 cuentas Registradas!">

    <link rel="alternate" hreflang="es" href="{{$_SERVER['APP_URL']}}/es/">
    <link rel="alternate" hreflang="en" href="{{$_SERVER['APP_URL']}}/en/">
    <link rel="alternate" hreflang="fr" href="{{$_SERVER['APP_URL']}}/fr/">
    <link rel="alternate" href="{{$_SERVER['APP_URL']}}/en/" hreflang="x-default">
    <link rel="canonical" href="{{$_SERVER['APP_URL']}}{{$_SERVER['REQUEST_URI']}}">

    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <meta property="og:locale" content="{{app()->getLocale()}}">
    <meta property="og:title" content='{{__("Search For Accounts and Communities on Telegram WhatsApp and Onlyfans")}} | OnlyHam.co {{__("Seacher")}}'>
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="754192775575289">
    <meta property="og:description" content='{{__("Find Onlyfans, Telegram and WhatsApp accounts, profiles classified by categories, countries, prices, best content creators with more than 1000 registered accounts!")}}'>
    <meta property="og:url" content="{{$_SERVER['APP_URL']}}/{{app()->getLocale()}}/">
    <meta property="og:site_name" content="OnlyHam.co">

    <meta property="og:image" content="{{$_SERVER['APP_URL']}}/assets/images/1.png">
    <meta property="og:image:secure_url" content="{{$_SERVER['APP_URL']}}/assets/images/1.png">

    <meta property="og:image:width" content="499">
    <meta property="og:image:height" content="333">
    <meta property="og:image:alt" content='{{__("Search For Accounts and Communities on Telegram WhatsApp and Onlyfans")}}'>
    <meta property="og:image:type" content="image/jpeg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content='{{__("Search For Accounts and Communities on Telegram WhatsApp and Onlyfans")}} | OnlyHam.co {{__("Seacher")}}'>
    <meta name="twitter:description" content='{{__("Find Onlyfans, Telegram and WhatsApp accounts, profiles classified by categories, countries, prices, best content creators with more than 1000 registered accounts!")}}'>
    <meta name="twitter:site" content="@OnlyHamOficial">
    <meta name="twitter:creator" content="@OnlyHamOficial">
    <meta name="twitter:image" content="{{$_SERVER['APP_URL']}}/assets/images/1.png">

    @include("layouts.header")
</head>

<body>
    <!-- ====== Navbar Section Start -->
    @include("layouts.navbar2")
    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start -->
    @include("layouts.hero")
    <!-- ====== Hero Section END -->

    <!-- ======Category Tabs Start -->
    <section class="overflow-hidden bg-blue-100 py-10">
        <div class="container mx-auto px-4">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div x-data="
                          {
                            openTab: 99,
                            activeClasses: 'bg-blue-700 text-white ',
                            inactiveClasses: 'text-body-color hover:bg-blue-700 hover:text-white',
                          }
                        " class="mb-14 w-full">
                        <div class="flex flex-wrap rounded-lg border border-[#E4E4E4] py-3 px-4">
                            <a href="javascript:void(0)" @click="openTab = 99" :class="openTab === 99 ? activeClasses : inactiveClasses" class="rounded-md py-3 px-4 text-sm PATH_INFO -medium md:text-base lg:px-6">
                                {{__("Best")}} 🔥
                            </a>
                            @foreach ($redes as $red)
                            <a href="javascript:void(0)" @click="openTab = {{$red->id}}" :class="openTab === {{$red->id}} ? activeClasses : inactiveClasses" class="rounded-md py-3 px-4 text-sm font-medium md:text-base lg:px-6">
                                {{$red->name}}
                            </a>
                            @endforeach
                        </div>
                        <div>
                            <div x-show="openTab === 99" class="p-6 text-base leading-relaxed text-body-color">
                                @foreach($mejores as $i)
                                <div class="flex border border-blue-700 rounded-xl py-3 cursor-pointer shadow-lg hover:shadow-lg px-2 ">

                                    @if(!!$i['imagen'])
                                    <img alt="{{$i['name']}}" id="preview-avatar" src="/thumbnail/{{$i['imagen']}}" class="w-15 h-12 object-cover rounded-lg">
                                    @else
                                    <img alt="{{$i['name']}}" id="preview-avatar" src="/thumbnail/placeholder-avatar.jpg" class="w-15 h-12 object-cover rounded-lg">
                                    @endif


                                    <div class="px-2 w-full">
                                        <a class="capitalize font-semibold text-fuchsia-700" href="/{{app()->getLocale() }}/{{$i['social']['name']}}/{{$i['type']['name']}}/categoria/{{$i['categoria']['slug']}}/{{$i['subcategoria']['slug']}}/{{$i['slug']}}">
                                            {{$i["name"]}}
                                        </a>
                                        <p class="capitalize">
                                            <a href="/{{app()->getLocale() }}/{{$i['social']['name']}}"> {{$i["social"]["name"]}}</a>/<a href="/{{app()->getLocale() }}/{{$i['social']['name']}}/{{$i['type']['name']}}">{{$i["type"]["name"]}}</a>
                                            <a href="/{{app()->getLocale() }}/categoria/{{$i['categoria']['slug']}}" class="m-2 inline-block rounded-md border border-blue-500 py-1 px-2 text-sm font-semibold text-white bg-blue-500">
                                                {{__($i['categoria']['name'])}}
                                            </a>
                                            <a href="/{{app()->getLocale() }}/subcategoria/{{$i['subcategoria']['slug']}}" class="m-2 inline-block rounded-md border border-blue-500 py-1 px-2 text-sm font-semibold text-white bg-blue-500 ">
                                                {{__($i['subcategoria']['name'])}}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="">
                                        <a href="/{{app()->getLocale() }}/{{$i['social']['name']}}/{{$i['type']['name']}}/categoria/{{$i['categoria']['slug']}}/{{$i['subcategoria']['slug']}}/{{$i['slug']}}" class="inline-flex items-center justify-center rounded-md border border-blue-700 py-2 px-2 text-center text-bold text-white transition bg-blue-700 lg:px-8 xl:px-10"> {{__("Go")}}</a>
                                    </div>
                                </div>
                                <br>
                                @endforeach
                            </div>

                            @foreach ($redes as $red)
                            <div x-show="openTab === {{$red->id}}" class="p-6 text-base leading-relaxed text-body-color">

                                @foreach ($listas as $key=>$lista)
                                @if($red->id == $key+1)

                                @foreach($lista as $item)

                                @if(count($item) >= 0)

                                @foreach($item as $i)
                                <div class="flex border border-blue-700 rounded-xl py-3 cursor-pointer shadow-lg hover:shadow-lg px-2 ">

                                    @if(!!$i['imagen'])
                                    <img alt="{{$i['name']}}" id="preview-avatar" src="/thumbnail/{{$i['imagen']}}" class="w-15 h-12 object-cover rounded-lg">
                                    @else
                                    <img alt="{{$i['name']}}" id="preview-avatar" src="/thumbnail/placeholder-avatar.jpg" class="w-15 h-12 object-cover rounded-lg">
                                    @endif

                                    <!-- <img class='w-15 h-12 object-cover rounded-lg' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'> -->
                                    <div class="px-2 w-full">
                                        <a class="capitalize font-semibold text-fuchsia-700" href="/{{app()->getLocale() }}/{{$i['social']['name']}}/{{$i['type']['name']}}/categoria/{{$i['categoria']['slug']}}/{{$i['subcategoria']['slug']}}/{{$i['slug']}}" class=" capitalize font-semibold ">
                                            {{$i['name']}}
                                        </a>
                                        <p class="capitalize">
                                            <a href="/{{app()->getLocale() }}/{{$i['social']['name']}}/{{$i['type']['name']}}">{{__($i["type"]["name"])}}</a>
                                            @if(isset($i["categoria"]))
                                            <a href="/{{app()->getLocale() }}/categoria/{{$i['categoria']['slug']}}" class="m-2 inline-block rounded-md border border-blue-500 py-1 px-2 text-sm font-semibold text-white bg-blue-500">
                                                {{__($i['categoria']['name'])}}
                                            </a>

                                            @else
                                            <a href="/{{app()->getLocale() }}/categoria/" class="m-2 inline-block rounded-md border border-blue-500 py-1 px-2 text-sm font-semibold text-white bg-blue-500">
                                                {{__("All")}}
                                            </a>
                                            @endif

                                            @if(isset($i["subcategoria"]))
                                            <a href="/{{app()->getLocale() }}/subcategoria/{{$i['subcategoria']['slug']}}" class="m-2 inline-block rounded-md border border-blue-500 py-1 px-2 text-sm font-semibold text-white bg-blue-500">
                                                {{__($i['subcategoria']['name'])}}
                                            </a>
                                            @else

                                            <a href="/{{app()->getLocale() }}/subcategoria/" class="m-2 inline-block rounded border border-primary py-1 px-2 text-sm font-semibold text-primary">
                                                {{__("All")}}
                                            </a>

                                            @endif
                                        </p>
                                    </div>
                                    <div class="">
                                        <a href="/{{app()->getLocale() }}/{{$i['social']['name']}}/{{$i['type']['name']}}/categoria/{{$i['categoria']['slug']}}/{{$i['subcategoria']['slug']}}/{{$i['slug']}}" class="inline-flex items-center justify-center rounded-md border border-blue-700 py-2 px-2 text-center text-bold text-white transition bg-blue-700 lg:px-8 xl:px-10"> {{__("Go")}}</a>
                                    </div>
                                </div>
                                <br>
                                @endforeach
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include("layouts.mejoresMedios")
    @include("layouts.faq")
    <!-- ======About Us ENd -->
    @include("layouts.footer")
</body>

</html>