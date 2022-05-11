<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
@include("layouts.header")

<body>
    @include("layouts.navbar")
    <section class="relative block h-500-px">
        @if(!!$group["banner"])
        <img class="absolute top-0 w-full bg-center bg-cover" id="preview-banner" src="{{ url('storage/') }}/img/{{$group['banner']}}" alt="imagen" />
        <span id="blackOverlay" class="w-full h-full absolute opacity-80 bg-primary"></span>
        @else
        <img class="absolute top-0 w-full bg-center bg-cover" id="preview-banner" src="{{ url('storage/') }}/placeholder/background.png" alt="imagen" />
        @endif
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="relative py-16 bg-blueGray-200">
        <div class="container mx-auto px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                            <div class="relative">
                                @if(!!$group['imagen'])
                                <img alt="imagen" id="preview-avatar" src="{{ url('storage/') }}/img/{{$group['imagen']}}" style="margin-top:-20px;" class="shadow-xl rounded-lg h-auto align-middle border-none absolute -ml-20 lg:-ml-16 max-w-150-px">
                                @else
                                <img alt="imagen" id="preview-avatar" src="{{ url('storage/') }}/placeholder/placeholder-avatar.jpg" style="margin-top:-20px;" class="shadow-xl rounded-lg h-auto align-middle border-none absolute -ml-20 lg:-ml-16 max-w-150-px">
                                @endif
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                            <div class="py-6 px-3 mt-32 sm:mt-0">
                                <a id="ingresar" href="#" class="inline-flex items-left justify-center rounded-full bg-primary py-4 px-2 text-center text-base font-normal text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
                                    Ingresar
                                </a>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 lg:order-1">
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
                        </div>
                    </div>
                    <div class="text-center mt-12">
                        <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                            {{$group["name"]}}
                        </h3>
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                            <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                            {{$group["location"]["name"]}}
                        </div>
                        <p>
                            <a href="/categoria/{{$group['categoria']['slug']}}" class="m-2 inline-block rounded border border-primary py-1 px-2 text-sm font-semibold text-primary">
                                {{$group['categoria']['name']}}
                            </a>
                        </p>
                        <p>
                            <a href="/subcategoria/{{$group['subcategoria']['slug']}}" class="m-2 inline-block rounded border border-primary py-1 px-2 text-sm font-semibold text-primary">
                                {{$group['subcategoria']['name']}}
                            </a>
                        </p>
                    </div>
                    <div class="mt-10 py-10 border-t border-blueGray-200">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                    {!! $group["description"] !!}
                                </p>
                                <a href="#pablo" class="font-normal text-pink-500">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        (async () => {


            document.addEventListener("click", async (e) => {
                if (e.target.id == "ingresar") {
                    res = await open()
                    window.open(res.url);
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