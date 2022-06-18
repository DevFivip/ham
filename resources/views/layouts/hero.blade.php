<section class="overflow-hidden bg-blue-200 py-20 ">
    <div class="container mx-auto px-12">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full text-center">
                <h1 class="mb-8 text-3xl font-bold text-fuchsia-700 sm:text-4xl">
                    {{ __("OnlyHam.co Find what you're looking for") }}
                </h1>

                <h2 class="mb-8 font-bold text-fuchsia-600">
                    {{ __("Start now to search for OnlyFans accounts, Telegram groups and WhatsApp groups and find Content Creators and communities.")}}
                </h2>

                <form class="flex items-center" action="/{{app()->getLocale()}}/search">
                    <label for="voice-search" class="sr-only">{{__("Search")}}</label>
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" name="name" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="{{__('Find content creator, channel, and groups')}}" required>
                    </div>
                    <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>{{__("Search")}}</button>
                </form>


            </div>
            <div class="w-full text-center">
                <div id="container-8042e1b54794005195890b4db8ffe2f8"></div>
            </div>
        </div>
    </div>
</section>