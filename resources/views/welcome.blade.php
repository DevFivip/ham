<!DOCTYPE html>
<html lang="es">

<head>
    @include("layouts.header")
</head>

<body>
    <!-- ====== Navbar Section Start -->
    @include("layouts.navbar")
    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start -->
    @include("layouts.hero")
    <!-- ====== Hero Section END -->

    <!-- ======Category Tabs Start -->
    <section class="py-20 lg:py-[120px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div x-data="
                {
                  openTab: 99,
                  activeClasses: 'bg-primary text-white',
                  inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
                }
              " class="mb-14 w-full">
                        <div class="flex flex-wrap rounded-lg border border-[#E4E4E4] py-3 px-4">
                            <a href="javascript:void(0)" @click="openTab = 99" :class="openTab === 99 ? activeClasses : inactiveClasses" class="rounded-md py-3 px-4 text-sm font-medium md:text-base lg:px-6">
                                Top Populares
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
                                <div class="flex border border-gray-100 rounded-xl py-3 cursor-pointer hover:shadow-md px-2 ">

                                    @if(!!$i['imagen'])
                                    <img alt="{{$i['name']}}" id="preview-avatar" src="{{ url('storage/') }}/img/{{$i['imagen']}}" class="w-15 h-12 object-cover rounded-lg">
                                    @else
                                    <img alt="{{$i['name']}}" id="preview-avatar" src="{{ url('storage/') }}/placeholder/placeholder-avatar.jpg" class="w-15 h-12 object-cover rounded-lg">
                                    @endif

                                    <!-- <img class='w-15 h-12 object-cover rounded-lg' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'> -->
                                    <div class="px-2 w-full">
                                        <a class="capitalize font-semibold " href="/{{$i['social']['name']}}/{{$i['type']['name']}}/categoria/{{$i['categoria']['slug']}}/{{$i['subcategoria']['slug']}}/{{$i['slug']}}">
                                            {{$i["name"]}}
                                        </a>
                                        <p class=" capitalize">
                                            <a href="/{{$i['social']['name']}}"> {{$i["social"]["name"]}}</a>/<a href="/{{$i['social']['name']}}/{{$i['type']['name']}}">{{$i["type"]["name"]}}</a>
                                            <a href="/categoria/{{$i['categoria']['slug']}}" class="m-2 inline-block rounded border border-primary py-1 px-2 text-sm font-semibold text-primary">
                                                {{$i['categoria']['name']}}
                                            </a>
                                            <a href="/subcategoria/{{$i['subcategoria']['slug']}}" class="m-2 inline-block rounded border border-primary py-1 px-2 text-sm font-semibold text-primary">
                                                {{$i['subcategoria']['name']}}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="">
                                        <button class="inline-flex items-center justify-center rounded-md border border-primary py-2 px-2 text-center text-base text-primary transition hover:border-primary hover:bg-primary hover:text-white lg:px-8 xl:px-10"> Ver</button>
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
                                <div class="flex border border-gray-100 rounded-xl py-3 cursor-pointer hover:shadow-md px-2 ">

                                    @if(!!$i['imagen'])
                                    <img alt="{{$i['name']}}" id="preview-avatar" src="{{ url('storage/') }}/img/{{$i['imagen']}}" class="w-15 h-12 object-cover rounded-lg">
                                    @else
                                    <img alt="{{$i['name']}}" id="preview-avatar" src="{{ url('storage/') }}/placeholder/placeholder-avatar.jpg" class="w-15 h-12 object-cover rounded-lg">
                                    @endif

                                    <!-- <img class='w-15 h-12 object-cover rounded-lg' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'> -->
                                    <div class="px-2 w-full">
                                        <a href="/{{$i['social']['name']}}/{{$i['type']['name']}}/categoria/{{$i['categoria']['slug']}}/{{$i['subcategoria']['slug']}}/{{$i['slug']}}" class=" capitalize font-semibold ">
                                            {{$i['name']}}
                                        </a>
                                        <p class=" capitalize">
                                            <a href="/{{$i['social']['name']}}/{{$i['type']['name']}}">{{$i["type"]["name"]}}</a>
                                            @if(isset($i["categoria"]))
                                            <a href="/categoria/{{$i['categoria']['slug']}}" class="m-2 inline-block rounded border border-primary py-1 px-2 text-sm font-semibold text-primary">
                                                {{$i['categoria']['name']}}
                                            </a>
                                            @else
                                            <a href="/categoria/" class="m-2 inline-block rounded border border-primary py-1 px-2 text-sm font-semibold text-primary">
                                                Todos
                                            </a>

                                            @endif
                                            @if(isset($i["subcategoria"]))
                                            <a href="/subcategoria/{{$i['subcategoria']['slug']}}" class="m-2 inline-block rounded border border-primary py-1 px-2 text-sm font-semibold text-primary">
                                                {{$i['subcategoria']['name']}}
                                            </a>
                                            @else

                                            <a href="/subcategoria/" class="m-2 inline-block rounded border border-primary py-1 px-2 text-sm font-semibold text-primary">
                                                Todos
                                            </a>

                                            @endif
                                        </p>
                                    </div>
                                    <div class="">
                                        <a href="/{{$i['social']['name']}}/{{$i['type']['name']}}/categoria/{{$i['categoria']['slug']}}/{{$i['subcategoria']['slug']}}/{{$i['slug']}}" class="inline-flex items-center justify-center rounded-md border border-primary py-2 px-2 text-center text-base text-primary transition hover:border-primary hover:bg-primary hover:text-white lg:px-8 xl:px-10"> Ver</a>
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



    <!-- ======Category Tabs End -->

    <!-- ======About Us Start -->
    @include("layouts.aboutUs")

    <!-- ======About Us ENd -->
    @include("layouts.footer")
</body>

</html>