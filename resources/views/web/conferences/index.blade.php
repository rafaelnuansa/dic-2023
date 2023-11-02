<x-app-layout>
    <section class="bg-gray-100 dark:bg-gray-800 lg:py-12 lg:flex lg:justify-center ">
        <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Conferences</h2>
            
            <div class="mt-2 mb-10">
                <span class="inline-block w-40 h-1 bg-amber-500 rounded-full"></span>
                <span class="inline-block w-3 h-1 ml-1 bg-amber-500 rounded-full"></span>
                <span class="inline-block w-1 h-1 ml-1 bg-amber-500 rounded-full"></span>
            </div>
            <div class="w-full">
                <div x-data="{ loading: true }">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                        @foreach ($conferences as $conference)
                            <div
                                class="relative overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 transform hover:scale-110 hover:rotate-2 transition-transform duration-300">
                                <img  class="object-cover w-full h-60"
                                    src="{{ $conference->image }}" alt="{{ $conference->name }}">

                                <!-- Overlay with text always visible -->
                                <div
                                    class="absolute inset-0 p-3 flex flex-col justify-end bg-opacity-75 bg-gray-900 text-white">
                                    <a href="{{ route('web.conferences.show', $conference->shortname) }}" class="block text-xl font-bold">{{ $conference->name }}</a>
                                    <span class="text-sm text-white dark:text-gray-200">Start Date: {{ \Carbon\Carbon::parse($conference->start_date)->format('d M Y') .' to ' . Carbon\Carbon::parse($conference->end_date)->format('d M Y') }}</span>
                                     <span class="text-sm">{{ $conference->theme }}</span>
                                </div>
                            </div>
                   

                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-6">
            {{ $conferences->links('vendor.pagination.tailwind') }}
        </div>
        
    </section>
</x-app-layout>
