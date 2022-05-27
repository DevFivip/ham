<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
@include("layouts.header")
@trixassets

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<body>
    <section class="relative block h-500-px">
        <div class="">
            <!-- <img class="absolute top-0 w-full h-full bg-center bg-cover" id="preview-banner" src="https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80" alt="imagen" /> -->
            <img style="min-height:500px; min-width:500px;" id="preview-banner" src="{{ url('storage/') }}/placeholder/background.png" alt="imagen" />
            <!-- <span id="blackOverlay" class="w-full h-full absolute opacity-90 bg-primary"></span> -->
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
                    <form action="{{route('group.store', app()->getLocale() )}}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                <div class="relative">
                                    <img alt="imagen" id="preview-avatar" src="{{ url('storage/') }}/placeholder/placeholder-avatar.jpg" style="margin-top:-20px;" class="shadow-xl rounded-lg h-auto align-middle border-none absolute -ml-20 lg:-ml-16 max-w-150-px">
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                <div class="py-6 px-3 mt-32 sm:mt-0">
                                    <label for="" class="font-medium">Imagen Principal (300x300 px)</label>
                                    <br>
                                    <input type="file" id="avatar" name="avatar" accept="image/*" class="w-1/3 cursor-pointer rounded-lg border-[1.5px] border-form-stroke font-medium text-body-color placeholder-body-color outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-form-stroke file:bg-[#F5F7FD] file:py-3 file:px-5 file:text-body-color file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                                    <br>
                                    <label for="" class="font-medium">Imagen Banner (2710 X 500 px)</label>
                                    <br>
                                    <input type="file" id="banner" name="banner" accept="image/*" class="w-1/3 cursor-pointer rounded-lg border-[1.5px] border-form-stroke font-medium text-body-color placeholder-body-color outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-form-stroke file:bg-[#F5F7FD] file:py-3 file:px-5 file:text-body-color file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                                </div>
                            </div>
                        </div>

                        <div class="mt-12">
                            <div class="mb-6">
                                <label for="" class="text-base font-normal text-primary">{{__("Title")}}*</label>
                                <input type="text" name="name" placeholder="{{__('Title')}}" max="25" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror


                            <div class="mb-6">
                                <label for="" class="text-base font-normal text-primary">{{__('Username')}}</label>
                                <input value="" type="text" name="url" placeholder="@username" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('username') }}" autocomplete="username">
                            </div>

                            @error('username')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror

                            <div class="mb-6">
                                <label for="" class="text-base font-normal text-primary">Url*</label>
                                <input type="text" value="https://" name="url" placeholder="Url" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('url') }}" required autocomplete="url">
                                <p class="text-left rounded bg-info py-1 px-2 text-sm font-semibold text-white mt-1 mb-1" style="width:300px ;">
                                    {{__('Include https:// at the beginning of the url')}}
                                </p>
                            </div>

                            @error('url')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror

                            <div class="mb-6">
                                <label for="" class="text-base font-normal text-primary">RRSS*</label>
                                <div class="relative">
                                    <select name="social_id" id="social" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" required autocomplete="social_id">
                                        <option value="">---{{__("Select")}} Red Social---</option>
                                        @foreach($socialMedia as $social)

                                        @if (old('social_id') == $social->id)

                                        <option value="{{$social->id}}" selected>{{$social->name}}</option>
                                        @else
                                        <option value="{{$social->id}}">{{$social->name}}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                    <span class="absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                                    </span>
                                </div>

                                @error('social_id')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="" class="text-base font-normal text-primary">{{__("Type")}}</label>
                                <div class="relative">
                                    <select name="group_type_id" id="group_type" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('group_type_id') }}" required autocomplete="group_type_id">
                                        <option value="">---{{__("Select")}} {{__("Type")}}---</option>
                                        @foreach($types as $type)

                                        @if (old('group_type_id') == $type->id)

                                        <option value="{{$type->id}}" selected>{{__($type->name)}}</option>
                                        @else
                                        <option value="{{$type->id}}">{{__($type->name)}}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                    <span class="absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                                    </span>
                                </div>
                                @error('group_type_id')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="" class="text-base font-normal text-primary">{{__("Location")}} *</label>
                                <div class="relative">
                                    <select name="location_id" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('location_id') }}" required autocomplete="location_id">
                                        <option value="">---{{__("Select")}} {{__("Country")}}---</option>
                                        @foreach($locations as $location)
                                        @if (old('location_id') == $location->id)
                                        <option value="{{$location->id}}" selected>{{$location->name}}</option>
                                        @else
                                        <option value="{{$location->id}}">{{$location->name}}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                    <span class="absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                                    </span>
                                </div>
                                @error('location_id')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="" class="text-base font-normal text-primary">{{__("Category")}} *</label>
                                <div class="relative">
                                    <select name="categoria_id" id="categoria" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('categoria_id') }}" required autocomplete="categoria_id">
                                        <option value="">---{{__("Select")}} {{__("Category")}}---</option>
                                        @foreach($categories as $categoria)

                                        @if (old('categoria_id') == $categoria->id)
                                        <option value="{{$categoria->id}}" selected>{{$categoria->name}}</option>
                                        @else
                                        <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <span class="absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                                    </span>
                                </div>
                                @error('categoria_id')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="" class="text-base font-normal text-primary">{{__("Subcategory")}} *</label>
                                <div class="relative">
                                    <select name="subcategoria_id" id="subcategoria" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('subcategoria_id') }}" required autocomplete="subcategoria_id">
                                        <option value="">---{{__("Select")}} {{__("Category")}} for continue---</option>
                                    </select>
                                    <span class="absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                                    </span>
                                </div>
                                @error('subcategoria_id')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="mt-10 py-10 border-t border-blueGray-200 text-left">
                                <h3 class="px-5 mb-10 text-[26px] font-semibold text-dark">Bio</h3>
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full lg:w-9/12 px-4">
                                        @trix(\App\Post::class, 'content',['hideTools'=>["file-tools",'history-tools']])
                                    </div>
                                </div>
                            </div>


                            <div class="mt-10 py-10 border-t border-blueGray-200 text-left">

                                <h3 class="px-5 mb-5 text-[26px] font-semibold text-dark">{{__("FAQ")}} <br><span class=" mb-5 text-[13px] font-semibold text-dark" style="font-size: 13px;">{{__("the following questions are optional, you are free not to answer them and leave the default values")}}</span></h3>
                                <div class="flex mb-5">
                                    <div class="w-full">
                                        <label for="" class="text-base font-normal text-primary ml-10">{{__("How many subscribers do you currently have?")}}</label>
                                        <input value="0" type="number" name="cant_suscriptores" placeholder="Cantidad usuarios, suscriptores ó miembros" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('cant_suscriptores') }}" required autocomplete="cant_suscriptores">
                                    </div>

                                    @error('cant_suscriptores')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="flex mb-5">
                                    <div class="w-full">
                                        <label for="" class="text-base font-normal text-primary">{{__("How many photographs or images can be found?")}}</label>
                                        <input value="0" type="number" name="cant_fotos" placeholder="{{__('Number of Images')}}" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('cant_fotos') }}" required autocomplete="cant_fotos">
                                    </div>

                                    @error('cant_fotos')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="flex mb-5">

                                    <div class="w-full">
                                        <label for="" class="text-base font-normal text-primary ml-10">{{__("How many videos do you currently own?")}}</label>
                                        <input value="0" type="number" name="cant_videos" placeholder="{{__('Number of Videos')}}" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('cant_videos') }}" required autocomplete="cant_videos">
                                    </div>

                                    @error('cant_videos')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="flex mb-5">
                                    <div class="w-full">
                                        <label for="" class="text-base font-normal text-primary">{{__("How many posts do you currently have?")}}</label>
                                        <input value="0" type="number" name="cant_posts" placeholder="{{__('Number of Post')}}" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('cant_posts') }}" required autocomplete="cant_posts">
                                    </div>

                                    @error('cant_posts')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>


                                <div class="flex mb-5">
                                    <div class="w-full">
                                        <label for="" class="text-base font-normal text-primary ml-10">{{__("How much is the price to enter or monthly?")}}</label>
                                        <input value="0" type="number" name="precio_membresia" placeholder="Precio de membresia" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('precio_membresia') }}" required autocomplete="precio_membresia">
                                    </div>

                                    @error('precio_membresia')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>


                                <div class="flex mb-5">
                                    <div class="w-full">
                                        <label for="" class="text-base font-normal text-primary">{{__("Within your group or channel are there links for your different social networks?")}}</label>
                                        <select name="show_more_social_medias" id="show_more_social_medias" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" required autocomplete="show_more_social_medias">
                                            <option value="1">{{__("Yes")}}</option>
                                            <option value="0">{{__("No")}}</option>
                                        </select>
                                    </div>

                                    @error('show_more_social_medias')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>

                                <div class="flex mb-5">

                                    <div class="w-full">
                                        <label for="" class="text-base font-normal text-primary ml-10">{{__("Will users be able to communicate directly with you?")}}</label>
                                        <select name="usuarios_comunicación" id="usuarios_comunicación" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" required autocomplete="usuarios_comunicación">
                                            <option value="1">{{__("Yes")}}</option>
                                            <option value="0">{{__("No")}}</option>
                                        </select>
                                    </div>

                                    @error('usuarios_comunicación')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>


                                <div class="flex mb-5">
                                    <div class="w-full">
                                        <label for="" class="text-base font-normal text-primary">{{__("How much monthly do you generate with this medium? express the amount in (USD) $")}}</label>
                                        <input value="0" type="text" name="cant_ganancias" placeholder="Default in 0" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('cant_ganancias') }}" required autocomplete="cant_ganancias">
                                    </div>

                                    @error('cant_ganancias')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>

                                <div class="flex mb-5">
                                    <div class="w-full">
                                        <label for="" class="text-base font-normal text-primary">{{__("How long has this media been created?")}}</label>
                                        <select name="show_more_social_medias" id="show_more_social_medias" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" required autocomplete="show_more_social_medias">
                                            <option value="0">{{__("Dot Show")}}</option>
                                            <option value="1">{{__("More at")}} 1 {{__("Week")}} </option>
                                            <option value="2">{{__("More at")}} 2 {{__("Week")}} </option>
                                            <option value="3">{{__("More at")}} 1 {{__("Month")}} </option>
                                            <option value="4">{{__("More at")}} 2 {{__("Months")}} </option>
                                            <option value="5">{{__("More at")}} 6 {{__("Months")}} </option>
                                            <option value="6">{{__("More at")}} 1 {{__("Year")}} </option>
                                            <option value="7">{{__("More at")}} 1 {{__("Year")}} y 6 {{__("Months")}} </option>
                                            <option value="8">{{__("More at")}} 2 {{__("Years")}} </option>
                                            <option value="9">{{__("More at")}} 3 {{__("Years")}} </option>
                                            <option value="10">{{__("More at")}} 4 {{__("Years")}} </option>
                                            <option value="11">{{__("More at")}} 5 {{__("Years")}} </option>
                                        </select>
                                    </div>

                                    @error('show_more_social_medias')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-6 py-10 w-full text-center mt-12">
                                <button class="inline-flex items-center justify-center bg-blue-700 py-4 px-10 text-center text-base font-normal text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
                                    {{__("Save")}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        // $(document).on("click", ".browse", function() {
        //     var file = $(this).parents().find(".file");
        //     file.trigger("click");
        // });
        $('input[type="file"]').change(function(e) {
            console.log(e.target.id)

            if (e.target.id === "avatar") {

                var fileName = e.target.files[0].name;

                console.log(e.target.files[0].size);

                kb = e.target.files[0].size / 1024

                if (kb < 1024) {

                    console.log(fileName);
                    $("#file-avatar").val(fileName);

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("preview-avatar").src = e.target.result;
                    };
                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);

                } else {
                    alert("el tamaño del la imagen supera el peso permitivo");
                    document.getElementById("avatar").value = null;
                }
            }

            if (e.target.id === "banner") {
                console.log(e.target.id)
                console.log(e.target.result)
                var fileName = e.target.files[0].name;

                let kb = e.target.files[0].size / 1024
                if (kb < 1024) {

                    console.log(kb)

                    console.log(fileName);
                    $("#file-banner").val(fileName);

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("preview-banner").src = e.target.result;
                    };
                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);
                } else {
                    alert("el tamaño del la imagen supera el peso permitivo");
                    document.getElementById("preview-banner").value = null;
                }
            }
        });
    </script>

    @include('layouts.footer')
</body>

</html>