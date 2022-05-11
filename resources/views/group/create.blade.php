<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
@include("layouts.header")
@trixassets

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<body>

    <section class="relative block h-500-px">
        <div class="">
            <!-- <img class="absolute top-0 w-full h-full bg-center bg-cover" id="preview-banner" src="https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80" alt="imagen" /> -->
            <img class="absolute top-0 w-full bg-center bg-cover" id="preview-banner" src="{{ url('storage/') }}/placeholder/background.png" alt="imagen" />
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
                    <form action="{{route('group.store')}}" method="POST" enctype="multipart/form-data">
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

                        <div class="text-center mt-12">
                            <div class="mb-1">
                                <input type="text" name="name" placeholder="Titulo del Sitio" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror


                            <div class="mb-1">
                                <input type="text" name="url" placeholder="Url ó Enlace" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('url') }}" required autocomplete="url">
                            </div>

                            @error('url')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror

                            <div class="mb-1">
                                <div class="relative">
                                    <select name="social_id" id="social" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" required autocomplete="social_id">
                                        <option value="">---Seleccione Red Social---</option>
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

                            <div class="mb-1">
                                <div class="relative">
                                    <select name="group_type_id" id="group_type" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('group_type_id') }}" required autocomplete="group_type_id">
                                        <option value="">---Seleccione Tipo---</option>
                                        @foreach($types as $type)

                                        @if (old('group_type_id') == $type->id)

                                        <option value="{{$type->id}}" selected>{{$type->name}}</option>
                                        @else
                                        <option value="{{$type->id}}">{{$type->name}}</option>
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

                            <div class="mb-1">
                                <div class="relative">
                                    <select name="location_id" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('location_id') }}" required autocomplete="location_id">
                                        <option value="">---Seleccione Pais---</option>
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

                            <div class="mb-1">
                                <div class="relative">
                                    <select name="categoria_id" id="categoria" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('categoria_id') }}" required autocomplete="categoria_id">
                                        <option value="">---Seleccione Categoria---</option>
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

                            <div class="mb-1">
                                <div class="relative">
                                    <select name="subcategoria_id" id="subcategoria" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" value="{{ old('subcategoria_id') }}" required autocomplete="subcategoria_id">
                                        <option value="">---Seleccione Categoria Para Continuar---</option>
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
                                <h3 class="px-5 mb-10 text-[26px] font-semibold text-dark">Detalles del Grupo</h3>
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full lg:w-9/12 px-4">
                                        @trix(\App\Post::class, 'content',['hideTools'=>["file-tools",'history-tools']])
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1 py-10 w-full text-center mt-12">
                                <button class="inline-flex items-center justify-center bg-secondary py-4 px-10 text-center text-base font-normal text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
                                    Guardar
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
                console.log(fileName);
                $("#file-avatar").val(fileName);

                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("preview-avatar").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);

            }

            if (e.target.id === "banner") {
                console.log(e.target.id)
                console.log(e.target.result)
                var fileName = e.target.files[0].name;
                console.log(fileName);
                $("#file-banner").val(fileName);

                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("preview-banner").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);

            }
        });
    </script>

    @include('layouts.footer')
</body>

</html>