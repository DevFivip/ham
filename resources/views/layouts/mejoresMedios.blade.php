<section class="overflow-hidden bg-blue-200 py-10">
    <div class="container mx-auto px-4">
        <div class="-mx-4 flex flex-wrap items-center justify-between">
            <div class="w-full px-4 lg:w-6/12">
                <h2 class="mb-8 text-3xl font-bold text-fuchsia-700 sm:text-4xl"> Mejores Onlyfans, Telegram y WhatsApp</h2>
                <p class="mb-8 text-fuchsia-600">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis deleniti, asperiores veniam quam inventore laboriosam iusto! Sequi tenetur, consequuntur aliquid nam voluptatem labore! Magni exercitationem cum, voluptatem saepe aut reprehenderit!
                </p>
            </div>
        </div>
    </div>
</section>


<section class="overflow-hidden bg-blue-100 py-10">
    <div class="container mx-auto px-4">
        <div class="-mx-4 flex flex-wrap items-center justify-between">
            <div class="w-full px-4 lg:w-6/12">
            </div>
            <div class="w-full px-4 lg:w-6/12">
                <h2 class="mb-8 text-3xl font-bold text-fuchsia-700 sm:text-4xl">Todo Gratis!</h2>
                <p class="mb-8 text-fuchsia-600">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis deleniti, asperiores veniam quam inventore laboriosam iusto! Sequi tenetur, consequuntur aliquid nam voluptatem labore! Magni exercitationem cum, voluptatem saepe aut reprehenderit!
                </p>
                <span class="flex">
                    <a href="/{{app()->getLocale()}}/onlyfans" class="flex-1 shadow-md text-fuchsia-900 bg-yellow-400 py-5 px-5 rounded-lg font-bold ml-1 text-center border-solid border-2 border-yellow-500 ">Onlyfans Gratis</a>
                    <a href="/{{app()->getLocale()}}/Telegram" class="flex-1 shadow-md text-fuchsia-900 bg-yellow-400 py-5 px-5 rounded-lg font-bold ml-1 text-center border-solid border-2 border-yellow-500 ">Telegram Gratis</a>
                    <a href="/{{app()->getLocale()}}/WhatsApp" class="flex-1 shadow-md text-fuchsia-900 bg-yellow-400 py-5 px-5 rounded-lg font-bold ml-1 text-center border-solid border-2 border-yellow-500 ">WhatsApp Gratis</a>
                </span>
            </div>
        </div>
    </div>
</section>


<section class="overflow-hidden bg-blue-100 py-10">
    <div class="container mx-auto px-4">
        <div class="-mx-4 flex flex-wrap items-center justify-between">
            <div class="w-full text-center ">
                <span class="mb-8 text-3xl">🪙</span>
                <h2 class="mb-8 text-3xl font-bold text-fuchsia-700 sm:text-4xl"> ¡El mayor listado de Free Trials para ver cuentas gratis! </h2>

                <p class="mb-8 text-fuchsia-600">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat perferendis, qui explicabo consequuntur voluptatem est quasi dolorem. Tenetur voluptatibus porro animi quos optio necessitatibus nulla quasi ipsa, molestias recusandae nisi.
                </p>



                <section>
                    <div class="container mx-auto px-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
                            @foreach($mejores3 as $key => $group3)
                            <div class="relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center border-solid border-4 border-yellow-500 rounded-lg" style="background-image:url('{{ ( !!$group3->imagen ? '/thumbnail/'. $group3->imagen : '/storage/placeholder/placeholder-avatar.jpg') }}');">
                                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-blue-500"></div>
                                <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                                    <a href="#" class="text-xs bg-blue-200 text-white p-3 rounded-lg uppercase hover:bg-blueGray-700 hover:text-indigo-600 transition ease-in-out duration-500">
                                        @if($group3->social->slug === "onlyfans")
                                        <i class="onlyfans2 text-white fa-2xl"></i>
                                        @else
                                        <i class="{{$group3->social->icon}} text-white" style="font-size:50px;"></i>
                                        @endif
                                    </a>
                                    @if($group3->precio_membresia > 0)
                                    <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                        <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                        <span class="">{{$group3->precio_membresia}}</span>
                                    </div>
                                    @else
                                    <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                        <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                        <span class="">Gratis</span>
                                    </div>
                                    @endif
                                </div>

                                <main class="p-5 z-10">
                                    <a href="/{{app()->getLocale() }}/{{$group3->social->name}}/{{$group3->type->name}}/categoria/{{$group3->categoria->slug}}/{{$group3->subcategoria->slug}}/{{$group3->slug}}" class="text-white">{{ !!$group3->username ? '@'.$group3->username : '' }}</a>
                                    <p>
                                        <a href="/{{app()->getLocale() }}/{{$group3->social->name}}/{{$group3->type->name}}/categoria/{{$group3->categoria->slug}}/{{$group3->subcategoria->slug}}/{{$group3->slug}}" class="font-extrabold text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{$group3->name}}
                                        </a>
                                    </p>
                                </main>
                            </div>

                            @endforeach
                        </div>
                        <br />
                    </div>
                </section>

            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden bg-blue-200 py-10">
    <div class="container mx-auto px-4">
        <div class="-mx-4 flex flex-wrap items-center justify-between">

            <div class="w-full text-center">
                <h2 class="mb-8 text-3xl font-bold text-fuchsia-700 sm:text-4xl"> ¿Cómo promocionar mi contenido de OnlyFans, Telegram y WhatsApp? </h2>

                <p class="mb-8 font-bold text-fuchsia-600">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis deleniti, asperiores veniam quam inventore laboriosam iusto! Sequi tenetur, consequuntur aliquid nam voluptatem labore! Magni exercitationem cum, voluptatem saepe aut reprehenderit!
                </p>

                <ul class="list-none bg-blue-500 rounded-lg shadow-md px-10 py-10">
                    <li>
                        <h3 class="mb-2 text-3xl font-bold text-white sm:text-4xl"> Los fans no te encuentran?</h3>
                        <p class="mb-8 text-white">
                            ✨Si anuncias tu OnlyFans en Hubite, te verán millones de usuarios mensuales!
                            Now this is a story all about how, my life got flipped turned upside down✨
                        </p>
                    </li>
                    <li>
                        <h3 class="mb-2 text-3xl font-bold text-white sm:text-4xl"> Cansada de hacer SFS y posts en redes sociales?</h3>
                        <p class="mb-8 text-white">
                            ✨Si anuncias tu OnlyFans en Hubite, te verán millones de usuarios mensuales!
                            Now this is a story all about how, my life got flipped turned upside down✨
                        </p>
                    </li>
                    <li>
                        <h3 class="mb-2 text-3xl font-bold text-white sm:text-4xl"> Promocionate profesionalmente</h3>
                        <p class="mb-8 text-white">
                            ✨Si anuncias tu OnlyFans en Hubite, te verán millones de usuarios mensuales!
                            Now this is a story all about how, my life got flipped turned upside down✨
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="overflow-hidden bg-blue-200 py-10">
    <div class="container mx-auto px-4">
        <div class="-mx-4 flex flex-wrap items-center justify-between">

            <div class="w-full text-center">
                <span class="mb-8 text-3xl">🏅</span>

                <h2 class="mb-8 text-3xl font-bold text-fuchsia-700 sm:text-4xl">Las Cuentas de OnlyFans más buscadas</h2>

                <p class="mb-8 text-fuchsia-600">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis deleniti, asperiores veniam quam inventore laboriosam iusto! Sequi tenetur, consequuntur aliquid nam voluptatem labore! Magni exercitationem cum, voluptatem saepe aut reprehenderit!
                </p>
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
                        @foreach($mejores_onlyfans as $key => $group4)
                        <div class="relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center border-solid border-4 border-yellow-500 rounded-lg" style="background-image:url('{{ ( !!$group4->imagen ? '/thumbnail/'. $group4->imagen : '/storage/placeholder/placeholder-avatar.jpg') }}');">
                            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-blue-500"></div>
                            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                                <a href="#" class="text-xs bg-blue-200 text-white p-3 rounded-lg uppercase hover:bg-blueGray-700 hover:text-indigo-600 transition ease-in-out duration-500">
                                    @if($group4->social->slug === "onlyfans")
                                    <i class="onlyfans2 text-white fa-2xl"></i>
                                    @else
                                    <i class="{{$group4->social->icon}} text-white" style="font-size:50px;"></i>
                                    @endif
                                </a>
                                @if($group4->precio_membresia > 0)
                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                    <span class="">{{$group4->precio_membresia}}</span>
                                </div>
                                @else
                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                    <span class="">Gratis</span>
                                </div>
                                @endif
                            </div>

                            <main class="p-5 z-10">
                                <a href="/{{app()->getLocale() }}/{{$group4->social->name}}/{{$group4->type->name}}/categoria/{{$group4->categoria->slug}}/{{$group4->subcategoria->slug}}/{{$group4->slug}}" class="text-white">{{ !!$group4->username ? '@'.$group4->username : '' }}</a>
                                <p>
                                    <a href="/{{app()->getLocale() }}/{{$group4->social->name}}/{{$group4->type->name}}/categoria/{{$group4->categoria->slug}}/{{$group4->subcategoria->slug}}/{{$group4->slug}}" class="font-extrabold text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{$group4->name}}
                                    </a>
                                </p>
                            </main>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="overflow-hidden bg-blue-100 py-10">
    <div class="container mx-auto px-4">
        <div class="-mx-4 flex flex-wrap items-center justify-between">

            <div class="w-full text-center">
                <span class="mb-8 text-3xl">🏅</span>

                <h2 class="mb-8 text-3xl font-bold text-fuchsia-700 sm:text-4xl"> Las Cuentas de Telegram más buscadas</h2>

                <p class="mb-8 text-fuchsia-600">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis deleniti, asperiores veniam quam inventore laboriosam iusto! Sequi tenetur, consequuntur aliquid nam voluptatem labore! Magni exercitationem cum, voluptatem saepe aut reprehenderit!
                </p>
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
                        @foreach($mejores_telegram as $key => $group5)
                        <div class="relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center border-solid border-4 border-yellow-500 rounded-lg" style="background-image:url('{{ ( !!$group5->imagen ? '/thumbnail/'. $group5->imagen : '/storage/placeholder/placeholder-avatar.jpg') }}');">
                            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-blue-500"></div>
                            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                                <a href="#" class="text-xs bg-blue-200 text-white p-3 rounded-lg uppercase hover:bg-blueGray-700 hover:text-indigo-600 transition ease-in-out duration-500">
                                    @if($group5->social->slug === "onlyfans")
                                    <i class="onlyfans2 text-white fa-2xl"></i>
                                    @else
                                    <i class="{{$group5->social->icon}} text-white" style="font-size:50px;"></i>
                                    @endif
                                </a>
                                @if($group5->precio_membresia > 0)
                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                    <span class="">{{$group5->precio_membresia}}</span>
                                </div>
                                @else
                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                    <span class="">Gratis</span>
                                </div>
                                @endif
                            </div>

                            <main class="p-5 z-10">
                                <a href="/{{app()->getLocale() }}/{{$group5->social->name}}/{{$group5->type->name}}/categoria/{{$group5->categoria->slug}}/{{$group5->subcategoria->slug}}/{{$group5->slug}}" class="text-white">{{ !!$group5->username ? '@'.$group5->username : '' }}</a>
                                <p>
                                    <a href="/{{app()->getLocale() }}/{{$group5->social->name}}/{{$group5->type->name}}/categoria/{{$group5->categoria->slug}}/{{$group5->subcategoria->slug}}/{{$group5->slug}}" class="font-extrabold text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{$group5->name}}
                                    </a>
                                </p>
                            </main>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden bg-blue-200 py-10">
    <div class="container mx-auto px-4">
        <div class="-mx-4 flex flex-wrap items-center justify-between">

            <div class="w-full text-center">
                <span class="mb-8 text-3xl">🏅</span>

                <h2 class="mb-8 text-3xl font-bold text-fuchsia-700 sm:text-4xl"> Las Cuentas de WhatsApp más buscadas</h2>

                <p class="mb-8 text-fuchsia-600">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis deleniti, asperiores veniam quam inventore laboriosam iusto! Sequi tenetur, consequuntur aliquid nam voluptatem labore! Magni exercitationem cum, voluptatem saepe aut reprehenderit!
                </p>
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
                        @foreach($mejores_whatsapp as $key => $group6)
                        <div class="relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center border-solid border-4 border-yellow-500 rounded-lg" style="background-image:url('{{ ( !!$group6->imagen ? '/thumbnail/'. $group6->imagen : '/storage/placeholder/placeholder-avatar.jpg') }}');">
                            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-blue-500"></div>
                            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                                <a href="#" class="text-xs bg-blue-200 text-white p-3 rounded-lg uppercase hover:bg-blueGray-700 hover:text-indigo-600 transition ease-in-out duration-500">
                                    @if($group6->social->slug === "onlyfans")
                                    <i class="onlyfans2 text-white fa-2xl"></i>
                                    @else
                                    <i class="{{$group6->social->icon}} text-white" style="font-size:50px;"></i>
                                    @endif
                                </a>
                                @if($group6->precio_membresia > 0)
                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                    <span class="">{{$group6->precio_membresia}}</span>
                                </div>
                                @else
                                <div class="text-white font-regular flex flex-col justify-start bg-yellow-500 p-1.5 rounded-lg">
                                    <!-- <span class="text-3xl mb-2 leading-0 font-semibold">Free</span> -->
                                    <span class="">Gratis</span>
                                </div>
                                @endif
                            </div>

                            <main class="p-5 z-10">
                                <a href="/{{app()->getLocale() }}/{{$group6->social->name}}/{{$group6->type->name}}/categoria/{{$group6->categoria->slug}}/{{$group6->subcategoria->slug}}/{{$group6->slug}}" class="text-white">{{ !!$group6->username ? '@'.$group6->username : '' }}</a>
                                <p>
                                    <a href="/{{app()->getLocale() }}/{{$group6->social->name}}/{{$group6->type->name}}/categoria/{{$group6->categoria->slug}}/{{$group6->subcategoria->slug}}/{{$group6->slug}}" class="font-extrabold text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{$group6->name}}
                                    </a>
                                </p>
                            </main>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>