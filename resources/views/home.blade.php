@extends('layouts.app')

@section('content')

<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">
        <!-- 
        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif -->


        @if(!!isset($message))

        <section class="container">
            <div class="mb-11 flex w-full rounded-lg border-l-[6px] border-transparent bg-white px-7 py-8 shadow-md md:p-9">
                <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399] bg-opacity-30">
                    <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.281 0.813685L16.2688 0.798941L16.2555 0.785173C15.8893 0.406018 15.2974 0.404945 14.93 0.781955L6.27018 9.47967L2.09399 5.27433C1.7266 4.89706 1.13447 4.89804 0.76826 5.27729C0.41058 5.6477 0.41058 6.23243 0.76826 6.60284L0.768224 6.60287L0.773158 6.60784L5.18177 11.0472C5.47504 11.3494 5.87368 11.5 6.24551 11.5C6.64809 11.5 7.02039 11.3448 7.30901 11.0475L16.1938 2.12381C16.5881 1.75601 16.5842 1.18007 16.281 0.813685Z" fill="#34D399" stroke="#34D399"></path>
                    </svg>
                </div>
                <div class="w-full">
                    <h5 class="mb-3 text-lg font-semibold text-dark">
                        Create
                    </h5>
                    <p class="mb-6 text-base leading-relaxed text-body-color">

                        {{$message['message']}}
                    </p>
                </div>
            </div>

        </section>

        @endif

        <section class="py-20 lg:py-[120px]">
            <div class="container">
                <div class="relative z-10 overflow-hidden rounded bg-primary py-12 px-8 md:p-[70px]">
                    <div class="-mx-4 flex flex-wrap items-center">
                        <div class="w-full px-4 lg:w-1/2">
                            <h2 class="mb-6 text-3xl font-bold leading-tight text-white sm:mb-8 sm:text-[38px] lg:mb-0">
                                {{__("My Posts")}} <br class="hidden xs:block" />
                            </h2>
                        </div>
                        <div class="w-full px-4 lg:w-1/2">
                            <div class="flex flex-wrap lg:justify-end">
                                <a href="/{{app()->getLocale() }}/precios" class="my-1 mr-4 inline-block rounded bg-white bg-opacity-[15%] py-4 px-6 text-base font-medium text-white transition hover:bg-opacity-100 hover:text-primary md:px-9 lg:px-6 xl:px-9">
                                    {{__("Upgrade to version pro")}}
                                </a>
                                <a href="/{{app()->getLocale() }}/home/group/create" class="my-1 inline-block rounded bg-[#13C296] py-4 px-6 text-base font-medium text-white transition hover:bg-opacity-90 md:px-9 lg:px-6 xl:px-9">
                                    {{__("Create New")}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container">
                <div class="-mx-4 flex flex-wrap">
                    @foreach($grupos as $grupo)
                    <div :class="showCards == 'all' || showCards == 'groups' ? 'block' : 'hidden' " class="w-full px-4 md:w-1/2 xl:w-1/3">
                        <div class="relative mb-12">
                            <div class="overflow-hidden rounded-lg">
                                <img src="{{(!!$grupo->imagen ? '/storage/img/'. $grupo->imagen : '/storage/placeholder/placeholder-avatar.jpg')}}" alt="portfolio" class="w-full" />
                            </div>
                            <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
                                <span class="mb-2 block text-sm font-semibold text-primary">
                                    {{$grupo->social->name}} {{__($grupo->type->name)}}
                                </span>
                                <h3 class="mb-4 text-xl font-bold text-dark">
                                    {{$grupo->name}}
                                </h3>
                                @if(!!$grupo->status)
                                <span class="m-2 inline-block rounded-full bg-secondary py-1 px-3 text-sm font-semibold text-white">
                                    {{__("Active")}}
                                </span>
                                @else
                                <span class="m-2 inline-block rounded-full bg-danger py-1 px-3 text-sm font-semibold text-white">
                                    {{__("Disable")}}
                                </span>
                                @endif
                                <br>
                                <a href="/{{app()->getLocale() }}/home/group/{{$grupo->id}}/edit" class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                                    {{__("Edit")}}
                                </a>
                                <a href="/{{app()->getLocale() }}/{{$grupo->social->name}}/{{$grupo->type->name}}/categoria/{{$grupo->categoria->slug}}/{{$grupo->subcategoria->slug}}/{{$grupo->slug}}" class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                                    {{__("View")}}
                                </a>

                                @if(!!$grupo->status)
                                <a href="/{{app()->getLocale() }}#" class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-danger transition border-danger">
                                    {{__("Disable")}}
                                </a>
                                @else
                                <a href="/{{app()->getLocale() }}/home/payment/{{$grupo->id}}" class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-secondary transition border-secondary">
                                    {{__("Active")}}
                                </a>
                                @endif


                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        @if(!count($grupos))

        <section class="container">
            <div class="mb-11 flex w-full rounded-lg border-l-[6px] border-transparent bg-white px-7 py-8 shadow-md md:p-9">
                <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399] bg-opacity-30">
                    <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.281 0.813685L16.2688 0.798941L16.2555 0.785173C15.8893 0.406018 15.2974 0.404945 14.93 0.781955L6.27018 9.47967L2.09399 5.27433C1.7266 4.89706 1.13447 4.89804 0.76826 5.27729C0.41058 5.6477 0.41058 6.23243 0.76826 6.60284L0.768224 6.60287L0.773158 6.60784L5.18177 11.0472C5.47504 11.3494 5.87368 11.5 6.24551 11.5C6.64809 11.5 7.02039 11.3448 7.30901 11.0475L16.1938 2.12381C16.5881 1.75601 16.5842 1.18007 16.281 0.813685Z" fill="#34D399" stroke="#34D399"></path>
                    </svg>
                </div>
                <div class="w-full">
                    <h5 class="mb-3 text-lg font-semibold text-dark">
                        {{__("Your account has been successfully created and confirmed.")}}
                    </h5>
                    <p class="mb-6 text-base leading-relaxed text-body-color">
                        {{__("You can create 1 (one) sample group and publish it for 15 days and make yourself known.")}}
                    </p>
                    <div class="flex">
                        <a href="/{{app()->getLocale() }}/home/group/create" class="mr-6 inline-block text-sm font-medium text-[#34D399]">
                            {{__("Create New")}}
                        </a>
                    </div>
                </div>
            </div>

        </section>

        @endif

        @include("layouts.footer")

    </div>
</main>
@endsection