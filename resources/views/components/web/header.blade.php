<nav x-data="{ isOpen: false }" class="sticky top-0 z-50 bg-white dark:bg-gray-900 border-t-4 border-blue-500">
    
    <div class="w-full container bg-white px-16 py-4 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <a href="{{ route('web.home') }}">
                <img class="w-48 h-auto" src="{{ asset('logodic.png') }}" alt=""> 
            </a>
            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                    </svg>
            
                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
            <div class="flex flex-col md:flex-row md:mx-6">
                <a class="my-2 text-gray-700 transition-colors font-bold duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="{{ route('web.home') }}">Home</a>
                <a class="my-2 text-gray-700 transition-colors font-bold duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="{{ route('web.conferences') }}">Conferences</a>
                <a target="_blank" class="my-2 text-gray-700 transition-colors font-bold duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" target="_blank" href="https://drive.google.com/file/d/1GEC_jThJ6vfU_LN4QUyQtjOp5-sISM73/view?usp=sharing">Download Flyer</a>

                <a class="my-2 text-gray-700 transition-colors font-bold duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="#">Registration and Payment</a>
         
            </div>

            <div class="flex justify-center md:block">
                <a class="relative text-gray-700 transition-colors font-bold duration-300 transform dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300" href="https://unida.ac.id/success">
                  Registration
                </a>
            </div>
        </div>


    </div>
</nav>