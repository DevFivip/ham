<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
@include("layouts.header")

<style>
    @media only screen and (max-width: 800px) and (min-width: 400px) {
        .space {
            margin-top: -40vw !important;
        }
    }

    @media only screen and (max-width: 1000px) and (min-width: 801px) {
        .space {
            margin-top: -45vw !important;
        }
    }

    @media only screen and (max-width: 1500px) and (min-width: 1001px) {
        .space {
            margin-top: -40vw !important;
        }
    }

    @media only screen and (max-width: 2000px) and (min-width: 1501px) {
        .space {
            margin-top: -48vw !important;
        }
    }
</style>


<body>
    @include(" layouts.navbar") <section class="relative block">
        @if(!!$group["banner"])
        <img style="min-height:300px;" id="preview-banner" src="{{ url('storage/') }}/img/{{$group['banner']}}" alt="imagen" />
        <span id="blackOverlay" class="w-full h-full absolute opacity-80 bg-primary"></span>
        @else
        <img style="min-height:300px;" id="preview-banner" src="{{ url('storage/') }}/placeholder/background.png" alt="imagen" />
        @endif
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="relative py-16 bg-blueGray-200">
        <div class="container ">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64 space">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                            <div class="relative">
                                @if(!!$group['imagen'])
                                <img alt="imagen" id="preview-avatar" src="{{ url('storage/') }}/img/{{$group['imagen']}}" style="margin-top:-10px; max-width:200px;" class="shadow-xl rounded-lg h-auto align-middle border-none absolute -ml-20 lg:-ml-10">
                                @else
                                <img alt="imagen" id="preview-avatar" src="{{ url('storage/') }}/placeholder/placeholder-avatar.jpg" style="margin-top:-10px; max-width:200px;" class="shadow-xl rounded-lg h-auto align-middle border-none absolute -ml-20 lg:-ml-10">
                                @endif
                            </div>
                        </div>
                        <!-- <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                            <div class="py-6 px-3 mt-32 sm:mt-0">
                                <a id="ingresar" href="#" class="inline-flex items-left justify-center rounded-full bg-primary py-4 px-2 text-center text-base font-normal text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
                                    Ingresar
                                </a>
                            </div>
                        </div> -->
                        <!-- <div class="w-full lg:w-4/12 px-4 lg:order-1">
                            <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                <div class="mr-4 p-3 text-center">
                                    <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600" id="count_views">0</span><span class="text-sm text-blueGray-400">Visitas</span>
                                </div>
                                <div class="mr-4 p-3 text-center">
                                    <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600" id="count_click">0</span><span class="text-sm text-blueGray-400">Click</span>
                                </div>
                                <div class="lg:mr-4 p-3 text-center">
                                    <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600" id="count_members">0</span><span class="text-sm text-blueGray-400">Actuales</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="text-center mt-12">
                        <h1 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                            {{$group["name"]}}
                        </h1>
                        <p>
                            <a href="/categoria/{{$group['categoria']['slug']}}" class="m-2 inline-block rounded border border-primary py-1 px-2 text-sm font-semibold text-primary">
                                {{$group['categoria']['name']}}
                            </a>
                            <a href="/subcategoria/{{$group['subcategoria']['slug']}}" class="m-2 inline-block rounded border border-primary py-1 px-2 text-sm font-semibold text-primary">
                                {{$group['subcategoria']['name']}}
                            </a>
                        </p>

                    </div> -->
                    <div class="mt-10 py-10 border-t border-blueGray-200">
                        <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                            Bio:
                        </h2>
                        <!-- <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4"> -->
                        <p class="mb-4 text-center text-base text-body-color">
                            {!! $group["description"] !!}
                        </p>
                        <!-- </div>
                        </div> -->
                    </div>
                </div>
                <div class="px-6">
                    <div class="-mx-4 flex flex-wrap items-center justify-between">
                        <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                            <div class="mt-10 lg:mt-0">
                                <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                    Cuantos suscriptores tiene {{$group->name}}?
                                </h2>


                                @if($group->cant_suscriptores === 0)

                                <p class="mb-8 text-base text-body-color">
                                    Vaya! No sabemos el número de fans que tiene
                                    ☪ أميرة غامضة 'amirat ghamida 👑 Esto significa
                                    que ha configurado la cuenta para no compartir el número total,
                                    pero para saber si es una buena cuenta puedes fijarte en cuantos
                                    posts y de likes tiene. Podrías ser de las mejores y tú sin saberlo!
                                </p>

                                @elseif($group->cant_suscriptores > 1)
                                <p class="mb-8 text-base text-body-color">
                                    {{$group->name}} es una de las cuentas MÁS GRANDES que hay.
                                    Te puedes imaginar tener 48483 suscriptores?
                                    Es increíble! Esto quiere decir que tienes que suscribirte inmediatamente
                                    a esta cuenta si quieres seguir a una de las mejores Creadoras de Contenido!
                                </p>
                                @endif
                            </div>
                            <div class="mt-10 lg:mt-0">
                                <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                    Cuantas fotos, vídeos y posts tiene {{$group->name}}?
                                </h2>

                                @if($group->cant_fotos === 0 && $group->cant_videos === 0 && $group->cant_posts === 0)
                                <p class="mb-8 text-base text-body-color">
                                    no quiere brindar esta información
                                </p>
                                @else

                                <p class="mb-8 text-base text-body-color">

                                    {{$group->name}}, ahora mismo tiene

                                    {{ $group->cant_fotos > 1 ? $group->cant_fotos.' fotos' : ' '}}
                                    {{ $group->cant_videos > 1 ? $group->cant_videos.' videos' : ' '}}
                                    {{ $group->cant_posts > 1 ? $group->cant_posts.' posts' : ' '}}


                                    @if($group->cant_fotos + $group->cant_videos + $group->cant_posts < 100) <span>
                                        Nos entristece decir que está por debajo de la media, pero no te preocupes!
                                        Esto a veces significa que la cuenta es nueva o ha eliminado contenido antiguo.
                                        Sin duda deberías volver a echar un ojo pronto que seguro que tendrá más contenido.
                                        </span>
                                        @else

                                        <span>
                                            Es un número impresionante, así que si ingresas a este {{strtolower($group->type->name)}}
                                            seguramente te lo pases muy bien. Normalmente la media de publicaciones suele ser
                                            inferior a 100, por lo que puedes ver que hay un montón de trabajo detrás
                                            de esta {{strtolower($group->type->name)}} de {{$group->social->name}}!
                                        </span>
                                        @endif

                                </p>


                                @endif



                            </div>
                        </div>
                        <div class="w-full px-4 lg:w-6/12">
                            <div class="-mx-3 flex items-center sm:-mx-4">
                                <div class="w-full px-3 sm:px-4 xl:w-1/2">
                                    <div class="py-3 sm:py-4">
                                        <img src="/assets/images/about/image-1.jpg" alt="" class="w-full rounded-2xl" />
                                    </div>
                                    <div class="py-3 sm:py-4">
                                        <img src="/assets/images/about/image-2.jpg" alt="" class="w-full rounded-2xl" />
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:px-4 xl:w-1/2">
                                    <div class="relative z-10 my-4">
                                        <img src="/assets/images/about/image-3.jpg" alt="" class="w-full rounded-2xl" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="px-6">
                    <div class="w-full ">
                        <div class="mt-10 lg:mt-0">
                            <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                Cuales son las Categorías que mejor describen a {{$group->name}}?
                            </h2>

                            <p class="mb-8 text-base text-body-color">
                                Las categorías que mejor describen esta cuenta de {{$group->social->name}} son {{$group->categoria->name}}, {{$group->subcategoria->name}} .
                                Puedes ver perfiles similares en el apartado de <a href="/categoria/{{$group->categoria->slug}}" class="text-primary">Categorias</a>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="px-6">
                    <div class="w-full ">
                        <div class="mt-10 lg:mt-0">
                            <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                De dónde es {{$group->name}}?
                            </h2>

                            <p class="mb-8 text-base text-body-color">
                                Es de <a href="/" class="text-primary">{{$group->location->name}}</a>. Si quieres ver más Contenido de ese país, echa un vistazo a la sección de buscar <a href="" class="text-primary">{{$group->social->name}} por Localización </a> en nuestra web
                            </p>

                        </div>
                    </div>
                </div>
                <div class="px-6">
                    <div class="w-full ">
                        <div class="mt-10 lg:mt-0">
                            <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                Puedo ingresar a el {{strtolower($group->type->name)}} de {{$group->social->name}} de {{$group->name}} gratis?
                            </h2>
                            @if($group->precio_membresia == 0)
                            <p class="mb-8 text-base text-body-color">
                                Estás de suerte! Ahora mismo, {{$group->name}} no require una suscripcion o pago para poder acceder a
                                todo el contenido de su {{$group->social->name}}.
                                Ingresa ahora y no esperes a que sea demasiado tarde!
                            </p>
                            @else
                            <p class="mb-8 text-base text-body-color">
                                Lo sentimos, pero {{$group->name}} no tiene un {{$group->social->name}} gratis. Puedes acceder a su contenido suscribiéndote
                                directamente a su cuenta, por tan sólo ${{$group->precio_membresia}} al mes.
                                Piénsalo, es súper barato! Cuanto dinero gastas al mes en cerveza, café, Netflix? Date un capricho,
                                suscríbete al {{$group->social->name}} de {{$group->name}}, y harás muy feliz a la Creadora de Contenido!
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="px-6">
                    <div class="w-full ">
                        <div class="mt-10 lg:mt-0">
                            <h2 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">
                                Tiene {{$group->name}} más redes sociales?
                            </h2>

                            @if(!!$group->show_more_social_medias)
                            <p class="mb-8 text-base text-body-color">
                                Si, al ingresar al {{strtolower($group->type->name)}} encontraras mas links de las redes sociales
                            </p>
                            @else
                            <p class="mb-8 text-base text-body-color">
                                Parece ser que no tiene mas informacion de sus redes sociales conectadas con su cuenta
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <section class="overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">

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
                res = await fetch("/getUrl/" + "{{$group->slug}}", {
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
            res = await fetch("/statistics/" + "{{$group->id}}", {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-Token": window.CSRF_TOKEN
                }
            });

            body = await res.json()

            document.getElementById("count_views").innerText = numberWithCommas(body.total_v)
            document.getElementById("count_click").innerText = numberWithCommas(body.total_click)
            document.getElementById("count_members").innerText = 0
        })()
    </script>

    @include('layouts.footer')
</body>

</html>