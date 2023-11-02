<section class="bg-white dark:bg-gray-800 lg:py-10 py-10 lg:flex lg:justify-center">
    <div class="container mx-auto w-full px-16 py-0">
        <div class="items-center lg:flex">
            <div class="w-full lg:w-1/2">
                <div class="relative max-w-3xl z-10 animate__animated animate__fadeInUp">
                    <h1 class="mt-5 text-4xl font-bold tracking-tighter text-gray-800 sm:mt-0 md:mt-5 lg:mt-10 xl:mt-10 sm:text-5xl/[3.5rem] md:text-6xl lg:text-6xl">Djuanda <br> International
                        <span class="text-amber-500 ">Conferences</span></h1>
                    <h5 class="mt-5 mb-5 text-base leading-relaxed tracking-tighter text-gray-500 sm:text-xl/[2rem] xl:text-2xl/[2.3rem]">{{ $conference->theme }}</h5>
                    <a href="{{ route('web.conferences.show', $conference->shortname) }}"
                        class="w-full px-5 py-2 mt-6 text-sm text-white transition-colors duration-300 transform bg-amber-600 rounded-lg lg:w-auto hover:bg-amber-500 focus:outline-none focus:bg-amber-500">Getting Started
                    </a>
                </div>
            </div>
            <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                <img class="w-full h-full lg:max-w-3xl animate__animated animate__fadeInUp" src="{{ asset('dic-illustration.png') }}"
                    alt="{{ $conference->name }}">
            </div>
        </div>
    </div>
</section>
