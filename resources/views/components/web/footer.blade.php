<footer class="bg-white dark:bg-gray-900">
    <div class="container w-full px-16 py-12 mx-auto">
        <div class="md:flex md:-mx-3 md:items-center md:justify-between">
            <h1 class="text-xl font-semibold tracking-tight text-gray-800 md:mx-3 xl:text-2xl dark:text-white">Registration for Conferences</h1>
            
            <div class="mt-6 md:mx-3 shrink-0 md:mt-0 md:w-auto">
                <a href="https://unida.ac.id/success" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm text-white duration-300 bg-gray-800 rounded-lg gap-x-3 hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                    <span>Register Now</span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
        
        <hr class="my-6 border-gray-200 md:my-10 dark:border-gray-700">

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
            <div>
                <p class="font-semibold text-gray-800 dark:text-white">For any inquiries:</p>
        
              
                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="mailto:lui@unida.ac.id" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">lui@unida.ac.id</a>
                  
                </div>
            </div>

            <div>
                <p class="font-semibold text-gray-800 dark:text-white">  
                    Join Us</p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">
                        www.unida.ac.id</a>
              
                </div>
            </div>

        </div>
        
        <hr class="my-6 border-gray-200 md:my-10 dark:border-gray-700">
        
        <div class="flex flex-col items-center justify-between sm:flex-row">
            <a href="#">
                <img class="w-48 h-auto" src="{{ asset('logodic.png') }}" alt="">
            </a>

            <p class="mt-4 text-sm text-gray-500 sm:mt-0 dark:text-gray-300">© Copyright {{ date('Y') }}. All Rights Reserved.</p>
        </div>
    </div>
</footer>