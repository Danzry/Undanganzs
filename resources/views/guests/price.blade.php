<x-landing-layout>
    <x-slot name="header">

    </x-slot>
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        <div class="overflow-hidden">
            <!-- Hero -->
            <div class="relative">
                <!-- Gradients -->
                <div aria-hidden="true" class="flex -z-[1] absolute -top-48 start-0">
                    <div
                        class="bg-purple-200 opacity-30 blur-3xl w-[1036px] h-[600px] dark:bg-purple-900 dark:opacity-20">
                    </div>
                    <div
                        class="bg-gray-200 opacity-90 blur-3xl w-[577px] h-[300px] transform translate-y-32 dark:bg-neutral-800/60">
                    </div>
                </div>
                <!-- End Gradients -->

                <div class="max-w-[85rem] px-4 pt-10 sm:px-6 lg:px-8 lg:pt-14 mx-auto">
                    <!-- Title -->
                    <div class="max-w-2xl mx-auto mb-10 text-center">
                        <h2
                            class="text-3xl font-bold leading-tight text-transparent md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight bg-clip-text bg-gradient-to-r from-blue-700 to-blue-400">
                            Simple, transparent pricing</h2>
                        <p class="mt-2 text-gray-800 lg:text-lg dark:text-neutral-200">Whatever your status, our offers
                            evolve according to your needs.</p>
                    </div>
                    <!-- End Title -->

                    <!-- Switch -->
                    {{-- <div class="flex items-center justify-center">
                        <label for="pricing-switch" class="text-sm text-gray-600 min-w-14 me-3 dark:text-neutral-400">
                            Monthly
                        </label>

                        <input type="checkbox" id="pricing-switch"
                            class="relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-purple-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-purple-600 checked:border-purple-600 focus:checked:border-purple-600 dark:bg-neutral-800 dark:border-neutral-800 dark:checked:bg-purple-500 dark:checked:border-purple-500 dark:focus:ring-offset-gray-600
  
            before:inline-block before:size-6 before:bg-white checked:before:bg-white before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-neutral-400 dark:checked:before:bg-white"
                            checked>

                        <label for="pricing-switch" class="text-sm text-gray-600 min-w-14 ms-3 dark:text-neutral-400">
                            Annually
                        </label>
                    </div> --}}
                    <!-- End Switch -->

                    <!-- Grid -->
                    <div
                        class="grid gap-3 mt-6 md:mt-12 sm:grid-cols-2 lg:grid-cols-4 md:gap-6 lg:gap-3 xl:gap-6 lg:items-center">
                        <!-- Card -->
                        <div
                            class="flex flex-col p-4 text-center bg-white border border-gray-200 rounded-2xl md:p-8 dark:bg-neutral-900 dark:border-neutral-800">
                            <h4 class="text-lg font-medium text-gray-800 dark:text-neutral-200">Free</h4>
                            <span
                                class="text-3xl font-bold text-gray-800 mt-7 md:text-4xl xl:text-5xl dark:text-neutral-200">Free</span>
                            <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">Get started with basic features
                            </p>

                            <ul class="mt-7 space-y-2.5 text-sm">
                                <li class="flex space-x-2">
                                    <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-700"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-800 dark:text-neutral-400">
                                        1 user
                                    </span>
                                </li>

                                <li class="flex space-x-2">
                                    <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-700"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-800 dark:text-neutral-400">
                                        Plan features
                                    </span>
                                </li>

                                <li class="flex space-x-2">
                                    <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-700"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-800 dark:text-neutral-400">
                                        Product support
                                    </span>
                                </li>
                            </ul>

                            <a class="inline-flex items-center justify-center w-full px-4 py-3 mt-5 text-sm font-semibold border rounded-lg gap-x-2 border-violet-600 text-violet-600 hover:border-violet-500 hover:text-violet-500 disabled:opacity-50 disabled:pointer-events-none dark:border-blue-700 dark:text-blue-700 dark:hover:text-violet-400 dark:hover:border-violet-400"
                                href="{{ route('register') }}">
                                Register
                            </a>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div
                            class="flex flex-col p-4 text-center bg-white border-2 shadow-xl border-violet-900 rounded-2xl md:p-8 dark:bg-neutral-900 dark:border-blue-700">
                            <p class="mb-3"><span
                                    class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-violet-100 text-violet-800 dark:bg-blue-700 dark:text-white">Most
                                    popular</span></p>
                            <h4 class="text-lg font-medium text-gray-800 dark:text-neutral-200">Startup</h4>
                            <span
                                class="mt-5 text-3xl font-bold text-gray-800 md:text-4xl xl:text-5xl dark:text-neutral-200">
                                $39
                            </span>
                            <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">All the basics for starting a
                                new business</p>

                            <ul class="mt-7 space-y-2.5 text-sm">
                                <li class="flex space-x-2">
                                    <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-700"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-800 dark:text-neutral-400">
                                        2 users
                                    </span>
                                </li>

                                <li class="flex space-x-2">
                                    <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-700"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-800 dark:text-neutral-400">
                                        Plan features
                                    </span>
                                </li>

                                <li class="flex space-x-2">
                                    <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-700"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-800 dark:text-neutral-400">
                                        Product support
                                    </span>
                                </li>
                            </ul>

                            <a class="inline-flex items-center justify-center w-full px-4 py-3 mt-5 text-sm font-semibold text-white bg-blue-700 border border-transparent rounded-lg gap-x-2 hover:bg-violet-700 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('register') }}">
                                Register
                            </a>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div
                            class="flex flex-col p-4 text-center bg-white border border-gray-200 rounded-2xl md:p-8 dark:bg-neutral-900 dark:border-neutral-800">
                            <h4 class="text-lg font-medium text-gray-800 dark:text-neutral-200">Team</h4>
                            <span
                                class="mt-5 text-3xl font-bold text-gray-800 md:text-4xl xl:text-5xl dark:text-neutral-200">
                                $89
                            </span>
                            <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">Everything you need for a
                                growing business</p>

                            <ul class="mt-7 space-y-2.5 text-sm">
                                <li class="flex space-x-2">
                                    <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-700"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-800 dark:text-neutral-400">
                                        5 users
                                    </span>
                                </li>

                                <li class="flex space-x-2">
                                    <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-700"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-800 dark:text-neutral-400">
                                        Plan features
                                    </span>
                                </li>

                                <li class="flex space-x-2">
                                    <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-700"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-800 dark:text-neutral-400">
                                        Product support
                                    </span>
                                </li>
                            </ul>

                            <a class="inline-flex items-center justify-center w-full px-4 py-3 mt-5 text-sm font-semibold border rounded-lg gap-x-2 border-violet-600 text-violet-600 hover:border-violet-500 hover:text-violet-500 disabled:opacity-50 disabled:pointer-events-none dark:border-blue-700 dark:text-blue-700 dark:hover:text-violet-400 dark:hover:border-violet-400"
                                href="{{ route('register') }}">
                                Register
                            </a>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div
                            class="flex flex-col p-4 text-center bg-white border border-gray-200 rounded-2xl md:p-8 dark:bg-neutral-900 dark:border-neutral-800">
                            <h4 class="text-lg font-medium text-gray-800 dark:text-neutral-200">Enterprise</h4>
                            <span
                                class="mt-5 text-3xl font-bold text-gray-800 md:text-4xl xl:text-5xl dark:text-neutral-200">
                                $149
                            </span>
                            <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">Advanced features for scaling
                                your business</p>

                            <ul class="mt-7 space-y-2.5 text-sm">
                                <li class="flex space-x-2">
                                    <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-700"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-800 dark:text-neutral-400">
                                        10 users
                                    </span>
                                </li>

                                <li class="flex space-x-2">
                                    <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-700"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-800 dark:text-neutral-400">
                                        Plan features
                                    </span>
                                </li>

                                <li class="flex space-x-2">
                                    <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-700"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-800 dark:text-neutral-400">
                                        Product support
                                    </span>
                                </li>
                            </ul>

                            <a class="inline-flex items-center justify-center w-full px-4 py-3 mt-5 text-sm font-semibold border rounded-lg gap-x-2 border-violet-600 text-violet-600 hover:border-violet-500 hover:text-violet-500 disabled:opacity-50 disabled:pointer-events-none dark:border-blue-700 dark:text-blue-700 dark:hover:text-violet-400 dark:hover:border-violet-400"
                                href="{{ route('register') }}">
                                Register
                            </a>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Grid -->
                </div>
            </div>
            <!-- End Hero -->
        </div>

        <!-- Testimonials -->
        <div class="relative overflow-hidden">
            <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
                <!-- Gradients -->
                <div aria-hidden="true" class="flex -z-[1] absolute start-0">
                    <div
                        class="bg-purple-200 opacity-20 blur-3xl w-[1036px] h-[300px] dark:bg-purple-900 dark:opacity-20">
                    </div>
                </div>
                <!-- End Gradients -->

                <!-- Grid -->
                <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
                    <div class="hidden lg:block lg:col-span-2">
                        <img class="rounded-xl"
                            src="https://images.unsplash.com/photo-1671726203390-cdc4354ee2eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            alt="Image Description">
                    </div>
                    <!-- End Col -->

                    <div class="lg:col-span-4">
                        <!-- Blockquote -->
                        <blockquote>
                            <svg class="w-24 h-auto mb-4" viewBox="-0.3 0 320.3999999999999 99.9"
                                xmlns="http://www.w3.org/2000/svg" width="2500" height="779">
                                <path
                                    d="M168.7 25.1c0 3.6-2.9 6.5-6.5 6.5s-6.5-2.9-6.5-6.5 2.8-6.5 6.5-6.5c3.7.1 6.5 3 6.5 6.5zm-26.8 13.1v1.6s-3.1-4-9.7-4c-10.9 0-19.4 8.3-19.4 19.8 0 11.4 8.4 19.8 19.4 19.8 6.7 0 9.7-4.1 9.7-4.1V73c0 .8.6 1.4 1.4 1.4h8.1V36.8h-8.1c-.8 0-1.4.7-1.4 1.4zm0 24.1c-1.5 2.2-4.5 4.1-8.1 4.1-6.4 0-11.3-4-11.3-10.8s4.9-10.8 11.3-10.8c3.5 0 6.7 2 8.1 4.1zm15.5-25.5h9.6v37.6h-9.6zm143.4-1c-6.6 0-9.7 4-9.7 4V18.7h-9.6v55.7h8.1c.8 0 1.4-.7 1.4-1.4v-1.7s3.1 4.1 9.7 4.1c10.9 0 19.4-8.4 19.4-19.8s-8.5-19.8-19.3-19.8zm-1.6 30.5c-3.7 0-6.6-1.9-8.1-4.1V48.8c1.5-2 4.7-4.1 8.1-4.1 6.4 0 11.3 4 11.3 10.8s-4.9 10.8-11.3 10.8zm-22.7-14.2v22.4h-9.6V53.2c0-6.2-2-8.7-7.4-8.7-2.9 0-5.9 1.5-7.8 3.7v26.2h-9.6V36.8h7.6c.8 0 1.4.7 1.4 1.4v1.6c2.8-2.9 6.5-4 10.2-4 4.2 0 7.7 1.2 10.5 3.6 3.4 2.8 4.7 6.4 4.7 12.7zm-57.7-16.3c-6.6 0-9.7 4-9.7 4V18.7h-9.6v55.7h8.1c.8 0 1.4-.7 1.4-1.4v-1.7s3.1 4.1 9.7 4.1c10.9 0 19.4-8.4 19.4-19.8.1-11.4-8.4-19.8-19.3-19.8zm-1.6 30.5c-3.7 0-6.6-1.9-8.1-4.1V48.8c1.5-2 4.7-4.1 8.1-4.1 6.4 0 11.3 4 11.3 10.8s-4.9 10.8-11.3 10.8zm-26-30.5c2.9 0 4.4.5 4.4.5v8.9s-8-2.7-13 3v26.3H173V36.8h8.1c.8 0 1.4.7 1.4 1.4v1.6c1.8-2.1 5.7-4 8.7-4zM91.5 71c-.5-1.2-1-2.5-1.5-3.6-.8-1.8-1.6-3.5-2.3-5.1l-.1-.1C80.7 47.2 73.3 32 65.5 17l-.3-.6c-.8-1.5-1.6-3.1-2.4-4.7-1-1.8-2-3.7-3.6-5.5C56 2.2 51.4 0 46.5 0c-5 0-9.5 2.2-12.8 6-1.5 1.8-2.6 3.7-3.6 5.5-.8 1.6-1.6 3.2-2.4 4.7l-.3.6C19.7 31.8 12.2 47 5.3 62l-.1.2c-.7 1.6-1.5 3.3-2.3 5.1-.5 1.1-1 2.3-1.5 3.6C.1 74.6-.3 78.1.2 81.7c1.1 7.5 6.1 13.8 13 16.6 2.6 1.1 5.3 1.6 8.1 1.6.8 0 1.8-.1 2.6-.2 3.3-.4 6.7-1.5 10-3.4 4.1-2.3 8-5.6 12.4-10.4 4.4 4.8 8.4 8.1 12.4 10.4 3.3 1.9 6.7 3 10 3.4.8.1 1.8.2 2.6.2 2.8 0 5.6-.5 8.1-1.6 7-2.8 11.9-9.2 13-16.6.8-3.5.4-7-.9-10.7zm-45.1 5.2C41 69.4 37.5 63 36.3 57.6c-.5-2.3-.6-4.3-.3-6.1.2-1.6.8-3 1.6-4.2 1.9-2.7 5.1-4.4 8.8-4.4s7 1.6 8.8 4.4c.8 1.2 1.4 2.6 1.6 4.2.3 1.8.2 3.9-.3 6.1-1.2 5.3-4.7 11.7-10.1 18.6zm39.9 4.7c-.7 5.2-4.2 9.7-9.1 11.7-2.4 1-5 1.3-7.6 1-2.5-.3-5-1.1-7.6-2.6-3.6-2-7.2-5.1-11.4-9.7 6.6-8.1 10.6-15.5 12.1-22.1.7-3.1.8-5.9.5-8.5-.4-2.5-1.3-4.8-2.7-6.8-3.1-4.5-8.3-7.1-14.1-7.1s-11 2.7-14.1 7.1c-1.4 2-2.3 4.3-2.7 6.8-.4 2.6-.3 5.5.5 8.5 1.5 6.6 5.6 14.1 12.1 22.2-4.1 4.6-7.8 7.7-11.4 9.7-2.6 1.5-5.1 2.3-7.6 2.6-2.7.3-5.3-.1-7.6-1-4.9-2-8.4-6.5-9.1-11.7-.3-2.5-.1-5 .9-7.8.3-1 .8-2 1.3-3.2.7-1.6 1.5-3.3 2.3-5l.1-.2c6.9-14.9 14.3-30.1 22-44.9l.3-.6c.8-1.5 1.6-3.1 2.4-4.6.8-1.6 1.7-3.1 2.8-4.4 2.1-2.4 4.9-3.7 8-3.7s5.9 1.3 8 3.7c1.1 1.3 2 2.8 2.8 4.4.8 1.5 1.6 3.1 2.4 4.6l.3.6c7.6 14.9 15 30.1 21.9 45v.1c.8 1.6 1.5 3.4 2.3 5 .5 1.2 1 2.2 1.3 3.2.8 2.6 1.1 5.1.7 7.7z"
                                    fill="#ff5a5f" />
                            </svg>

                            <p
                                class="text-xl font-medium text-gray-800 lg:text-2xl lg:leading-normal dark:text-neutral-200">
                                To say that switching to Preline has been life-changing is an understatement. My
                                business has tripled and I got my life back.
                            </p>

                            <footer class="mt-6">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 lg:hidden">
                                        <img class="rounded-full size-12"
                                            src="https://images.unsplash.com/photo-1671726203390-cdc4354ee2eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                            alt="Image Description">
                                    </div>
                                    <div class="ms-4 lg:ms-0">
                                        <p class="font-medium text-gray-800 dark:text-neutral-200">
                                            Nicole Grazioso
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                                            Head of Finance
                                        </p>
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                        <!-- End Blockquote -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
        </div>
        <!-- End Testimonials -->

        <!-- FAQ -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Grid -->
            <div class="grid gap-10 md:grid-cols-5">
                <div class="md:col-span-2">
                    <div class="max-w-xs">
                        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">
                            Frequently<br>asked questions</h2>
                        <p class="hidden mt-1 text-gray-600 md:block dark:text-neutral-400">Answers to the most
                            frequently asked questions.</p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="md:col-span-3">
                    <!-- Accordion -->
                    <div class="divide-y divide-gray-200 hs-accordion-group dark:divide-neutral-700">
                        <div class="pb-3 hs-accordion active"
                            id="hs-basic-with-title-and-arrow-stretched-heading-one">
                            <button
                                class="inline-flex items-center justify-between w-full pb-3 font-semibold text-gray-800 transition rounded-lg hs-accordion-toggle group gap-x-3 md:text-lg text-start hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                                Can I cancel at anytime?
                                <svg class="flex-shrink-0 block text-gray-600 hs-accordion-active:hidden size-5 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                                <svg class="flex-shrink-0 hidden text-gray-600 hs-accordion-active:block size-5 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                <p class="text-gray-600 dark:text-neutral-400">
                                    Yes, you can cancel anytime no questions are asked while you cancel but we would
                                    highly appreciate if you will give us some feedback.
                                </p>
                            </div>
                        </div>

                        <div class="pt-6 pb-3 hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-two">
                            <button
                                class="inline-flex items-center justify-between w-full pb-3 font-semibold text-gray-800 transition rounded-lg hs-accordion-toggle group gap-x-3 md:text-lg text-start hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
                                My team has credits. How do we use them?
                                <svg class="flex-shrink-0 block text-gray-600 hs-accordion-active:hidden size-5 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                                <svg class="flex-shrink-0 hidden text-gray-600 hs-accordion-active:block size-5 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                                <p class="text-gray-600 dark:text-neutral-400">
                                    Once your team signs up for a subscription plan. This is where we sit down, grab a
                                    cup of coffee and dial in the details.
                                </p>
                            </div>
                        </div>

                        <div class="pt-6 pb-3 hs-accordion"
                            id="hs-basic-with-title-and-arrow-stretched-heading-three">
                            <button
                                class="inline-flex items-center justify-between w-full pb-3 font-semibold text-gray-800 transition rounded-lg hs-accordion-toggle group gap-x-3 md:text-lg text-start hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
                                How does Preline's pricing work?
                                <svg class="flex-shrink-0 block text-gray-600 hs-accordion-active:hidden size-5 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                                <svg class="flex-shrink-0 hidden text-gray-600 hs-accordion-active:block size-5 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                                <p class="text-gray-600 dark:text-neutral-400">
                                    Our subscriptions are tiered. Understanding the task at hand and ironing out the
                                    wrinkles is key.
                                </p>
                            </div>
                        </div>

                        <div class="pt-6 pb-3 hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-four">
                            <button
                                class="inline-flex items-center justify-between w-full pb-3 font-semibold text-gray-800 transition rounded-lg hs-accordion-toggle group gap-x-3 md:text-lg text-start hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-four">
                                How secure is Preline?
                                <svg class="flex-shrink-0 block text-gray-600 hs-accordion-active:hidden size-5 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                                <svg class="flex-shrink-0 hidden text-gray-600 hs-accordion-active:block size-5 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-four"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
                                <p class="text-gray-600 dark:text-neutral-400">
                                    Protecting the data you trust to Preline is our first priority. This part is really
                                    crucial in keeping the project in line to completion.
                                </p>
                            </div>
                        </div>

                        <div class="pt-6 pb-3 hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-five">
                            <button
                                class="inline-flex items-center justify-between w-full pb-3 font-semibold text-gray-800 transition rounded-lg hs-accordion-toggle group gap-x-3 md:text-lg text-start hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-five">
                                How do I get access to a theme I purchased?
                                <svg class="flex-shrink-0 block text-gray-600 hs-accordion-active:hidden size-5 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                                <svg class="flex-shrink-0 hidden text-gray-600 hs-accordion-active:block size-5 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-five"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-five">
                                <p class="text-gray-600 dark:text-neutral-400">
                                    If you lose the link for a theme you purchased, don't panic! We've got you covered.
                                    You can login to your account, tap your avatar in the upper right corner, and tap
                                    Purchases. If you didn't create a login or can't remember the information, you can
                                    use our handy Redownload page, just remember to use the same email you originally
                                    made your purchases with.
                                </p>
                            </div>
                        </div>

                        <div class="pt-6 pb-3 hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-six">
                            <button
                                class="inline-flex items-center justify-between w-full pb-3 font-semibold text-gray-800 transition rounded-lg hs-accordion-toggle group gap-x-3 md:text-lg text-start hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-six">
                                Upgrade License Type
                                <svg class="flex-shrink-0 block text-gray-600 hs-accordion-active:hidden size-5 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                                <svg class="flex-shrink-0 hidden text-gray-600 hs-accordion-active:block size-5 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-six"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-six">
                                <p class="text-gray-600 dark:text-neutral-400">
                                    There may be times when you need to upgrade your license from the original type you
                                    purchased and we have a solution that ensures you can apply your original purchase
                                    cost to the new license purchase.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End FAQ -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
    <x-slot name="footer">

    </x-slot>
</x-landing-layout>
