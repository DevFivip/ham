@if(false)
@if(isset($group))
@if($group->categoria->slug == "nsfw")
@if($cookies['__CAC'])
<section x-data="{modalOpen: true}">
    <div x-show="modalOpen" id="aceptar-adulto" class="fixed top-0 left-0 flex h-full min-h-screen w-full items-center justify-center bg-dark  px-4 py-5" style="z-index:1000 !important;  opacity:.98"></div>
    <div x-show="modalOpen" id="aceptar-adulto" x-transition class="fixed top-0 left-0 flex h-full min-h-screen w-full items-center justify-center  bg-opacity-90 px-4 py-5" style="z-index:10000 !important;">
        <div @click.outside="modalOpen = false" class="w-full max-w-[570px] rounded-[20px] bg-white py-12 px-8 text-center md:py-[60px] md:px-[70px]">
            <h3 class="pb-2 text-xl font-bold text-dark sm:text-2xl">
                Atencion Contenido para Adultos
            </h3>
            <span class="mx-auto mb-6 inline-block h-1 w-[90px] rounded bg-primary"></span>
            <p class="mb-10 text-base leading-relaxed text-body-color">
                Estás a punto de entrar en un segmento de la web que contiene material explícito.
                Sólo debes acceder a este sitio web si tienes al menos 18 años o la edad legal para ver dicho material en tu jurisdicción local. </p>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-1/2 px-3">
                    <a href="/" class="block w-full rounded-lg border border-[#E9EDF9] p-3 text-center text-base font-medium text-dark transition hover:border-red-600 hover:bg-red-600 hover:text-white">
                        Cancel
                    </a>
                </div>
                <div class="w-1/2 px-3">
                    <button id="aceptar-adulto" @click="modalOpen = false" class="block w-full rounded-lg border border-primary bg-primary p-3 text-center text-base font-medium text-white transition hover:bg-opacity-90">
                        Soy mayor de 18 años
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endif
@endif
@endif

@if($cookies['__CAC'])
<section x-data="{ show: true }" class="fixed bottom-5 right-1" style="z-index:2000;" x-show="show">
    <div class="relative ml-auto w-full max-w-[400px] overflow-hidden rounded-lg bg-blue-600 py-10 px-6 text-center xs:px-10">
        <button class="absolute top-6 right-6" id="aceptar-cookie2" @click="show = !show">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.5">
                    <path d="M7.5336 7.00244L13.3319 1.18972C13.4784 1.04335 13.4784 0.813355 13.3319 0.666992C13.1854 0.520628 12.9551 0.520628 12.8086 0.666992L7.01029 6.47971L1.19105 0.687901C1.04452 0.541537 0.814268 0.541537 0.66774 0.687901C0.521212 0.834264 0.521212 1.06426 0.66774 1.21063L6.48698 7.00244L0.688672 12.8152C0.542145 12.9615 0.542145 13.1915 0.688672 13.3379C0.75147 13.4006 0.856133 13.4424 0.939862 13.4424C1.02359 13.4424 1.12826 13.4006 1.19105 13.3379L7.01029 7.52516L12.8086 13.3379C12.8714 13.4006 12.9761 13.4424 13.0598 13.4424C13.1435 13.4424 13.2482 13.4006 13.311 13.3379C13.4575 13.1915 13.4575 12.9615 13.311 12.8152L7.5336 7.00244Z" fill="#fff"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.66774 1.21063C0.521212 1.06426 0.521212 0.834264 0.66774 0.687901C0.814268 0.541537 1.04452 0.541537 1.19105 0.687901L7.01029 6.47971L12.8086 0.666992C12.9551 0.520628 13.1854 0.520628 13.3319 0.666992C13.4784 0.813355 13.4784 1.04335 13.3319 1.18972L7.5336 7.00244L13.311 12.8152C13.4575 12.9615 13.4575 13.1915 13.311 13.3379C13.2482 13.4006 13.1435 13.4424 13.0598 13.4424C12.9761 13.4424 12.8714 13.4006 12.8086 13.3379L7.01029 7.52516L1.19105 13.3379C1.12826 13.4006 1.02359 13.4424 0.939862 13.4424C0.856133 13.4424 0.75147 13.4006 0.688672 13.3379C0.542145 13.1915 0.542145 12.9615 0.688672 12.8152L6.48698 7.00244L0.66774 1.21063ZM5.69756 7.00386L0.273745 1.6056C-0.0907734 1.24149 -0.0914852 0.657746 0.273033 0.293636C0.637405 -0.070328 1.22077 -0.0704739 1.58532 0.293198L7.00887 5.69118L12.4132 0.273438C12.7777 -0.0906713 13.3621 -0.0913829 13.7266 0.272727C14.091 0.636743 14.0911 1.21957 13.7269 1.5837L8.32089 7.00315L13.7057 12.4209L13.7065 12.4217C14.0702 12.7859 14.0699 13.3683 13.7057 13.7321C13.537 13.9006 13.2899 14 13.0598 14C12.8297 14 12.5826 13.9006 12.4139 13.7321L7.00958 8.3144L1.58576 13.7321C1.41709 13.9006 1.16995 14 0.939862 14C0.709778 14 0.462634 13.9006 0.293965 13.7321C-0.0704666 13.3681 -0.0705527 12.7853 0.293707 12.4211L5.69756 7.00386Z" fill="#fff"></path>
                </g>
            </svg>
        </button>
        <div class="mx-auto mb-8 flex h-[100px] w-[100px] items-center justify-center rounded-full bg-primary">
            <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4062 7.77041C12.188 7.01057 13.3067 6.80569 14.2828 7.13223L19.1608 8.764H26.6743C28.2019 8.764 29.4615 9.94635 29.5748 11.4634L29.7414 13.6942L38.2133 14.9482C39.0971 15.079 39.87 15.6095 40.3125 16.384L42.5588 20.3168L48.361 22.9299C49.3968 23.3964 50.1084 24.4505 50.0509 25.6507C49.4641 37.907 39.4829 47.6898 27.22 47.6898C14.5784 47.6898 4.36182 37.2938 4.36182 24.5087C4.36182 17.9322 7.06423 11.9903 11.4062 7.77041ZM13.4922 9.49582C13.3427 9.44581 13.2143 9.48859 13.1432 9.55771C9.26837 13.3236 6.85412 18.6271 6.85412 24.5087C6.85412 35.9523 15.9896 45.1975 27.22 45.1975C38.114 45.1975 47.0365 36.4982 47.5614 25.5315C47.567 25.4161 47.4977 25.2745 47.3376 25.2024L41.1659 22.4229C40.9258 22.3148 40.7262 22.1334 40.5956 21.9048L38.1483 17.6202C38.0835 17.5068 37.9723 17.4319 37.8483 17.4136L28.3904 16.0137C27.8139 15.9284 27.3735 15.4549 27.3301 14.8737L27.0894 11.6489C27.0725 11.422 26.8866 11.2563 26.6743 11.2563H18.9579C18.8235 11.2563 18.69 11.2345 18.5625 11.1919L13.4922 9.49582ZM14.2006 20.3084C14.6886 19.8229 15.4775 19.825 15.963 20.3129L16.5473 20.9003C17.0327 21.3882 17.0307 22.1772 16.5428 22.6626C16.0548 23.148 15.2659 23.1459 14.7804 22.658L14.1961 22.0707C13.7107 21.5828 13.7127 20.7938 14.2006 20.3084ZM24.5037 23.0557C24.9916 22.5704 25.7806 22.5724 26.266 23.0603L26.8504 23.6476C27.3358 24.1356 27.3337 24.9245 26.8458 25.41C26.3579 25.8954 25.5689 25.8933 25.0835 25.4055L24.4991 24.8181C24.0138 24.3302 24.0158 23.5411 24.5037 23.0557ZM35.5431 30.1431C36.031 29.6577 36.82 29.6597 37.3054 30.1476L37.8897 30.7349C38.3751 31.2228 38.3731 32.0119 37.8852 32.4972C37.3973 32.9827 36.6083 32.9807 36.1229 32.4928L35.5385 31.9054C35.0531 31.4175 35.0552 30.6285 35.5431 30.1431ZM17.5952 32.076C18.0831 31.5905 18.8721 31.5926 19.3575 32.0805L19.9418 32.6679C20.4272 33.1558 20.4252 33.9448 19.9373 34.4302C19.4494 34.9156 18.6604 34.9135 18.175 34.4256L17.5906 33.8383C17.1052 33.3504 17.1073 32.5614 17.5952 32.076Z" fill="white"></path>
            </svg>
        </div>
        <h4 class="mb-3 text-xl font-bold text-white xs:text-2xl md:text-xl lg:text-2xl">
            Nosotros Usamos Cookies
        </h4>
        <p class="mb-8 text-white font-medium text-body-color">
            Este Sitio Web usa Cookies para mejorar la experiencia en la navegación.
        </p>
        <div class="flex items-center justify-center space-x-4">
            <a href="/legal/politica-cookies" class="inline-flex items-center justify-center rounded-md py-[9px] px-5 text-center text-white font-semibold text-success hover:bg-success hover:bg-opacity-5 xs:px-8">
                Leer mas
            </a>
            <button @click="show = !show" id="aceptar-cookie" class="inline-flex items-center justify-center rounded-md border border-success py-[9px] px-5 text-center text-white font-semibold text-success hover:bg-success hover:bg-opacity-5 xs:px-8">
                Aceptar
            </button>
        </div>
    </div>
</section>
@endif

<footer class="container mx-auto">
    <div class="flex flex-wrap bg-white md:w-4/5 sm:w-full mx-auto p-10 rounded-lg shadow-lg">
        <div class="w-full px-4 sm:w-2/3 lg:w-3/12">
            <div class="mb-10 w-full">
                <a href="/{{app()->getLocale() }}" class="mb-6 inline-block max-w-[160px] bg-blue-700">
                    <img src="/assets/images/onlyham-logo.png" alt="logo" class="max-w-full" />
                </a>
                <p class="mb-7 text-base text-body-color">
                    {{ __("Start now to search for OnlyFans accounts, Telegram groups and WhatsApp groups and find Content Creators and communities.")}}
                </p>
                <p class="flex items-center text-sm font-medium text-dark">
                    <span>+51 916 888 423</span>
                </p>
            </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
            <div class="mb-10 w-full">
                <h4 class="mb-9 text-lg font-semibold text-dark">Menu</h4>
                <ul>
                    @foreach($redesSociales as $red)
                    <li>
                        <a href="/{{app()->getLocale() }}/{{$red->name}}" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            {{$red->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
            <div class="mb-10 w-full">
                <h4 class="mb-9 text-lg font-semibold text-dark">{{__("User")}}</h4>
                <ul>
                    <li>
                        <a href="/{{app()->getLocale() }}/login" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            {{__("Login")}}
                        </a>
                    </li>
                    <li>
                        <a href="/{{app()->getLocale() }}/register" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            {{__("Register")}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
            <div class="mb-10 w-full">
                <h4 class="mb-9 text-lg font-semibold text-dark">Quick Links</h4>
                <ul>
                    <li>
                        <a href="/{{app()->getLocale()}}/search?location_id=64" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            {{__("Best")}} Onlyfans EEUU
                        </a>
                    </li>
                    <li>
                        <a href="/{{app()->getLocale()}}/search?location_id=63" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            {{__("Best")}} Onlyfans Spain
                        </a>
                    </li>
                    <li>
                        <a href="/{{app()->getLocale()}}/search?location_id=43" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            {{__("Best")}} Onlyfans Colombia
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
            <div class="mb-10 w-full">
                <h4 class="mb-9 text-lg font-semibold text-dark">Follow Us On</h4>
                <div class="mb-6 flex items-center">
                    <a href="https://t.me/onlyham" class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark sm:mr-4 lg:mr-3 xl:mr-4">
                        <i class="fa-brands fa-telegram"></i>
                    </a>
                    <a href="https://reddit.com/r/only_ham" class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark sm:mr-4 lg:mr-3 xl:mr-4">
                        <i class="fa-brands fa-reddit"></i>
                    </a>
                    <a href="https://twitter.com/OnlyHamOficial" class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark sm:mr-4 lg:mr-3 xl:mr-4">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </div>
                <p class="text-base text-body-color">&copy; 2022 OnlyHam.co</p>
            </div>
        </div>
    </div>



</footer>


<script>
    window.CSRF_TOKEN = '{{ csrf_token() }}';

    document.addEventListener('click', (e) => {
        if (e.target.id == "aceptar-cookie") {
            handleAceptarCookies();
        }
        if (e.target.id == "aceptar-cookie2") {
            handleAceptarCookies();
        }

        if (e.target.id == "aceptar-adulto") {
            handleAceptarOldAge();
        }
    })

    document.addEventListener('input', (e) => {
        // console.log({e})
        switch (e.target.id) {
            case 'categoria':
                handleCategorias(e.target.value)
                break;
                return false
                break;
        }
    }, false)

    async function handleAceptarCookies() {
        await fetch('/acepted-cookies', {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-Token": window.CSRF_TOKEN
            }
        })
    }

    async function handleAceptarOldAge() {
        await fetch('/acepted-oldage', {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-Token": window.CSRF_TOKEN
            }
        })
    }

    async function handleCategorias(id) {

        selectSubCategoria = document.getElementById("subcategoria");

        while (selectSubCategoria.length > 0) {
            selectSubCategoria.remove(0);
        }


        if (!!!id) return false
        const res = await fetch('/subcategorias/' + id, {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-Token": window.CSRF_TOKEN
            },
        })
        subcategorias = await res.json()

        optAll = document.createElement("option");
        optAll.value = null;
        optAll.text = '---Todos---';

        selectSubCategoria.add(optAll, null)

        subcategorias.forEach(sub => {
            opt = document.createElement("option");
            opt.value = sub['id'];
            opt.text = sub['name'];

            console.log(opt)
            selectSubCategoria.add(opt, null)
        });

    }
</script>