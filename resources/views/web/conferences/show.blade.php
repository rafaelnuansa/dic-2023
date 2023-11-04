<x-app-layout>

    <x-slot name="header">
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="w-full mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-semibold text-gray-900">{{ $conference->name }}</h1>
            </div>
        </header>
    </x-slot>

    <section class="bg-gray-100">
        
    <div class="py-12">
        <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="lg:flex lg:items-center">
                        <div class="w-full ">
                            <div>
                                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                                    {{ $conference->name }}</h1>

                                <div class="mt-2">
                                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                                </div>
                            </div>

                            <div class="md:flex mb-10 md:items-center justify-center">
                                <img class="w-1/2 shadow mx-auto object-cover rounded" src="{{ $conference->image }}" alt="">
                            </div>
                            

                            <div class="md:flex md:items-start">
                                <div class="mb-6 md:mt-0">
                                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                        {{ $conference->theme }}</h1>
                                </div>
                            </div>

                            <div class="md:flex md:items-start">

                                <div class="mb-4 md:mt-0">
                                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Important
                                        Dates</h1>

                                        <p class="mt-3 text-gray-500 dark:text-gray-300">
                                        
                                       <b>Registration & Abstract Submission Deadline : 20 November 2023</b><br>
                                       <b>Full Paper Proceeding Submission Deadline : 20 November 2023</b><br>
                                       <b>Conference Day (Presentation) : 13 December 2023</b>
                                    </p>
                                    <p class="mt-3 text-gray-500 dark:text-gray-300">

                                    </p>
                                </div>
                            </div>

                            <div class="md:flex md:items-start">

                                <div class="mb-4 md:mt-0">
                                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Location
                                    </h1>

                                    <p class=" text-gray-500 dark:text-gray-300">
                                        {{ $conference->location }} - 
                                    <b>Available Virtual Conference / Online</b>
                                    </p>
                                </div>
                            </div>

                            <div class="md:flex md:items-start">

                                <div class="mb-4 md:mt-0">
                                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">
                                        Description</h1>

                                    <p class="mt-3 text-gray-500 dark:text-gray-300">
                                        {{ $conference->description }}
                                    </p>

                                    <h3 class="mt-4 text-xl font-semibold text-gray-700 capitalize dark:text-white">
                                        Registration System</h3>
                                    <p class="mt-3 text-gray-700 dark:text-white">
                                        Universitas Djuanda developed its own Conference
                                        Registration System. All registration proccess could be
                                        updated through system. We ensure the confereces are
                                        accesseble for world wide participants.
                                        https://unida.ac.id/success
                                    </p>

                                    
                                    <h3 class="mt-4 text-xl font-semibold text-gray-700 capitalize dark:text-white">
                                        Registration Fee</h3>


                                        <div class="mt-4 w-full overflow-hidden rounded-lg shadow-xs">
                                            <div class="w-full overflow-x-auto">
                                                <table class="w-full whitespace-no-wrap">
                                                    <thead>
                                                        <tr
                                                            class="text-xs uppercase tracking-wide text-left font-semibold text-gray-700 dark:text-gray-400 bg-gray-100 dark:bg-gray-800">
                                                            <th class="px-4 py-3">Category</th>
                                                            <th class="px-4 py-3">Registration Fee</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                                        <tr class="text-gray-700 dark:text-gray-400">
                                                            <td class="px-4 py-3">Faculty Members / Professionals</td>
                                                            <td class="px-4 py-3">55 USD</td>
                                                        </tr>
                                                        <tr class="text-gray-700 dark:text-gray-400">
                                                            <td class="px-4 py-3">Student</td>
                                                            <td class="px-4 py-3">25 USD</td>
                                                        </tr>
                                                        <tr class="text-gray-700 dark:text-gray-400">
                                                            <td class="px-4 py-3">Additional Paper</td>
                                                            <td class="px-4 py-3">25 USD</td>
                                                        </tr>
                                                        <tr class="text-gray-700 dark:text-gray-400">
                                                            <td class="px-4 py-3">Attendee</td>
                                                            <td class="px-4 py-3">20 USD</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                    <a href="https://unida.ac.id/success"
                                        class="inline-flex items-center justify-center mt-20 w-full px-4 py-2 text-sm text-white duration-300 bg-gray-800 rounded-lg gap-x-3 hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                                        <span>Register Now</span>

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>


                            {{-- {{ $conference->description }} --}}
                        </div>

                    </div>
                </div>
            </div>

            <div class=" overflow-hidden mt-10 sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <div class="lg:flex lg:items-center">
                        <div class="w-full">
                            <div>
                                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                               Keynote Speakers</h1>

                                <div class="mt-2">
                                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                                </div>
                            </div>
                            @if ($conference->keynotes->count() > 0)
                            
                            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">

                                @foreach ($conference->keynotes as $keynote)
                                <div class="w-full max-w-md px-4 py-5 mt-16 bg-white rounded-lg shadow-lg dark:bg-gray-800 transform hover:scale-110 hover:rotate-3 transition-transform duration-300">
                                    <div class="flex justify-center -mt-16 md:justify-end">
                                        <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full dark:border-blue-400" alt="{{ $keynote->name }}" src="{{ $keynote->image }}">
                                    </div>
                                
                                    <h2 class="mt-3 text-1xl font-bold text-gray-800 dark:text-white md:mt-0">{{ $keynote->name }}</h2>
                                
                                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-200">{{ $keynote->from }}</p>
                                
                                </div>
                                @endforeach
                            </div>
                            @else
                            <p class="text-gray-600 mt-4">No Keynote Speakers available.</p>
                            @endif

                  
                        </div>

                    </div>
                </div>
            </div>

       
        </div>
    </div>
    </section>

</x-app-layout>
