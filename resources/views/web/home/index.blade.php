<x-app-layout>
    <x-hero />
    <section class="bg-gray-100 dark:bg-gray-800 lg:py-10 py-10 lg:flex lg:justify-center">
        <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8 text-white animate__animated animate__fadeInUp">
        <h2 class="text-4xl text-gray-800 font-semibold mb-4">Conferences</h2>

            <div>
                <div class="mt-2 mb-10">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
            <div class="w-full">
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                        @foreach ($conferences as $conference)
                            <a href="{{ route('web.conferences.show', $conference->shortname) }}"
                                class="relative overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 transform hover:scale-110 hover:rotate-2 transition-transform duration-300">
                                <img class="object-cover w-full h-60" src="{{ $conference->image }}" alt="avatar">

                                <!-- Overlay with text always visible -->
                                <div
                                    class="absolute inset-0 p-3 flex flex-col justify-end bg-opacity-75 bg-gray-900 text-white">
                                    <h2 
                                        class="block text-xl font-bold">{{ $conference->name }}</h2>
                                    <span class="text-sm text-white font-semibold dark:text-gray-200">
                                        {{ \Carbon\Carbon::parse($conference->start_date)->format('d M Y') }}</span>
                                        <span class="text-sm truncate">{{ $conference->theme }}</span>

                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-800 lg:py-10 py-10 lg:flex lg:justify-center">
        <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8 text-white animate__animated animate__fadeInLeft">
            <h2 class="text-4xl text-gray-800 font-semibold mb-4">Field of Study</h2>

            <div>
                <div class="mt-2 mb-10">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
            <p class="text-lg text-gray-400 mb-12">Achieving Sustainability Sourcing Amind the Challenge of Climate
                Change requires cooperation from all sectors such as government, private sector, academics, civil
                society and citizens to create a better world for our future generations. There are 17 goals from the
                Intitute for Global Environmental Strategies (IGES) Agenda, with four series:</p>

            <!-- Field of Study Categories -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Sosial Series -->
                <div
                    class="p-4 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                    <h2 class="text-2xl font-bold mb-2">Social Series</h2>
                    <ul class="list-none text-sm">
                        <li>Anti-Poverty</li>
                        <li>Zero Hunger</li>
                        <li>Health and Good Life</li>
                        <li>Quality of Education</li>
                    </ul>
                </div>


                <!-- Environment Series -->
                <div
                    class="p-4 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                    <h2 class="text-2xl font-bold mb-2">Environment Series</h2>
                    <ul class="list-none text-sm">
                        <li>Clean Water and Sanitation</li>
                        <li>Sustainable Cities and Communities</li>
                        <li>Responsible Consumption and Production</li>
                        <li>Climate Change Action</li>
                        <li>Life Under Water</li>
                        <li>Life on Land</li>
                    </ul>
                </div>

                <!-- Economy Series -->
                <div
                    class="p-4 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                    <h2 class="text-2xl font-bold mb-2">Economy Series</h2>
                    <ul class="list-none text-sm">
                        <li>Affordable and Clean Energy</li>
                        <li>Decent Work and Economic Growth</li>
                        <li>Industry, Innovation, and Infrastructure</li>
                        <li>Reducing Inequality</li>
                        <li>Partnership to Achieve Goals</li>
                    </ul>
                </div>

                <!-- Law and Governance -->
                <div
                    class="p-4 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                    <h2 class="text-2xl font-bold mb-2">Law and Governance</h2>
                    <ul class="list-none text-sm">
                        <li>Peace, Justice, and Institutions</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 dark:bg-gray-800 lg:py-10 py-10 lg:flex lg:justify-center">
        <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8 animate__animated animate__fadeInLeft">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Keynote Speakers</h2>
            <div>
                <div class="mt-2">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
            <div class="w-full">
                @if ($keynotes->count() > 0)

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">

                        @foreach ($keynotes as $keynote)
                            <div
                                class="w-full max-w-md px-4 py-5 mt-16 bg-white rounded-lg shadow-lg dark:bg-gray-800 transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                                <div class="flex justify-center -mt-16 md:justify-end">
                                    <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full dark:border-blue-400"
                                        alt="{{ $keynote->name }}" src="{{ $keynote->image }}">
                                </div>

                                <h2 class="mt-3 text-1xl font-bold text-gray-800 dark:text-white md:mt-0">
                                    {{ $keynote->name }}</h2>

                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-200">{{ $keynote->from }}</p>

                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-600 mt-4">No Keynote Speakers available.</p>
                @endif


            </div>
        </div>
    </section>

    <section
        class="bg-white dark:bg-gray-800 lg:py-10 py-10 lg:flex lg:justify-center animate__animated animate__fadeInUp">
        <div class="flex flex-col px-4 py-5 space-y-6 lg:h-[32rem] lg:flex-row lg:items-center ">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                    <h1
                        class="mt-5 text-4xl font-bold tracking-tighter text-gray-800 sm:mt-0 md:mt-5 lg:mt-10 xl:mt-10 sm:text-5xl/[3.5rem] md:text-6xl lg:text-6xl">
                        Sponsor & Joint Host</h1>

                    <div>
                        <div class="mt-2 mb-10">
                            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600 dark:text-gray-300">The Benefits:
                        AdLips every session
                        Logo on Website, Proceeding, Backdrop at the Conference and Certificate</p>

                </div>
            </div>

            <div
                class="flex items-center justify-center w-full h-96 lg:w-1/2 transform hover:scale-100 hover:rotate-3 transition-transform duration-300">
                <img class="object-cover w-full h-full max-w-2xl rounded-md" src="{{ asset('2022conference.png') }}"
                    alt="2022 Conference">
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-16">
        <div class="container px-16 mx-auto text-center">
            <h1 class="text-4xl font-semibold text-gray-800 mb-4">Organized & Sponsored by</h1>

            <div>
                <div class="mt-2 mb-10">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
            <p class="text-lg mb-12 text-gray-600">We would like to express our gratitude to our sponsors and joint
                hosts for their support in making this event possible.</p>

            <!-- Sponsor & Joint Host Logos -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Sponsor/Host Logo 1 -->
                <div
                    class="p-4 bg-white rounded-lg shadow-lg transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                    <img src="{{ asset('sponsored/1.png') }}" alt="Sponsor/Host Logo 1" class="mx-auto h-20">
                </div>

                <!-- Sponsor/Host Logo 2 -->
                <div
                    class="p-4 bg-white rounded-lg shadow-lg transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                    <img src="{{ asset('sponsored/2.png') }}" alt="Sponsor/Host Logo 2" class="mx-auto h-20">
                </div>

                <!-- Sponsor/Host Logo 3 -->
                <div
                    class="p-4 bg-white rounded-lg shadow-lg transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                    <img src="{{ asset('sponsored/3.png') }}" alt="Sponsor/Host Logo 3" class="mx-auto h-20">
                </div>

                <!-- Sponsor/Host Logo 4 -->
                <div
                    class="p-4 bg-white rounded-lg shadow-lg transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                    <img src="{{ asset('sponsored/4.png') }}" alt="Sponsor/Host Logo 4" class="mx-auto h-20">
                </div>

                <div
                    class="p-4 bg-white rounded-lg shadow-lg transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                    <img src="{{ asset('sponsored/5.png') }}" alt="Sponsor/Host Logo 4" class="mx-auto h-20">
                </div>

                <div
                    class="p-4 bg-white rounded-lg shadow-lg transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                    <img src="{{ asset('sponsored/6.png') }}" alt="Sponsor/Host Logo 4" class="mx-auto h-20">
                </div>

                <div
                    class="p-4 bg-white rounded-lg shadow-lg transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                    <img src="{{ asset('sponsored/7.png') }}" alt="Sponsor/Host Logo 4" class="mx-auto h-20">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 relative">
        <div class="container px-16 mx-auto text-center">
            <h1 class="text-4xl font-semibold text-gray-800 mb-4">Maps</h1>
    
            <div class="maps rounded relative">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.93827400578!2d106.84720157462412!3d-6.654573165053317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c95387c8d3eb%3A0x941f12ea770a2c9e!2sUniversitas%20Djuanda!5e0!3m2!1sid!2sid!4v1696188038535!5m2!1sid!2sid"
                    width="100%" height="450" class="rounded" style="border:0;" allowfullscreen loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
    
                
            </div>
        </div>
    </section>
    

</x-app-layout>
