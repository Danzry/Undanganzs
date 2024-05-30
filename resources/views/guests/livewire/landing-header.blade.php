 <!-- ========== HEADER ========== -->
 <header
     class="sticky inset-x-0 top-0 z-40 flex flex-wrap w-full pb-6 text-sm bg-white shadow-sm sm:justify-start sm:flex-col sm:pb-0 dark:bg-gray-800 dark:border-neutral-700">
     <!-- Topbar -->
     <div class="max-w-[85rem] mx-auto w-full px-6 sm:px-6 lg:px-8 mt-2">
         <div class="flex items-center justify-end w-full py-2 gap-x-5 sm:pt-2 sm:pb-0">
             <a class="inline-flex items-center justify-center gap-2 text-sm font-medium text-gray-600 hover:text-[#ca9b52] dark:text-neutral-400 dark:hover:text-neutral-200"
                 href="#">
                 <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                     <path d="M21.54 15H17a2 2 0 0 0-2 2v4.54" />
                     <path
                         d="M7 3.34V5a3 3 0 0 0 3 3v0a2 2 0 0 1 2 2v0c0 1.1.9 2 2 2v0a2 2 0 0 0 2-2v0c0-1.1.9-2 2-2h3.17" />
                     <path d="M11 21.95V18a2 2 0 0 0-2-2v0a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05" />
                     <circle cx="12" cy="12" r="10" />
                 </svg>
                 English (US)
             </a>
             <a class="inline-flex items-center px-2 py-1 text-base font-bold text-[#333333] border border-[#333333] rounded-lg  gap-x-2 hover:border-[#ca9b52] hover:text-[#ca9b52] disabled:opacity-50 disabled:pointer-events-none dark:border-blue-500 dark:text-blue-500 dark:hover:text-blue-400 dark:hover:border-blue-400"
                 href="{{ route('login') }}" wire:navigate>
                 <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                     <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                     <circle cx="12" cy="7" r="4" />
                 </svg>
                 Sign In
             </a>
         </div>
     </div>
     <!-- End Topbar -->

     <nav class="relative max-w-[85rem] w-full mx-auto px-6 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
         aria-label="Global">
         <div class="flex items-center justify-between">
             <a class="flex-none mb-5 text-3xl font-extrabold text-[#333333] dark:text-white" href="{{ route('welcome') }}"
                 aria-label="Undanganzs">Undanganzs</a>
             <div class="sm:hidden">
                 <button type="button"
                     class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-gray-200 rounded-lg hs-collapse-toggle size-9 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700"
                     data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation"
                     aria-label="Toggle navigation">
                     <svg class="flex-shrink-0 hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                         <line x1="3" x2="21" y1="6" y2="6" />
                         <line x1="3" x2="21" y1="12" y2="12" />
                         <line x1="3" x2="21" y1="18" y2="18" />
                     </svg>
                     <svg class="flex-shrink-0 hidden hs-collapse-open:block size-4" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                         <path d="M18 6 6 18" />
                         <path d="m6 6 12 12" />
                     </svg>
                 </button>
             </div>
         </div>
         <div id="navbar-collapse-with-animation"
             class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow sm:block">
             <div
                 class="flex flex-col mt-5 font-medium gap-y-4 gap-x-0 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">
                 <a class="font-medium text-blue-500 sm:py-6 dark:text-neutral-200 dark:hover:text-blue-500"
                     href="{{ route('welcome') }}" wire:navigate aria-current="page">Laman
                     Utama</a>
                 <a class="text-gray-600 hover:text-[#ca9b52] sm:py-6 dark:text-neutral-200 dark:hover:text-blue-500"
                     href="{{ route('service') }}">Perkhidmatan</a>
                 <a class="text-gray-600 hover:text-[#ca9b52] sm:py-6 dark:text-neutral-200 dark:hover:text-blue-500"
                     href="{{ route('price') }}" wire:navigate>Harga</a>
                 <a class="text-gray-600 hover:text-[#ca9b52] sm:py-6 dark:text-neutral-200 dark:hover:text-blue-500"
                     href="#">Tentang</a>
                 <a class="text-gray-600 hover:text-[#ca9b52] sm:py-6 dark:text-neutral-200 dark:hover:text-blue-500"
                     href="#">Hubungi</a>

                 {{-- <div
                     class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-4">
                     <button type="button"
                         class="flex items-center w-full font-medium text-gray-800 hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400">
                         Dropdown
                         <svg class="flex-shrink-0 ms-2 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                             <path d="m6 9 6 6 6-6" />
                         </svg>
                     </button>

                     <div
                         class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-neutral-800 sm:dark:border dark:border-neutral-700 dark:divide-neutral-700 before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5">
                         <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                             href="#">
                             About
                         </a>
                         <div
                             class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover] relative">
                             <button type="button"
                                 class="flex items-center justify-between w-full px-3 py-2 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300">
                                 Sub Menu
                                 <svg class="flex-shrink-0 sm:-rotate-90 ms-2 size-4"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round">
                                     <path d="m6 9 6 6 6-6" />
                                 </svg>
                             </button>

                             <div
                                 class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-lg p-2 dark:bg-neutral-800 sm:dark:border dark:border-neutral-700 dark:divide-neutral-700 before:absolute sm:border before:-end-5 before:top-0 before:h-full before:w-5 !mx-[10px] top-0 end-full">
                                 <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                                     href="#">
                                     About
                                 </a>
                                 <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                                     href="#">
                                     Downloads
                                 </a>
                                 <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                                     href="#">
                                     Team Account
                                 </a>
                             </div>
                         </div>

                         <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                             href="#">
                             Downloads
                         </a>
                         <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                             href="#">
                             Team Account
                         </a>
                     </div>
                 </div>
             </div> --}}
         </div>
     </nav>
 </header>
 <!-- ========== END HEADER ========== -->