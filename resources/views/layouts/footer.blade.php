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

<footer class="bg-white pt-20 pb-10 lg:pt-[120px] lg:pb-20 container flex flex-wrap justify-between items-center mx-auto">
    <div class="-mx-4 flex flex-wrap w-4/5 mx-auto">
        <div class="w-full px-4 sm:w-2/3 lg:w-3/12">
            <div class="mb-10 w-full">
                <a href="javascript:void(0)" class="mb-6 inline-block max-w-[160px]">
                    <img src="/assets/images/logo/logo.svg" alt="logo" class="max-w-full" />
                </a>
                <p class="mb-7 text-base text-body-color">
                    Sed ut perspiciatis undmnis is iste natus error sit amet
                    voluptatem totam rem aperiam.
                </p>
                <p class="flex items-center text-sm font-medium text-dark">
                    <span>+012 (345) 678 99</span>
                </p>
            </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
            <div class="mb-10 w-full">
                <h4 class="mb-9 text-lg font-semibold text-dark">Resources</h4>
                <ul>
                    <li>
                        <a href="javascript:void(0)" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            SaaS Development
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            Our Products
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            User Flow
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            User Strategy
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
            <div class="mb-10 w-full">
                <h4 class="mb-9 text-lg font-semibold text-dark">Company</h4>
                <ul>
                    <li>
                        <a href="javascript:void(0)" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            About TailGrids
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            Contact & Support
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            Success History
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            Setting & Privacy
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
                        <a href="javascript:void(0)" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            Premium Support
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            Our Services
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            Know Our Team
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                            Download App
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
            <div class="mb-10 w-full">
                <h4 class="mb-9 text-lg font-semibold text-dark">Follow Us On</h4>
                <div class="mb-6 flex items-center">
                    <a href="javascript:void(0)" class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                        <svg width="8" height="16" viewBox="0 0 8 16" class="fill-current">
                            <path d="M7.43902 6.4H6.19918H5.75639V5.88387V4.28387V3.76774H6.19918H7.12906C7.3726 3.76774 7.57186 3.56129 7.57186 3.25161V0.516129C7.57186 0.232258 7.39474 0 7.12906 0H5.51285C3.76379 0 2.54609 1.44516 2.54609 3.5871V5.83226V6.34839H2.10329H0.597778C0.287819 6.34839 0 6.63226 0 7.04516V8.90323C0 9.26452 0.243539 9.6 0.597778 9.6H2.05902H2.50181V10.1161V15.3032C2.50181 15.6645 2.74535 16 3.09959 16H5.18075C5.31359 16 5.42429 15.9226 5.51285 15.8194C5.60141 15.7161 5.66783 15.5355 5.66783 15.3806V10.1419V9.62581H6.13276H7.12906C7.41688 9.62581 7.63828 9.41935 7.68256 9.10968V9.08387V9.05806L7.99252 7.27742C8.01466 7.09677 7.99252 6.89032 7.85968 6.68387C7.8154 6.55484 7.61614 6.42581 7.43902 6.4Z" />
                        </svg>
                    </a>
                    <a href="javascript:void(0)" class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                        <svg width="16" height="12" viewBox="0 0 16 12" class="fill-current">
                            <path d="M14.2194 2.06654L15.2 0.939335C15.4839 0.634051 15.5613 0.399217 15.5871 0.2818C14.8129 0.704501 14.0903 0.845401 13.6258 0.845401H13.4452L13.3419 0.751468C12.7226 0.258317 11.9484 0 11.1226 0C9.31613 0 7.89677 1.36204 7.89677 2.93542C7.89677 3.02935 7.89677 3.17025 7.92258 3.26419L8 3.73386L7.45806 3.71037C4.15484 3.61644 1.44516 1.03327 1.00645 0.587084C0.283871 1.76125 0.696774 2.88845 1.13548 3.59296L2.0129 4.90802L0.619355 4.20352C0.645161 5.18982 1.05806 5.96477 1.85806 6.52838L2.55484 6.99804L1.85806 7.25636C2.29677 8.45401 3.27742 8.94716 4 9.13503L4.95484 9.36986L4.05161 9.93346C2.60645 10.8728 0.8 10.8024 0 10.7319C1.62581 11.7652 3.56129 12 4.90323 12C5.90968 12 6.65806 11.9061 6.83871 11.8356C14.0645 10.2857 14.4 4.41487 14.4 3.2407V3.07632L14.5548 2.98239C15.4323 2.23092 15.7935 1.8317 16 1.59687C15.9226 1.62035 15.8194 1.66732 15.7161 1.6908L14.2194 2.06654Z" />
                        </svg>
                    </a>
                    <a href="javascript:void(0)" class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                        <svg width="16" height="12" viewBox="0 0 16 12" class="fill-current">
                            <path d="M15.6645 1.88018C15.4839 1.13364 14.9419 0.552995 14.2452 0.359447C13.0065 6.59222e-08 8 0 8 0C8 0 2.99355 6.59222e-08 1.75484 0.359447C1.05806 0.552995 0.516129 1.13364 0.335484 1.88018C0 3.23502 0 6 0 6C0 6 0 8.79263 0.335484 10.1198C0.516129 10.8664 1.05806 11.447 1.75484 11.6406C2.99355 12 8 12 8 12C8 12 13.0065 12 14.2452 11.6406C14.9419 11.447 15.4839 10.8664 15.6645 10.1198C16 8.79263 16 6 16 6C16 6 16 3.23502 15.6645 1.88018ZM6.4 8.57143V3.42857L10.5548 6L6.4 8.57143Z" />
                        </svg>
                    </a>
                    <a href="javascript:void(0)" class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                        <svg width="14" height="14" viewBox="0 0 14 14" class="fill-current">
                            <path d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z" />
                        </svg>
                    </a>
                </div>
                <p class="text-base text-body-color">&copy; 2025 TailGrids</p>
            </div>
        </div>
    </div>


    <div>
        <span class="absolute left-0 bottom-0 z-[-1]">
            <svg width="217" height="229" viewBox="0 0 217 229" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z" fill="url(#paint0_linear_1179_5)" />
                <defs>
                    <linearGradient id="paint0_linear_1179_5" x1="76.5" y1="281" x2="76.5" y2="1.22829e-05" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.08" />
                        <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
        </span>
        <span class="absolute top-10 right-10 z-[-1]">
            <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z" fill="url(#paint0_linear_1179_4)" />
                <defs>
                    <linearGradient id="paint0_linear_1179_4" x1="-1.63917e-06" y1="37.5" x2="75" y2="37.5" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#13C296" stop-opacity="0.31" />
                        <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
        </span>
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